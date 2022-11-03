// NAV BAR

function Menu(e) {
    let list = document.getElementsByClassName('menu');
    e.name === 'menu' ?
        (e.name = "close",
            list.classList.add('top-[80px]'),
            list.classList.add('opacity-100')
        ) :
        (e.name = "menu",
            list.classList.remove('top-[80px]'),
            list.classList.remove('opacity-100')
        )
}

// SWIPER
document.addEventListener('DOMContentLoaded',  () => {
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 32,
        autoplay: {
            delay: 8000,
        },
        navigation: {
            nextEl: '.next-button',
            prevEl: '.prev-button',
        },
        breakpoints: {
            640: {
                slidesPerView: 1.5,
                centeredSlides: true,
            },
            1024: {
                centeredSlides: false,
                slidesPerView: 2.25,
            },
        },
    })
});

