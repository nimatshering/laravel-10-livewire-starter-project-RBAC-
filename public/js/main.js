document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  // const preloader = document.querySelector('#preloader');
  // if (preloader) {
  //   window.addEventListener('load', () => {
  //     preloader.remove();
  //   });
  // }

  /**
  * Sticky Header on Scroll
  */
  const selectHeader = document.querySelector('.header');
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop;
    let nextElement = selectHeader.nextElementSibling;

    const headerFixed = () => {
      if ((headerOffset - window.scrollY) <= 0) {
        selectHeader.classList.add('sticked');
      } else {
        selectHeader.classList.remove('sticked');
      }
    }
    window.addEventListener('load', headerFixed);
    document.addEventListener('scroll', headerFixed);
  }

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('.header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }
  

   /* Scroll top button*/
  // Get the 'to top' button element by ID
  var toTopButton = document.getElementById("to-top-button");

  // Check if the button exists
  if (toTopButton) {

    // On scroll event, toggle button visibility based on scroll position
    window.onscroll = function () {
      if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        toTopButton.classList.remove("hidden");
      } else {
        toTopButton.classList.add("hidden");
      }
    };

    // Function to scroll to the top of the page smoothly
    window.goToTop = function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    };
  }


  /*Initiate glightbox*/
  var glightbox = GLightbox({
    selector: '.glightbox'
  });

  new PureCounter();/*Initiate pure counter*/

  /*Init swiper slider with 1 slide at once in desktop view*/
  new Swiper('.slides', {
    speed: 700,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    effect: "fade",
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  

  /** Animation on scroll function and init */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  
  window.addEventListener('load', () => {
    aos_init();
  });

});