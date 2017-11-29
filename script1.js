$( document ).ready(function() {
    console.log( "ready!" );
    if($('.cookie-wrap').length) {
      $('.cookie-wrap').slideDown(3000);
    };

    $('.close').on("click", function(){
      $('.cookie-wrap').remove();
    }
    );

    function emailSignup(){
      var expire = new Date();
      expire = new Date(expire.getTime() + 31556925);
      document.cookie="email-cookie; expires=" +expire;
    };

    $('.signup-btn').on('click', function(e){
      emailSignup();
      e.preventDefault();
      $('.cookie-wrap').remove();
    });


});
