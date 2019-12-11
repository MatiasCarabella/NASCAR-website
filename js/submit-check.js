$(function(){
    $('form').submit(function(){
         if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
         	return true;
		 }else{
		 	document.getElementById('confirm_password').focus();
		   	return false;
		 }
    });
});