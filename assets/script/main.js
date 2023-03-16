window.addEventListener('DOMContentLoaded', function () {

    //slinky header nav menu for mobile
    try {
        //jQuery('#primary-menu-slinky').addClass('slinky-menu');
        const slinky = jQuery('#primary-menu-slinky').slinky({
            speed: 300,
            resize: true,
        });
    } catch (e) {
        console.log('slinky lib error ', e);
    }

    //hamburger mobile menu
    try {
        let hamburgerBtnTrigger = document.querySelector('.mob-menu-trigger'),
            mobileNavigationMenu = document.querySelector('.slinky-mobile-menu'),
            closeMobileMenuBtn = document.querySelector('.close-slinky-menu'),
            activeClass = 'active',
            lockClass = '_lock';

        if (hamburgerBtnTrigger && mobileNavigationMenu && closeMobileMenuBtn) {
            hamburgerBtnTrigger.addEventListener('click', () => {
                mobileNavigationMenu.classList.add(activeClass);
                document.body.classList.add(lockClass);
            });
            closeMobileMenuBtn.addEventListener('click', () => {
                mobileNavigationMenu.classList.remove(activeClass);
                document.body.classList.remove(lockClass);
            });
        }
    } catch (e) {
        console.log('hamburger mobile menu error ', e);
    }

    //product page quantity + - change qty filed
    try {
        document.addEventListener('click', function (e) {
            let current = e.target,
                targetPlusClass = 'quantity-plus',
                targetMinusClass = 'quantity-minus';

            function runValModification(cssClassName) {
                let quantityInput = document.querySelector('input.qty');
                if (quantityInput) {
                    let val = quantityInput.value;
                    val = val.trim();

                    if (cssClassName === 'quantity-plus') {
                        if (!val) val = 0;

                        if (!Number.isInteger(+val)) {
                            val = 1;
                        } else {
                            if (val < 0) val = 0;
                            +val++;
                        }
                    } else if (cssClassName === 'quantity-minus') {
                        if (!val) val = 1;

                        if (!Number.isInteger(+val)) {
                            val = 1;
                        } else {
                            +val--;
                        }
                    }

                    if (val <= 0) val = 1;

                    quantityInput.setAttribute('value', `${val + ''}`);
                    quantityInput.value = val + '';
                    quantityInput.dispatchEvent(new Event('change', {bubbles: true}));
                }
            }

            if (current.classList.contains(targetPlusClass)) {
                runValModification(targetPlusClass);
            }

            if (current.classList.contains(targetMinusClass)) {
                runValModification(targetMinusClass);
            }
        })

    } catch (e) {
        console.log('Qunatity sinlge page error ', e);
    }

    //modal actions
    try {
        let modalBackDrop = document.querySelectorAll('.modal-backdrop'),
            modalClose = document.querySelectorAll('.close-modal'),
            modalContent = document.querySelectorAll('.modal-content'),
            dataModal = document.querySelectorAll('[data-modal-id]'),
            activeClass = 'active',
            lockClass = '_lock';

        dataModal.forEach(item => {
            item.addEventListener('click', e => {
                let dataId = item.getAttribute('data-modal-id');
                let modalBackdrop = document.querySelector(`#${dataId}`);
                if (modalBackdrop) {
                    modalBackdrop.classList.add(activeClass);
                    document.body.classList.add(lockClass);
                }
            })
        })

        modalContent.forEach(item => {
            item.addEventListener('click', e => {
                e.stopPropagation();
            })
        })
        modalClose.forEach(item => {
            item.addEventListener('click', e => {
                let current = e.target;
                current.closest('.modal-backdrop').classList.remove(activeClass);
                document.body.classList.remove(lockClass);
            })
        })
        modalBackDrop.forEach(item => {
            item.addEventListener('click', e => {
                item.classList.remove(activeClass);
                document.body.classList.remove(lockClass);
            })
        })

    } catch (e) {
        console.log('modal error ', e);
    }

    //product options element duplication (single product page)
    //--Used Plugin swatches instead of this code--
    // try {
    //     let selects = document.querySelectorAll(".variations select");
    //     selects.forEach(function(select) {
    //         let options = select.options;
    //         let container = document.createElement("div");
    //         container.classList.add("product-options-js");
    //
    //         for (var i = 0; i < options.length; i++) {
    //             let option = options[i];
    //             if (option.value === "") continue;
    //             let link = document.createElement("a");
    //             link.href = "#";
    //             link.textContent = option.textContent;
    //             link.dataset.value = option.value;
    //             link.addEventListener("click", function(e) {
    //                 e.preventDefault();
    //                 let value = this.dataset.value;
    //                 select.value = value;
    //                 setActiveLink(link);
    //                 select.dispatchEvent(new Event("change", { bubbles: true }));
    //             });
    //             container.appendChild(link);
    //         }
    //
    //         select.parentNode.insertBefore(container, select.nextSibling);
    //
    //         // Set active link on load
    //         setActiveLink(container.querySelector(`a[data-value="${select.value}"]`));
    //
    //         // Set active link when select value changes
    //         select.addEventListener("change", function() {
    //             let value = select.value;
    //             setActiveLink(container.querySelector(`a[data-value="${value}"]`));
    //         });
    //
    //         function setActiveLink(link) {
    //             container.querySelectorAll("a").forEach(function(a) {
    //                 if (a === link) {
    //                     a.classList.add("active");
    //                 } else {
    //                     a.classList.remove("active");
    //                 }
    //             });
    //         }
    //     });
    // } catch (e) {
    //     console.log("Product options element duplication error (single product page) ", e);
    // }

    try {
        //testimonials product category swiper
        let pageSwiperTestimonials = document.querySelector('.hb-category-page-testimonials-swiper');
        if (pageSwiperTestimonials) {
            const swiper = new Swiper('.hb-category-page-testimonials-swiper', {
                // Optional parameters
                //loop: true,
                clickable: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            });
        }
    } catch (e) {
        console.log('testimonials swiper error ', e);
    }

    //single product open lightbox when click on thumbnails
    try {
        document.addEventListener('click', function (e) {
            let current = e.target;
            if (current.closest('.flex-control-nav')
                || current.classList.contains('.flex-control-nav')) {
                if (document.querySelector('.woocommerce-product-gallery__trigger')) {
                    document.querySelector('.woocommerce-product-gallery__trigger').click();
                }
            }
        })
    } catch (e) {
        console.log('Single product page thumbnails click to open lightbox error ', e);
    }

    //lunch lightbox on specific hash
    try {
        function hashDetectLightBoxLunch(hash) {
            switch (hash) {
                case '#triggerLightbox':
                    if (document.querySelector('.woocommerce-product-gallery__trigger')) {
                        document.querySelector('.woocommerce-product-gallery__trigger').click();
                    }
                    window.location.hash = '#!';
                    break;
            }
        }

        window.addEventListener('hashchange', function () {
            let hash = window.location.hash;
            hashDetectLightBoxLunch(hash);
        });
        let hash = window.location.hash;
        hashDetectLightBoxLunch(hash);
    } catch (e) {
        console.log('lightbox lunch on hash change error ', e);
    }

});
