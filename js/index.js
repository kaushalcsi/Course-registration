$(document).ready(function(){
  $('#login').click(function(){
      console.log("hiiii");
      if( !$('.username').val()) {
        $('.user-alert').addClass('show');

  }
else{
  
  $('.msg-alert').addClass('show');
  var ajaxurl = 'login.php';

       $.post(ajaxurl, function () {
          // Response div goes here.
          alert("Check your email for password");
      });

}


      
  });

  $('.username').on('input', function(){
      $('.user-alert').removeClass('show');
  })
});


