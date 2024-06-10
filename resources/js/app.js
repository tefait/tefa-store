import 'preline';
import '../css/app.css';
import './bootstrap'
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener("keydown", function (evt) {
    if (evt.code === "Backslash") {
        const overlay = HSOverlay.getInstance('[data-hs-overlay="#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"]', true);
        const combobox = HSComboBox.getInstance('#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger [data-hs-combo-box]', true);

        if (overlay.element && overlay.element.overlay.classList.contains('open')) return false;

        overlay.element.open();
        combobox.element.setCurrent();
    }
});

// Initialize Carousel
var swiper = new Swiper(".myCarousel", {
    slidesPerView: 1,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: '#nextBtnCar',
        prevEl: '#prevBtnCar',
    },
    renderBullet: function (index, swiperPagination) {
        return '<span class="' + swiperPagination + ' swiper-pagination-bullet"></span>';
    },
});

// Add event listeners for custom buttons
document.querySelectorAll('.custom-button').forEach(function (button) {
    button.addEventListener('click', function () {
        if (this.id === 'prevBtnCar') {
            swiper.slidePrev();
        } else if (this.id === 'nextBtnCar') {
            swiper.slideNext();
        }
    });
});

// Initialize Swiper Produk Terlaris
var swiper = new Swiper(".mySwiperPT", {
    slidesPerView: "auto",
    centeredSlides: false,
    freeMode: true,
    spaceBetween: 10,
    breakpoints: {
        1024: {
            spaceBetween: 13,
        },
    },
    navigation: {
        nextEl: '#nextBtnPT',
        prevEl: '#prevBtnPT',
    },
});

// Initialize Swiper Segera Hadir
var swiper = new Swiper(".mySwiperSH", {
    slidesPerView: "auto",
    centeredSlides: false,
    freeMode: true,
    spaceBetween: 10,
    breakpoints: {
        1024: {
            spaceBetween: 13,
        },
    },
    navigation: {
        nextEl: '#nextBtnSH',
        prevEl: '#prevBtnSH',
    },
});
