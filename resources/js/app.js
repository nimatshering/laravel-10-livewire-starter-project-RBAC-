import './bootstrap';

// CSS
import '../assets/vendor/bootstrap-icons/bootstrap-icons.css';
import '../assets/vendor/aos/aos.css';
import '../assets/vendor/glightbox/css/glightbox.min.css';
import '../assets/vendor/swiper/swiper-bundle.min.css';


//JSS
import '../assets/vendor/bootstrap-icons/bootstrap-icons.css';
// import '../assets/vendor/aos/aos';
// import '../assets/vendor/glightbox/js/glightbox.min';
import '../assets/vendor/purecounter/purecounter_vanilla';
import '../assets/vendor/swiper/swiper-bundle.min';
import '../assets/main';


import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

