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