
  
  
  (function($, window, document) {

    // The $ is now locally scoped 

   $(document).ready(function() {
    
    $('.slider-home').slick({
     
     
       lazyLoad: 'progressive',
    

     
     slidesToShow: 1,
     slidesToScroll: 1,
     
     dots: true,
     
     autoplay: true,
     prevArrow:false,
    nextArrow:false,
     adaptiveHeight: true,
     vertical:true,
     
     infinite: false,
     asNavFor: '.slider-control-home',
    
    

     responsive: [
     {
      breakpoint: 768,
      settings: {
        
        
        slidesToShow: 1,
     slidesToScroll: 1,
     vertical:false,
     dots: false,
      }
    },
    
    ]
  });

    $('.slider-control-home').slick({  
     lazyLoad: 'progressive',
     asNavFor: '.slider-home',

     
     slidesToShow: 3,
     slidesToScroll: 1,
     dots: false,
    
     infinite: true,

     
     autoplay: true,
     
     
     focusOnSelect: true,
    arrows:false,
    adaptiveHeight: true,
    vertical:true,
    centerMode:true,
      
         
   }
    );
   
     
    

$('.slider-unidades').slick({
     
     lazyLoad: 'progressive',

     
     slidesToShow: 2,
     slidesToScroll: 2,
     dots: true,     
     autoplay: false,
     prevArrow:false,
    nextArrow:false,
     focusOnSelect: true,
     variableWidth: true,
     adaptiveHeight: false,
     responsive: [
     {
      breakpoint: 768,
      settings: {
        
        
        slidesToShow: 1,
     slidesToScroll: 1,
     vertical:false,
     dots: false,
      }
    },
    
    ]
 

  });


$('.single-slider').slick({
     
     lazyLoad: 'progressive',
     dots: false,

     
     slidesToShow: 2,
     slidesToScroll: 1,
        prevArrow:'<div class="slick-prev"><i class="fa  fa-angle-left "></i></div>',
  nextArrow:'<div class="slick-next"><i class="fa fa-angle-right"></i></div>',
     
     
   
     focusOnSelect: true,
     variableWidth: true,
     adaptiveHeight: true,
     responsive:true,

     
  });



$('.map-slider').slick({  
     asNavFor: '.control-map',
     focusOnSelect: true,
     autoplay: true,
     slidesToShow: 1,
     slidesToScroll: 1,
     lazyLoad: 'progressive',
     fade:true,
     nextArrow: '<div class="slick-prev"><i class="fa  fa-angle-left "></i></div>',
    prevArrow: '<div class="slick-next"><i class="fa fa-angle-right"></i></div>',
  });



$('.control-map').slick({ 
    asNavFor: '.map-slider',
    pauseOnHover: true,
    pauseOnFocus: true,
    focusOnSelect: true,
     autoplay: true,
     slidesToShow: 6,
     slidesToScroll: 1,
     lazyLoad: 'progressive',
     vertical:true
         
   });



$('.equipo-circ').slick({ 
    asNavFor: '.control-map',
     slidesToShow: 1,
     slidesToScroll: 1,
     autoplay: true,
     lazyLoad: 'progressive',
     arrows: false,
           
   });


$('.circ-img-slide').slick({ 
    adaptiveHeight: true,
     slidesToShow: 1,
     slidesToScroll: 1,
     lazyLoad: 'progressive',
     nextArrow: '<div class="slick-next"><i class="fa  fa-angle-right "></i></div>',
  prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left"></i></div>',
      
         
   });




  });
   // The rest of the code goes here!

  })(jQuery, window, document);
  // The global jQuery object is passed as a parameter