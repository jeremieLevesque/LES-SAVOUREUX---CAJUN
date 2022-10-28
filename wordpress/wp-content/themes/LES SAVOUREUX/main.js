/* Wow, tellement un beau spot pour écrire du JS */

$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});

$(document).ready(function() {
  $(window).on("scroll", function() {
    console.log($(this).scrollTop())
    if($(this).scrollTop() >= 30){
      // set to new image
      $(".logosupra img").attr("src","SUPRA SIGN - LOGO.png");
    } else {
      //back to default
      $(".logosupra img").attr("src","SUPRA SIGN - LOGO BLANC.png");
    }
  })
})

var Swipes = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});

const swiper = new Swiper('.swiper', {
  direction: 'horizontal',
  loop: true,
  
   navigation: {
    nextEl: '.next',
    prevEl: '.prev',
  },
  
})




const btn = document.querySelector('.buttonlogo');



 btn.addEventListener("click", function() {
  gsap.timeline()
      .fromTo('.buttonlogo' , {rotationZ:"0%"},
            { rotationZ:"270%", duration:2 })
});



