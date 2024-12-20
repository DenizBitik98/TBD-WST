import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Swiper from 'swiper';

document.addEventListener('DOMContentLoaded', () => {
    const swiperContainer = document.querySelector('.swiper-container');
    if (swiperContainer) {
        new Swiper(swiperContainer, {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
            lazy: {
                loadOnTransitionStart: true,
                loadPrevNext: true,
            },
            loop: true,
        });
    }
});
