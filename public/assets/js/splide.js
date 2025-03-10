document.addEventListener("DOMContentLoaded", function () {
    new Splide("#loan", {
      type   : 'loop',
      perPage: 3,
      pagination:0,
      focus  : 'center',
      autoplay: true,
      rewind     : true,
      rewindSpeed: 300,
      breakpoints: {
        1500 : { perPage: 3 },
        1300 : { perPage: 3,padding:"30px",},
        1200 : { perPage: 2,},
        800  :{perPage: 1, padding:"0px"}
      },
    }).mount();
}),
document.addEventListener("DOMContentLoaded", function () {
    new Splide("#partner", {
      type   : 'loop',
      focus  : 'center',
      perPage: 5,
      arrows : true,
      pagination:false,
      autoplay: true,
      rewind     : true,
      rewindSpeed: 300,
      breakpoints: {
        1199:{perPage: 5},
        767  :{perPage: 3}
      },
    }).mount();
}),
document.addEventListener("DOMContentLoaded", function () {
    new Splide("#testimonials", {
      type   : 'loop',
      perPage: 3,
      focus  : 'center',
      arrows:false,
      pagination:true,
      autoplay: true,
      rewind     : true,
      rewindSpeed: 300,
      breakpoints: {
        1199:{perPage: 3},
        767  :{perPage: 1}
      },
    }).mount();
})