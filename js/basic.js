$(window).on('load', function () {

  if(sessionStorage.getItem('menuStyle') == null) {
    sessionStorage.setItem('menuStyle', 'white');
    document.getElementById("themeButton").innerHTML="Тёмная";

  } else if(sessionStorage.getItem('menuStyle') == 'white') {
    $("menu").addClass('white');
    document.getElementById("themeButton").innerHTML="Тёмная";

  } else if(sessionStorage.getItem('menuStyle') == 'black') {
    $("menu").addClass('black');
    document.getElementById("themeButton").innerHTML="Светлая";
  }

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

  var style;

  $('#themeButton').on('click', function() {
      if ($("menu").hasClass('white')) {

          $("menu").removeClass('white');
          $("menu").addClass('black');
          document.getElementById("themeButton").innerHTML="Светлая";
          
          style = 'black';
          sessionStorage.setItem('menuStyle', style);

      } else if ($("menu").hasClass('black')) {

          $("menu").removeClass('black');
          $("menu").addClass('white');
          document.getElementById("themeButton").innerHTML="Тёмная";

          style = 'white';
          sessionStorage.setItem('menuStyle', style);

      }
  });
});

document.onkeypress= function(event) {
  event= event||window.event;

  if(event.code == 'KeyA' && event.shiftKey)
    window.location= "/admin/adminIndex.php"; //здесь подставите ту страницу, которая вам нужна
};
