//setup before functions
var typingTimer;                //timer identifier
var doneTypingInterval = 500;  //time in ms
var colorActual = "#ffc859";

//on keyup, start the countdown
$('#confirm_password').keyup(function(){
    clearTimeout(typingTimer);
    if ($('#confirm_password').val()) {
        typingTimer = setTimeout(check_pass, doneTypingInterval);
    }
});

$('#password').keyup(function(){
    clearTimeout(typingTimer);
    if ($('#confirm_password').val()) {
        typingTimer = setTimeout(check_pass, doneTypingInterval);
    }
});

//user is "finished typing," do something
function check_pass() {
    if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
   		document.getElementById('confirm_password').style.borderColor = "#ffc859";
        document.getElementById('noCoinciden').style.opacity = 0;
        colorActual = "#ffc859";
    }
    else{
        document.getElementById('confirm_password').style.borderColor = "#e4002b";
        document.getElementById('noCoinciden').style.opacity = 1;
        colorActual = "#e4002b";
    }
}

document.getElementById('confirm_password').addEventListener('input', evt => {
  const value = document.getElementById('confirm_password').value 
  if (!value) {
    document.getElementById('confirm_password').style.borderColor = "";
    document.getElementById('noCoinciden').style.opacity = 0;
    colorActual = '#ffc859';
    return
  }
})