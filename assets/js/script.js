var swiper = new Swiper(".home-slider", {
    loop:true,
    spaceBetween: 20,
    pagination: {
       el: ".swiper-pagination",
       clickable:true,
     },
 });
 var homeSlider = new Swiper(".home-slider", {
    loop: true,
    spaceBetween: 20,
    pagination: {
       el: ".swiper-pagination",
       clickable: true,
    },
    autoplay: {
       delay: 5000, // Adjust the delay in milliseconds (e.g., 5000 for 5 seconds)
       disableOnInteraction: false, // Allow autoplay to continue after manual navigation
    },
    navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
    },
 });
 document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".reviews-slider", {
       loop: true,
       spaceBetween: 20,
       pagination: {
          el: ".swiper-pagination",
          clickable: true,
       },
       breakpoints: {
          0: {
             slidesPerView: 1,
          },
          768: {
             slidesPerView: 2,
          },
          991: {
             slidesPerView: 3,
          },
       },
       autoplay: {
          delay: 5000,
          disableOnInteraction: false,
       },
    });
 });