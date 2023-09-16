const price_hidden = document.getElementsByTagName('del')[0];

var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
});

function hideenprice(){
  if(price_hidden.getAttribute('aria-hidden')){
    price_hidden.classList.add('price-hidden')
  }
}

addEventListener('load',hideenprice);