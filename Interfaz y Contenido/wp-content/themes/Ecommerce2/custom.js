$(document).ready(function(){
  // scrolling to a planificar viaje
  $(".btn-lg").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
          scrollTop: $(".search").offset().top -105
      }, 2000);
  });
  // Inicio
  $("#menu-item-339").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
          scrollTop: $(".home").offset().top-100
      }, 2000);
  });
  // Ventajas
  $("#menu-item-340").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
          scrollTop: $(".elementor-2").offset().top -155
      }, 2000);
  });
  // Sedes
  $("#menu-item-341").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
          scrollTop: $(".puntos_de_atencion").offset().top -100
      }, 2000);
  });
  // Contacto
  $("#menu-item-342").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
          scrollTop: $(".contactus").offset().top -100
      }, 2000);
  });
});
