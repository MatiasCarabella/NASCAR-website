// USUARIO
document.getElementById("iconoUser").onmouseover = function(){
	document.getElementById("usuario").style.borderColor ="#ffc859";
}
document.getElementById("iconoUser").onmouseout = function(){
	document.getElementById("usuario").style.borderColor ="";
}
document.getElementById("iconoUser").onclick = function(){
	document.getElementById("usuario").focus();
 	setTimeout(function(){ document.getElementById("usuario").selectionStart = document.getElementById("usuario").selectionEnd = 10000; }, 0);
}
document.getElementById("iconoUser").onmousedown = function(){
	document.getElementById("usuario").placeholder = '';
}
document.getElementById("iconoUser").onmouseup = function(){
	document.getElementById("usuario").placeholder = 'Usuario';
}

// MAIL
document.getElementById("iconoMail").onmouseover = function(){
	document.getElementById("email").style.borderColor ="#ffc859";
}
document.getElementById("iconoMail").onmouseout = function(){
	document.getElementById("email").style.borderColor ="";
}
document.getElementById("iconoMail").onclick = function(){
	document.getElementById("email").focus();
 	setTimeout(function(){ document.getElementById("email").selectionStart = document.getElementById("email").selectionEnd = 10000; }, 0);
}
document.getElementById("iconoMail").onmousedown = function(){
	document.getElementById("email").placeholder = '';
}
document.getElementById("iconoMail").onmouseup = function(){
	document.getElementById("email").placeholder = 'Email';
}

// CONTRASEÑA
document.getElementById("toggle1").style.transition = "opacity 0.1s ease-in-out";

document.getElementById("password").onfocus = function(){
	$("#toggle1").addClass( 'opacidadFocus' );
}
document.getElementById("password").onblur = function(){
	$("#toggle1").removeClass( 'opacidadFocus' );
}
document.getElementById("password").onmouseover = function(){
	$("#toggle1").addClass( 'opacidadHover' );
}
document.getElementById("password").onmouseout = function(){
	$("#toggle1").removeClass( 'opacidadHover' );
}

document.getElementById("toggle1").onmouseover = function(){
	document.getElementById("password").style.borderColor ="#ffc859";
	$("#toggle1").addClass( 'opacidadHover' );
}
document.getElementById("toggle1").onmousedown = function(){
	document.getElementById("password").placeholder = '';
}
document.getElementById("toggle1").onmouseup = function(){
	document.getElementById("password").placeholder = 'Contraseña';
}
document.getElementById("toggle1").onmouseout = function(){
	document.getElementById("password").style.borderColor ="";
	$("#toggle1").removeClass( 'opacidadHover' );
}

document.getElementById("iconoCandado1").onmouseover = function(){
	document.getElementById("password").style.borderColor ="#ffc859";
	$("#toggle1").addClass( 'opacidadHover' );
}
document.getElementById("iconoCandado1").onmouseout = function(){
	document.getElementById("password").style.borderColor ="";
	$("#toggle1").removeClass( 'opacidadHover' );
}
document.getElementById("iconoCandado1").onclick = function(){
	document.getElementById("password").focus();
 	setTimeout(function(){ document.getElementById("password").selectionStart = document.getElementById("password").selectionEnd = 10000; }, 0);
}
document.getElementById("iconoCandado1").onmousedown = function(){
	document.getElementById("password").placeholder = '';
}
document.getElementById("iconoCandado1").onmouseup = function(){
	document.getElementById("password").placeholder = 'Contraseña';
}

//CONFIRMAR CONTRASEÑA
document.getElementById("toggle2").style.transition = "opacity 0.1s ease-in-out";

document.getElementById("confirm_password").onfocus = function(){
	$("#toggle2").addClass( 'opacidadFocus' );
}
document.getElementById("confirm_password").onblur = function(){
	$("#toggle2").removeClass( 'opacidadFocus' );
}
document.getElementById("confirm_password").onmouseover = function(){
	$("#toggle2").addClass( 'opacidadHover' );
}
document.getElementById("confirm_password").onmouseout = function(){
	$("#toggle2").removeClass( 'opacidadHover' );
}

document.getElementById("toggle2").onmouseover = function(){
	document.getElementById("confirm_password").style.borderColor = colorActual;
	$("#toggle2").addClass( 'opacidadHover' );
}
document.getElementById("toggle2").onmousedown = function(){
	document.getElementById("confirm_password").placeholder = '';
}
document.getElementById("toggle2").onmouseup = function(){
	document.getElementById("confirm_password").placeholder = 'Confirmar Contraseña';
}
document.getElementById("toggle2").onmouseout = function(){
	if (colorActual!="#e4002b") {
	document.getElementById("confirm_password").style.borderColor ="";
	}
	$("#toggle2").removeClass( 'opacidadHover' );
}

document.getElementById("iconoCandado2").onmouseover = function(){
	document.getElementById("confirm_password").style.borderColor = colorActual;
	$("#toggle2").addClass( 'opacidadHover' );
}
document.getElementById("iconoCandado2").onmouseout = function(){
	if (colorActual!="#e4002b") {
	document.getElementById("confirm_password").style.borderColor ="";
	}
	$("#toggle2").removeClass( 'opacidadHover' );
}
document.getElementById("iconoCandado2").onclick = function(){
	document.getElementById("confirm_password").focus();
 	setTimeout(function(){ document.getElementById("confirm_password").selectionStart = document.getElementById("confirm_password").selectionEnd = 10000; }, 0);
}
document.getElementById("iconoCandado2").onmousedown = function(){
	document.getElementById("confirm_password").placeholder = '';
}
document.getElementById("iconoCandado2").onmouseup = function(){
	document.getElementById("confirm_password").placeholder = 'Confirmar Contraseña';
}