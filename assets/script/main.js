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

    //product page quantity + - change qty filed
    try {
        document.addEventListener('click', function (e) {
            let current = e.target,
                targetPlusClass = 'quantity-plus',
                targetMinusClass = 'quantity-minus';

            function runValModification(cssClassName) {
                let quantityInput = document.querySelector('input.qty');
                if(quantityInput) {
                    let val = quantityInput.value;
                    val = val.trim();

                    if(cssClassName === 'quantity-plus') {
                        if(!val) val = 0;

                        if(!Number.isInteger(+val)) {
                            val = 1;
                        } else {
                            if(val < 0) val = 0;
                            +val++;
                        }
                    } else if (cssClassName === 'quantity-minus') {
                        if(!val) val = 1;

                        if(!Number.isInteger(+val)) {
                            val = 1;
                        } else {
                            +val--;
                        }
                    }

                    if(val <= 0) val = 1;

                    quantityInput.setAttribute('value', `${val + ''}`);
                    quantityInput.value = val + '';
                }
            }

            if(current.classList.contains(targetPlusClass)) {
                runValModification(targetPlusClass);
            }

            if(current.classList.contains(targetMinusClass)) {
                runValModification(targetMinusClass);
            }
        })

    } catch (e) {
        console.log('Qunatity sinlge page error ', e);
    }

});
