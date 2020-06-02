$(window).on('load', function () {

  $("menu").addClass(sessionStorage.getItem('menuStyle'));

  $('#burgerMenu').on('click', function() {
      if ($("menu").hasClass('active')) {
        $("menu").removeClass('active');
        $("body").removeClass('blocked');
      } else {
        $("menu").addClass('active');
        $("body").addClass('blocked');
      }    
  });

  function preload() { 
    let preloader = document.getElementById('preloaderWrapper');
    preloader.style.display = 'none';
    $('body').addClass('ready');
  }

  setTimeout(preload, 500);
});

document.onkeypress= function(event) {
  event= event||window.event;

  if(event.code == 'KeyA' && event.shiftKey)
    window.location= "/admin";
};
