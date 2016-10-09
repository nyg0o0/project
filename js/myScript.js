jQuery(document).ready(function($){
  
  //initialize tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  //clicked on sign up
  $(".login-panel .login-form .btn-signup, .sign-up-breadcrumb").on("click", function(){
    $(".login-panel > div").removeClass("active");
    $(".login-panel .sign-up").addClass("active");
  });
  
  //clicked on lost password
   $(".login-panel .login-form #forget-pwd, .pwd-breadcrumb").on("click", function(){
     $(".login-panel > div").removeClass("active");
      $(".pwd-recover").addClass("active");
     $()
  });
  
  //clicked on Register Buttoon
   $(".login-panel .sign-up .btn-submit, .login-breadcrumb").on("click", function(){
     $(".login-panel > div").removeClass("active");
      $(".login-form").addClass("active");
   });
  
  //clicked on Register Buttoon
   $(".login-panel .pwd-recover .btn-submit").on("click", function(){
     $(".login-panel > div").removeClass("active");
      $(".login-form").addClass("active");
   });

});

