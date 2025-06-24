document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.swiper', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});