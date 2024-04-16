import $ from "jquery";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import "slick-carousel";

export function initSlickCarousels() {
  /* Slicks */
  $(".slickBanner").slick({
    dots: false,
    infinite: true,
    speed: 700,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    arrows: false,
  });

  $(".slickSmall").slick({
    dots: false,
    infinite: true,
    speed: 700,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  $(".slickTestimonials").slick({
    dots: true,
    infinite: true,
    speed: 700,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 300000,
    centerMode: true,
    arrows: false,
  });
}
