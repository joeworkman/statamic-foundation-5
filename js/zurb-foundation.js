$(function(){
  $(".slides").slides({
    container: 'slides-container',
    play: 5000,
    pause: 2500,
  });
  $(window).load(function() {
       $('#orbitDemo').orbit();
   });
});