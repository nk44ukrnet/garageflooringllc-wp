<?php

//add alt tags to images

add_filter('wp_get_attachment_image_attributes', 'change_attachement_image_attributes', 20, 2);

function change_attachement_image_attributes($attr, $attachment)
{
    // Get post parent
    $parent = get_post_field('post_parent', $attachment);

    // Get post type to check if it's product
    $type = get_post_field('post_type', $parent);
    if ($type != 'product') {
        return $attr;
    }

    /// Get title
    $title = get_post_field('post_title', $parent);


    $attr['alt'] = $title;
    $attr['title'] = $title;

    return $attr;
}

//badges function
function badge_output($arr)
{
    if (!empty($arr) && $arr['enabled'][0]) {
        $title = $arr['title'];
        $url = '';
        $popupContent = '';
        $url_or_popup = $arr['is_it_direct_url_or_popup'];
        $uniqID = '';
        $modalTrigger = '';
        $open_in_a_new_tab = '';
        if (!empty($url_or_popup)) {
            switch ($url_or_popup) {
                case 'url':
                    $url = $arr['specify_only_url_leave_text_blank'];
                    if (empty($url)) $url = '#!';
                    $popupContent = '';
                    if ($url[0] != '#') {
                        $open_in_a_new_tab = 'target="_blank"';
                    }
                    break;
                case 'popup':
                    $popupContent = $arr['popup_content'];
                    $url = '#!';
                    $randValue = rand(0, 999999999999);
                    $uniqID = uniqid('popup_single_') . '_rand_value_' . $randValue;
                    if (!empty($popupContent)) {
                        $modalTrigger = 'data-modal-id="' . $uniqID . '"';
                    }
                    break;
            }
        }
        $iconSelection = $arr['do_you_want_to_use_default_icon_for_specific_image_instead'];
        $iconHTML = $arr['icon_html'];
        $iconImage = $arr['image'];
        ?>

        <a href="<?php echo $url; ?>" <?php echo $modalTrigger; ?> <?php echo $open_in_a_new_tab; ?>
           class="hb-single-badges__item">
            <?php if (!empty($iconHTML) || !empty($iconImage)) { ?>
                <div class="hb-single-badges__img">
                    <?php if (!empty($iconSelection)) { ?>
                        <?php switch ($iconSelection) {
                            case  'Default Icon':
                                echo $iconHTML;
                                break;
                            case 'Specific Image':
                                ?>
                                <img src="<?php echo $iconImage; ?>" alt="<?php echo $title; ?>"
                                     loading="lazy">
                                <?php
                                break;
                            default:
                                break;
                        } ?>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if (!empty($title)) { ?>
                <p class="hb-single-badges__text"><?php echo $title; ?></p>
            <?php } ?>
        </a>

        <?php if (!empty($popupContent)) { ?>
            <!--Popup-->
            <div class="modal-backdrop" id="<?php echo $uniqID; ?>">
                <div class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <a href="#!" class="close-modal">×</a>
                            <div class="modal-content__inner">
                                <?php echo $popupContent; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of popup-->
        <?php } ?>

    <?php } ?>
<?php }

//end of function
