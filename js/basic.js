$(window).on('load', function () {

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
          document.getElementById("themeButton").innerHTML="Темная";
          
          style = 'black';
          localStorage.setItem('menuStyle', style);

      } else if ($("menu").hasClass('black')) {

          $("menu").removeClass('black');
          $("menu").addClass('white');
          document.getElementById("themeButton").innerHTML="Светлая";

          style = 'white';
          localStorage.setItem('menuStyle', style);

      }
  });
});

document.onkeypress= function(event) {
  event= event||window.event;

  if(event.code == 'KeyA' && event.shiftKey)
    window.location= "auth.php"; //здесь подставите ту страницу, которая вам нужна
};
