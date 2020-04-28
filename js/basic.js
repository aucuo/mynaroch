$(window).on('load', function () {
    var $preloader = $('.preloader');

    $(function(){
      function show_popup(){
      $preloader.addClass("hidden");
      $('body').addClass("ready");
   };
       window.setTimeout( show_popup, 500 );
    });

    $('#bMenu').on('click', function() {
        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
        } else {
          $(this).addClass('active');
        }    
    });
});



document.onkeypress= function(event) {
  event= event||window.event;

  if(event.code == 'KeyA' && event.shiftKey)
    window.location= "auth.php"; //здесь подставите ту страницу, которая вам нужна
};
