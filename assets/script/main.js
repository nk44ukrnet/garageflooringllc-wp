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
            closeMobileMenuBtn.addEventListener('click', ()=>{
                mobileNavigationMenu.classList.remove(activeClass);
                document.body.classList.remove(lockClass);
            });
        }
    } catch (e) {
        console.log('hamburger mobile menu error ', e);
    }

})