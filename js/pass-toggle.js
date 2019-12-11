function passToggle(input, tab) {
  if (tab=='login') {
    var password = document.getElementById("password");
    document.getElementById(input).focus();
    setTimeout(function(){ document.getElementById(input).selectionStart = document.getElementById(input).selectionEnd = 10000; }, 0);
    if (password.type === "password") {
      password.type = "text";
      $("#toggle1").removeClass('icon-eye-blocked');
      $("#toggle1").addClass('icon-eye');
    } else {
      password.type = "password";
      $("#toggle1").removeClass('icon-eye');
      $("#toggle1").addClass('icon-eye-blocked');
    }
  } else{
      var password = document.getElementById("password");
      var confirm_password = document.getElementById("confirm_password");
      document.getElementById(input).focus();
      setTimeout(function(){ document.getElementById(input).selectionStart = document.getElementById(input).selectionEnd = 10000; }, 0);
      if (password.type === "password") {
        password.type = "text";
       confirm_password.type = "text";
        $("#toggle1").removeClass('icon-eye-blocked');
        $("#toggle1").addClass('icon-eye');
        $("#toggle2").removeClass('icon-eye-blocked');
        $("#toggle2").addClass('icon-eye');
      } else {
        password.type = "password";
        confirm_password.type = "password";
        $("#toggle1").removeClass('icon-eye');
        $("#toggle1").addClass('icon-eye-blocked');
        $("#toggle2").removeClass('icon-eye');
        $("#toggle2").addClass('icon-eye-blocked');
      }
  }
}