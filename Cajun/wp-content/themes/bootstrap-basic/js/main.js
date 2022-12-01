/**
 * Main Javascript.
 * This file is for who want to make this theme as a new parent theme and you are ready to code your js here.
 */

 app = Vue.createApp({});

 app.component('counter', {
   props: ['msg'],
   data() {
     return {
       nbr: 0
     }
   },
   template: `
     <button @click="nbr++">
       {{ msg }} {{ nbr }}x
     </button>`
 })
 
 app.mount('#app');

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


gsap.timeline()
      .fromTo('.Bleu' , {rotationZ:"0%", y: '0%'},
            { rotationZ:"25%" ,y: '-250px', duration:2 })
      .fromTo('.Bleu' , {rotationZ:"25%"},
            { rotationZ:"0" , y: '0', duration:2 } )
      .fromTo('.Rouge' , {rotationZ:"0%", y: '0%'},
            { rotationZ:"-25%" ,y: '-250px', duration:2 })
      .fromTo('.Rouge' , {rotationZ:"-25%"},
            { rotationZ:"0" , y: '0', duration:2 } )
      .fromTo('.Bleu' , {rotationZ:"0%", y: '0%'},
            { rotationZ:"-25%" ,y: '-250px', duration:2 })
      .fromTo('.Bleu' , {rotationZ:"-25%"},
            { rotationZ:"0" , y: '0', duration:2 } )
       .fromTo('.Rouge' , {rotationZ:"0%", y: '0%'},
            { rotationZ:"25%" ,y: '-250px', duration:2 })
      .fromTo('.Rouge' , {rotationZ:"25%"},
            { rotationZ:"0" , y: '0', duration:2 } )
      .fromTo('.Bleu' , {rotationZ:"0%", y: '0%'},
            { rotationZ:"25%" ,y: '-250px', duration:2 })
      .fromTo('.Bleu' , {rotationZ:"25%"},
            { rotationZ:"0" , y: '0', duration:2 } )
      .fromTo('.Rouge' , {rotationZ:"0%", y: '0%'},
            { rotationZ:"-25%" ,y: '-250px', duration:2 })
      .fromTo('.Rouge' , {rotationZ:"-25%"},
            { rotationZ:"0" , y: '0', duration:2 } )
    
  gsap.timeline()
      .fromTo('.Bleu' , {rotationZ:"0%", y: '0%'},
            { rotationZ:"5%" ,y: '-50px', duration:2 })
      .fromTo('.Bleu' , {rotationZ:"5%", y: '-50px'},
            { rotationZ:"0" , y: '0', duration:2 } )
      .fromTo('.Bleu' , {rotationZ:"0%", y: '0%'},
            { rotationZ:"-5%" ,y: '50px', duration:2 })
      .fromTo('.Bleu' , {rotationZ:"-5%" ,y: '50px'},
            { rotationZ:"0" , y: '0', duration:2 } )    
gsap.timeline()
      .fromTo('.Rouge' , {rotationZ:"0%", y: '0%'},
            { rotationZ:"5%" ,y: '-50px', duration:2 })
      .fromTo('.Rouge' , {rotationZ:"5%", y: '-50px'},
            { rotationZ:"0" , y: '-50px', duration:2 } )
      .fromTo('.Rouge' , {rotationZ:"0%", y: '-50px'},
            { rotationZ:"-5%" ,y: '-50px', duration:2 })
      .fromTo('.Rouge' , {rotationZ:"-5%" ,y: '-50px'},
            { rotationZ:"0" , y: '0', duration:2 } )    

const btn = document.querySelector('.buttonlogo');

  btn.addEventListener("click", function() {
  gsap.timeline()
      .fromTo('.buttonlogo' , {rotationZ:"0%"},
            { rotationZ:"270%", duration:2 })
});

