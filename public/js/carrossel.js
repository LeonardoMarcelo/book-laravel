
window.onscroll = function () {
    let top = window.pageYOffset || document.documentElement.scrollTop;
    if (top > 100) {
        const menu = document.querySelector(".header");
        menu.classList.add("scroll");
    } else {
        const menu = document.querySelector(".header");
        menu.classList.remove("scroll");
    }
};


const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: false,

    slidesPerView: 6,
    spaceBetwen: 20,
    slidesPerGroup: 4,
    loopFillGroupWithBlank: true,

    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 320px
        190: {
            slidesPerView: 1.8,
        },
        300: {
            slidesPerView: 2.5,
        },
        370: {
            slidesPerView: 2.8,
            spaceBetwen: 10

        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3.6,
        },
        580: {
            slidesPerView: 4.8,
        },
        // when window width is >= 640px
        720: {
            slidesPerView: 4.9,
        },
        1000: {
            slidesPerView: 5,
        },
    },
});
