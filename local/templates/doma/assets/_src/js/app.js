import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import Alpine from 'alpinejs'
import AOS from 'aos';
import '/node_modules/aos/dist/aos.css';
window.Alpine = Alpine;

document.addEventListener("DOMContentLoaded", () => {
    Alpine.start()
    AOS.init();


    //swipers
    const swiperOurProjects = new Swiper(".our-project-swiper", {
        centeredSlides: true,
        loop: true,
        parallax: true,
        speed: 1200,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".our-projects-next",
            prevEl: ".our-projects-prev",
        },
    });

//Лок прокрутки в бургере
    let body = document.body;
    document.querySelector('.burger-menu').addEventListener('click', function() {
        body.style.overflow = 'hidden';
    });

    document.querySelector('.open-menu-close_btn').addEventListener('click', function() {
        body.style.overflow = 'auto';
    });

    document.querySelectorAll('.menu-item').forEach(function(menuItem) {
        menuItem.addEventListener('click', function() {
            body.style.overflow = 'auto';
        });
    });
});