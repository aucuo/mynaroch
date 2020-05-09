$(window).on('load', function () {

  if(sessionStorage.getItem('menuStyle') == null) {

    sessionStorage.setItem('menuStyle', 'white');

  } else if(sessionStorage.getItem('menuStyle') == 'white') {

    $("menu").addClass('white');

  } else if(sessionStorage.getItem('menuStyle') == 'black') {

    $("menu").addClass('black');
    
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
});

document.onkeypress= function(event) {
  event= event||window.event;

  if(event.code == 'KeyA' && event.shiftKey)
    window.location= "/admin/adminAuth.php"; //здесь подставите ту страницу, которая вам нужна
};
