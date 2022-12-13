/**
 * Main Javascript.
 * This file is for who want to make this theme as a new parent theme and you are ready to code your js here.
 */

 app = Vue.createApp({});

 

var Swipes = new Swiper('.hero .swiper-container', {
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



app.component('hero', {
  props: ['srch', 'titre', 'date'],
  data() {
    return {
      nbr: 0
    }
  },
  template: `
  <div class="bloc-hero">
      <p class="titre-hero">{{ titre }}</p>
      <p class="titre-date">{{ date }}</p>
      <img :src="srch" alt="" class="hero imagerecette">
</div>
  `
});

app.component('carte', {

      props: ['img','t1','res', 'lien' ],

      data() {

        return {

          nbr: 0

        }

      },

      template: `

      <div class="card">

      <div class="card_image"><img :src= "img" ></div>

      <div class="card_content">

        <h2 class="card_title">{{ t1 }}</h2>

        <p class="card_text">{{ res }}...</p>

        <button class="btn card_btn" href="{{ lien }}">Voir Plus</button>

      </div>

    </div>

      `

    });

app.component('recette', {
      props: ['txt'],
      data() {
        return {
          nbr: 0
        }
      },
      template: `
    {{ txt }}
      
      `
    });



app.component('description', {
      props: ['txt1', 'txt2', 'txt3', 't1' , 't2']
      ,
      data() {
        return {
          nbr: 0
        }
      },
      template: `
      <p class="texte1">{{ txt1 }}</p>
      `
    });
    

app.mount('#app');


