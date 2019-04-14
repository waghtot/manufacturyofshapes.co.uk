$(document).ready(function(){
    $('.carousel').slick({
      zIndex:100,
      dots: false,
      arrows:false,
      infinite: true,
      fade:true,
      speed: 3000,
      slidesToShow: 1,
      adaptiveHeight: true,
      autoplay:true,
      autoplaySpeed: 12000,
      pauseOnHover:false,
    });
});
