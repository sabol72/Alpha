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
       delay: 2000, // Adjust the delay in milliseconds (e.g., 5000 for 5 seconds)
       disableOnInteraction: false, // Allow autoplay to continue after manual navigation
    },
    navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
    },
 });
 (function () {
   'use strict'

   // Fetch all the forms we want to apply custom Bootstrap validation styles to
   var forms = document.querySelectorAll('.needs-validation')

   // Loop over them and prevent submission
   Array.prototype.slice.call(forms)
       .forEach(function (form) {
           form.addEventListener('submit', function (event) {
               if (!form.checkValidity()) {
                   event.preventDefault()
                   event.stopPropagation()
               }

               form.classList.add('was-validated')
           }, false)
       })
})()

function showForm() {
   document.getElementById('formContainer').style.display = 'block';
   document.getElementById('confirmationContainer').style.display = 'none';
}