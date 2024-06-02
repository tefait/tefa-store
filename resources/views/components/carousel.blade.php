<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Like Tokopedia</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .size-4 {
            width: 16px;
            height: 28px;
        }
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<section class="relative h-full w-full flex justify-center group px-4 mb-2 lg:mb-4 lg:px-0">
    <button id="prevBtn" class="hidden lg:block bg-white border rounded-full p-3 absolute z-30 top-[45%] -left-5 translate-x-10 group-hover:translate-x-0 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
            <path d="M7 1L1 7l6 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
    <button id="nextBtn" class="hidden lg:block bg-white border rounded-full p-3 absolute z-30 top-[45%] -right-5 -translate-x-10 group-hover:translate-x-0 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
            <path d="M1 1l6 6-6 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
    <div class="swiper myCarousel relative overflow-hidden h-[120px] sm:h-[220px] lg:h-[300px] rounded-xl">
        <div class="swiper-wrapper h-full w-full">
            <div class="swiper-slide flex justify-center items-center h-full w-full">
                <img src="https://source.unsplash.com/random/800x600?nature,water" alt="Slide Pertama" class="h-full w-full object-cover" />
            </div>
            <div class="swiper-slide flex justify-center items-center h-full w-full">
                <img src="https://source.unsplash.com/random/800x600?nature,forest" alt="Slide Kedua" class="h-full w-full object-cover" />
            </div>
            <div class="swiper-slide flex justify-center items-center h-full w-full">
                <img src="https://source.unsplash.com/random/800x600?nature,mountain" alt="Slide Ketiga" class="h-full w-full object-cover" />
            </div>
        </div>
        <div class="swiper-pagination flex justify-start absolute bottom-2 lg:bottom-3 px-3 lg:px-5"></div>
    </div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.myCarousel', {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 4000,
        },
        navigation: {
            nextEl: '#nextBtn',
            prevEl: '#prevBtn',
        },
    });

    document.getElementById('nextBtn').addEventListener('click', function() {
        swiper.slideNext();
    });

    document.getElementById('prevBtn').addEventListener('click', function() {
        swiper.slidePrev();
    });
</script>

</body>
</html>
