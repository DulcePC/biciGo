// document.addEventListener('DOMContentLoaded', function(){
//     let wrapper = document.getElementById('wrapper');
//     let topLayer = wrapper.querySelector('.top');
//     let handle = wrapper.querySelector('.handle');
//     let skew = 0;
//     let delta = 0;

//     if(wrapper.className.indexOf('skewed') != -1 ){
//         skew = 1000;
//     }
//     wrapper.addEventListener('mousemove', function(e){
//         delta = (e.clientX - window.innerWidth / 2) * 0.5;
    
//         handle.style.left = e.clientX + delta + 'px';

//         topLayer.style.width = e.clientX + skew + delta + 'px';
//     });
// });
$(document).ready(function(){
    $('.parallax').parallax();
    $(".modal").modal();
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true,
     
   });
   setTimeout(autoplay, 3000);
   function autoplay() {
       $('.carousel').carousel('next');
       setTimeout(autoplay, 3000);
    }

});
