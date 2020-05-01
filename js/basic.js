$(window).on('load', function () {
  var $preloader = $('.preloader');
  var $standartTheme;

  $(function(){
    function show_popup() {
      $preloader.addClass("hidden");
      $('body').addClass("ready");
    };
    
    window.setTimeout( show_popup, 500 );
  });   

  $('#burgerMenu').on('click', function() {
    if ($("menu").hasClass('active')) {
      $("menu").removeClass('active');
      $("body").removeClass('blocked');
    } else {
      $("menu").addClass('active');
      $("body").addClass('blocked');
    }    
  });

  $('#themeButton').on('click', function() {
    if ($("menu").hasClass('backgroundWhite')) {
      $("menu").removeClass('backgroundWhite mobileBackgroundWhite');
      $("menu").addClass('backgroundBlack mobileBackgroundBlack');
      document.getElementById("themeButton").innerHTML="Темная";
      $standartTheme = 'black';
    } else if ($("menu").hasClass('backgroundBlack')) {
      $("menu").removeClass('backgroundBlack mobileBackgroundBlack');
      $("menu").addClass('backgroundWhite  mobileBackgroundWhite');
      document.getElementById("themeButton").innerHTML="Светлая";
      $standartTheme = 'white';
    }    
  });
});

document.onkeypress= function(event) {
  event= event||window.event;

  if(event.code == 'KeyA' && event.shiftKey)
    window.location= "auth.php"; //здесь подставите ту страницу, которая вам нужна
};
