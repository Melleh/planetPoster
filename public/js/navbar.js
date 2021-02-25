
    window.addEventListener('DOMContentLoaded', (event) => {
        console.log('DOM fully loaded and parsed');
    });
    const navSlide = () => {
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');


        burger.addEventListener('click', () => {
            //Toggle Nav
            console.log('hoi')
            nav.classList.toggle('nav-active');

            //Animate Links
            navLinks.forEach((link, index) => {
                const fadeInDelay = ((index + 1) / 7 + 0.2);

                if (link.style.animation){
                    link.style.animation = ''
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${fadeInDelay}s`;
                }
            });
            // Burger Animation
            burger.classList.toggle('toggle');
        });
    }
