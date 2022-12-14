const navToggle = document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".nav-menu")

/*-------------------------------NAVBAR-----------------------------------------------------------------*/
navToggle.addEventListener("click",()=>{
    navMenu.classList.toggle("nav-menu_visible");
    
    if(navMenu.classList.contains("nav-menu_visible")){
        navToggle.setAttribute("aria-label", "Cerrar menú");
    } else {
        navToggle.setAttribute("aria-label", "Abrir menú");
    }
});
/*-----------------------------SLIDER INICIAL---------------------------------------------------------------------*/
  var swiper = new Swiper(".home-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    loop: true,
    breakpoints: {
      0: {
          slidesPerView: 1,
      },
      2000: {
        slidesPerView: 2,
      },
      3000: {
        slidesPerView: 2,
      },
      4000: {
        slidesPerView: 3,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  /*-----------------------------SLIDER DE TESTIMONIOS-------------------------------------------------------------------------*/
  var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    loop:true,
    breakpoints: {
      0: {
          slidesPerView: 1,
      },
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
//--------------------------------------------------------------------------------------------------------------------*/

 