(function($) {

  $('#reset').on('click', function(){
      $('#register-form').reset();
  });


  $('#login').on('click', function() {
      $('.image-position').addClass('right-log');
  });
    $('#register').on('click', function() {
        $('.image-position').removeClass('right-log');
    });

})(jQuery);
