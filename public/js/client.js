// js cho swipper
const swiper = new Swiper('.swiper-container', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        slideChange: function () {
            const slides = document.querySelectorAll('.swiper-slide');
            slides.forEach((slide, index) => {
                if (index === this.activeIndex) {
                    slide.style.opacity = 1;
                } else {
                    slide.style.opacity = 0;
                }
            });
        }
    },
});

// allow heart
const heartButton = document.getElementById('heart-button');
const heartIcon = document.getElementById('heart-icon');

heartButton.addEventListener('click', function () {
    const isFilled = heartIcon.getAttribute('fill') === 'currentColor';
    if (isFilled) {
        heartIcon.setAttribute('fill', 'none');
    } else {
        heartIcon.setAttribute('fill', 'currentColor');
    }
});
