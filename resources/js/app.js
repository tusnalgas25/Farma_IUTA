import './bootstrap';
import Alpine from 'alpinejs';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
        // Opciones de configuración
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        // ... otras opciones que necesites
    });
});
