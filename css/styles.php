<?php
header('Content-type: text/css');
session_start();
?>

/* GENERAL */

@font-face {
font-family: 'Stainless-Light';
font-style: normal;
font-weight: normal;
src: local('Stainless-Light'), url('../fonts/StainLig.woff') format('woff');
}

body{
	/*font-family: 'Open Sans', sans-serif;*/
	font-family: 'Stainless-Light';
	font-size: 1.1em;
	line-height: 20px;
	padding-top: 50px; /* para que las cosas no se escondan atras del nav */
	background-color: #1b1e23;
}

a{
	text-decoration: none;
}

.sitio{
	display: flex;
  	min-height: 94.7vh;
   	flex-direction: column;
}

:target::before { /* para tener en cuenta lo que ocupa la barra de navegacion al usar anclado */ /* OBSOLETO, CONTROLADO POR JS */
  content: "";
  display: block;
  height: 60px; /* alto de la nav*/
  margin: -60px 0 0; /* negative alto de la nav */
}

/* NAV - BARRA DE NAVEGACION */

 nav{
 	background-color: #010203;
 	height: 50px;
 	position: fixed;
 	top: 0;
 	width: 100%;
 	z-index:100;
 	-webkit-box-shadow: 0 5px 15px -4px rgba(0, 0, 0, 0.8)9;
    -moz-box-shadow: 0 5px 15px -4px rgba(0, 0, 0, 0.8);
    box-shadow: 0 5px 15px -4px rgba(0, 0, 0, 0.8);
}

nav .holder{
	position: relative;
}

nav .logo {
    display: inline-block;
    width: 22%;
   	margin: 8px 0 8px 8px;
}

nav ul{
	list-style-type: none; /* Elimina el punto por defecto */
	margin: 0;
	padding: 0;
	display: inline-flex;
	position: absolute;
	/*width: 70%;*/
	right: 0px; /*-59*/
}

nav ul li a{
	font-size: 16px;
	color: white;
	font-weight: 700;
	float: left;
	text-decoration: none; /* Saco la linea/subrayado */
	line-height: 42px; /* Igual que el height del nav (50px), entonces queda centrado */
	padding: 4px 20px 0;
	/*display: block;*/ /* Asegura que toda la caja sea clickeable */
	/* margin-right: 1px; */
	/*border-right: 0.1px solid #464e51;*/
	/*width: auto;*/
	position: relative;
	border-bottom: 4px solid transparent;
}

nav ul li:not(:first-child) a:after{ /* Linea separadora de elementos */
  content:""; 
  background: #808080; /* #464e51 */
  position: absolute; 
  bottom: 13px; 
  left: 0; 
  height: 16px; 
  width: 1px;
}

nav ul li a:hover{ /* :hover pseudoclase */
	transition: ease-in-out background-color .1s; 
	transition: ease-in-out color .1s;
	background-color: #333;
	color: #ffd659;
	border-bottom: 4px solid transparent;
	text-decoration: none;
}

/* Saco la linea separadora del elemento */
nav ul li a:hover::after{  
	opacity: 0;
}

/* Saco la otra linea separadora del elemento, que esta en el 'li' que le sigue */
nav ul li:hover + li a:after{ 
	opacity: 0;
}

nav ul li a.activo{
	/*background-color: #333;*/
	color: #ffd659;
	border-bottom: 4px solid #ffd659;
	/*line-height: 46px;*/

}

/*nav ul li a.activo::after,
nav ul li.activo + li a:after
{
	opacity: 0;
}*/

/* FIN NAVEGACION */

/* FOOTER - PIE DE PAGINA */

/* GENERAL */

footer{
	background-color: #010203;
	clear: both;
	color: #808080;
	font-size: 0.7em;
	font-style: italic;
	text-align: center;
	padding: 1em 0;
}

/* LOGO Y LINEA SEPARADORA */

.footerStart{
	margin-bottom: 0;
}

.footerStart a{
	overflow: hidden;
	text-align: right;
}

.footerStart a:before,
.footerStart a:after{
	background-color: #808080;
 	content: ""; /* Importante, tiene que haber contenido aunque esté vacío para que se muestre */
 	display: inline-block;
  	height: 1px; /* grosor de la linea */
  	position: relative;
 	bottom: 18px; /* con esto ajustas la altura */
  	width: 38%; /* largo de la linea */
  	pointer-events: none; /* para que no sea clickeable */
}

.footerStart a:before{ /* margen que separa la linea del elemento */
	right: 0.5m;
}

.footerStart a:after{ /* margen que separa la linea del elemento */
	left: 0.5em;
}

.footerStart .logo{
	display: inline-block;
	width: 15%;
   	margin: 8px 8px;
}

.footerContenido{
	margin-bottom: 1em;
	overflow: hidden;	/* Muestra los elementos que estan 'ocultos' */
	padding-bottom: 1px;
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: flex-start;
	flex-basis: fill;
}

.columna{
	text-align: left;
	width: 27.3%;
}

.columna h4{
	margin-bottom: 0;
	font-style: normal;
}

.columna p{
	font-style: normal;
}

footer a{
	text-decoration: none;
	color: #808080;	
}

footer a:hover{
	color: white;

}

footer p{
	margin: 0;
}

footer h4{
	font-size: 1.1em;
}


.partners{
	text-align: center;
	flex: 1 1 auto;
}

.partners img{
	padding: 0;
	margin: 0;
	vertical-align: middle;
}

.partners h4{
	margin-bottom: 8px;
}

.partners .sponsors{
	margin-bottom: 14px;
}
.partners .sponsors img{
	width: 30%;
}

.partners .fabricantes img{
	width: 20%;
}

.navegacion h4{
	margin-bottom: 8px;
}

.navegacion p{
	padding-left: 5px;
}

.navegacion p:not(:last-child){
	margin-bottom: <?php echo (isset($_SESSION['id_usuario'])) ? '10px' : '5px'; ?>;
}

.redes{
	
}

.redes h4{
	margin-left: 25px;
}

.redes p{
	margin-top: 15px;
}

.redes p:not(:last-child){
	margin-bottom: 17px;
}

.icon-facebook2:hover::before{
	color: #3b5998;
}

.icon-x:hover::before{
	color: white;
}

.icon-youtube:hover::before{
	color: #c4302b;
}

.icon-instagram:hover::before{
	color: #e1306c;
}

/* FIN FOOTER */

/* EXTRAS GENERALES */

.holder{
	min-width: 960px;
	max-width: 960px;
	margin: 0 auto;
	flex: 1;
}

.left{
	float: left;
}

.right{
	float: right;
}

.center{
	display: block;
	margin: 0 auto;
}

/* FLECHA '>' */
i {
  border: solid white;
  border-width: 0 4px 4px 0;
  display: inline-block;
  padding: 7px;
  box-shadow: 2.2px 2.2px 2.2px 0 rgba(0, 0, 0, 1);
  margin-bottom: 2px;
}



.arrowRight {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.arrowLeft {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}

.arrowUp {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.arrowDown {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

/* FIN FLECHA */

/* ICONOS */
@font-face {
  font-family: 'icomoon';
  src:  url('../fonts/icomoon.eot?1mit12');
  src:  url('../fonts/icomoon.eot?1mit12#iefix') format('embedded-opentype'),
    url('../fonts/icomoon.ttf?1mit12') format('truetype'),
    url('../fonts/icomoon.woff?1mit12') format('woff'),
    url('../fonts/icomoon.svg?1mit12#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
  font-display: block;
}

.icon-x:before,
.icon-twitter:before,
.icon-envelop:before,
.icon-user:before,
.icon-lock:before,
.icon-eye:before,
.icon-eye-blocked:before,
.icon-facebook2:before,
.icon-instagram:before,
.icon-youtube:before {
  font-family: icomoon;
  font-size: 25px;
  margin-right: 8px;
  vertical-align: middle;
  color:  #808080;
  padding-bottom: 5px;
}

.icon-x:before {
  content: "\e900";
}
.icon-twitter:before {
  content: "\e900";
}
.icon-envelop:before {
  content: "\e945";
}
.icon-user:before {
  content: "\e971";
}
.icon-lock:before {
  content: "\e98f";
}
.icon-eye:before {
  content: "\e9ce";
}
.icon-eye-blocked:before {
  content: "\e9d1";
}
.icon-facebook2:before {
  content: "\ea91";
}
.icon-instagram:before {
  content: "\ea92";
}
.icon-youtube:before {
  content: "\ea9d";
}
.icon-envelop:before {
	font-size: 20px;
	margin-left: -2px;
}
.icon-eye:before,
.icon-eye-blocked:before{
  font-size: 20px;
  margin-right: -2px;
  cursor: pointer;
  transition: opacity 750ms ease-in-out;
}
.icon-eye:hover::before,
.icon-eye-blocked:hover::before{
	color: black;
}
.icon-eye:before {
  content: "\e9ce";
}
.icon-eye-blocked:before {
  content: "\e9d1";
}

/* FIN ICONOS */

/* FIN EXTRAS */

/* FIN GENERAL */


/* INICIO HOME - PAGINA PRINCIPAL */


/* FADE TO WHITE: main.holder | FADE TO BLACK: main.holder .noticias */

main.holder{
	background-color: #ededed;
	margin: 0 auto;
	overflow: hidden;
	display: block;
	height: auto;
	box-shadow: inset 16px 0 15px -15px rgba(0, 0, 0, 0.8),
				inset -16px 0 15px -15px rgba(0, 0, 0, 0.8),
				inset 0 -16px 15px -15px rgba(0, 0, 0, 0.8);
				/*inset 0 16px 15px -15px rgba(0, 0, 0, 0.8);*/ /* COMENTAR ESTO EN EL FADE TO WHITE */
}

/* FIN FADE */

.holder.degradeHome{
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 35%, rgba(237,237,237,1) 45%, rgba(237,237,237,1) 100%);
}

.homeWallpaper{
	position: relative;
	margin: 0 auto;
	overflow: hidden;
}
.homeWallpaper img{
	-webkit-mask: linear-gradient(to top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.5) 20%, rgba(0,0,0,1) 30%, rgba(0,0,0,1) 100%);
	/*margin-bottom: 1em;*/
	max-height: 540px;
	width: 100%;
	object-fit: cover;
	object-position: 0 25%;
}

.textOverlay{
	position: absolute;
	bottom: 15px;
	left: 15px;
	line-height: 10px;
	font-style: italic;
	text-shadow: 2.2px 2.2px 2.2px #010203;
}

.textOverlay h1{
	color: #ffd659;
	font-size: 2.7em;
	font-weight: bolder;
}

.textOverlay h2 a{
	color: white;
	font-size: 1.6em;
	text-decoration: none;
	margin-left: 8px;
}

.textOverlay h2 a, .textOverlay h2 a i{
	transition: all .3s ease-in-out;
}

/*.textOverlay h2 a span{
	font-style: normal;
}*/ /* PUESTO  DIRECTAMENTE EN EL HTML: <span style="font-style: normal;">⯈</span> */

.textOverlay h2 a:hover{
    color: #e4002b;
}

.textOverlay h2 a:hover i{
    border-color: #e4002b;
    margin-left: 10px;
}

.titulo h1:after{
	background-color: #010203;
 	content: "";
 	display: inline-block;
  	height: 3px;
  	position: relative;
 	bottom: 7px;
  	width: 71%;
  	pointer-events: none;
  	left: 0.5em;
 	margin-right: -50%;
}

.noticias{
	width: auto;
	box-sizing: border-box;
	display: flex;/*
	flex-wrap: wrap;*/
	margin: 1.5em 1.5em 1em;
}

.noticias h2, h3, p{
	padding: 0 10px;
}

.noticias p{
	white-space: pre-line;
}
.noticias h2, h3{
	margin-top: 0.5em;
	margin-bottom: 0;
}

.noticias p{
	margin: 0.5em 0;
}

.noticiaPrincipal{
	box-sizing: border-box;
	margin: 0 0.5em 0 0;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1);
	background-color: white;
	flex: 0 0 66%;
	width:100%;
	height: 628.5px;
	display: flex;
  	flex-direction: column;
  	justify-content: start;
}

.noticiaPrincipal h1{
	padding: 0 10px;
	margin: 20px 0;	
}

.noticia{
	box-sizing: border-box;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1);
	background-color: white;
	overflow: auto;
	display: inline-block;
	display: flex;
 	flex-direction: column;
 	justify-content: space-between;
  	align-items: flex-start;
	width: 100%; 
	height:100%;
}

.imagenNoticia{
    overflow: hidden;
}

.imagenNoticia img{
	max-width: 100%;
	transition: all 0.3s;
    display: block;
    width: 100%;
    height: auto;
    transform: scale(1);
    object-fit: cover;
}

.imagenNoticia img:hover{
	transform: scale(1.1);
}

.contenedorVideo{
	height: 80%;
}

.contenedorVideo img{
	transition: 0.2s opacity ease-in-out;
}

.contenedorVideo img:hover{
	opacity: 0;
	transition: 0.2s opacity ease-in-out 0.3s;
}

.noticia.arriba{
	margin-bottom: 1em;
}

.noticiasRelacionadas{
	box-sizing: border-box;
	margin: 0 0 0 0.5em;
	display: flex;
	flex: 0 0 32%;
	flex-direction: column;
	justify-content: space-between;
}

.noticiasRelacionadas .noticia .imagenNoticia img{
	height: 200px;
	object-fit: cover;
}

.otrasNoticias{
	box-sizing: border-box;
	margin: 0 1.5em 1.5em;
	width: auto;
	height: 305.45px;
	display: flex;
	justify-content: space-between;
}

.otrasNoticias .noticia{
	box-sizing: border-box;
	width: 32%;
}

.otrasNoticias .noticia .imagenNoticia img{
	height: 200px;
	object-fit: cover;
}

/* FIN HOME */

/* INICIO CALENDARIO */

.holder.degradeCalendario{
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 4.5%, rgba(237,237,237,1) 5.5%, rgba(237,237,237,1) 100%);
}

.indice{
	padding: 2em 1.5em 0 1.5em;
	background: linear-gradient(to top, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 10%, rgba(255,255,255,1) 20%, rgba(255,255,255,1) 100%);
}

.indice h1{
	margin: 0;
}

.indice h2{
	margin: 8px 0;
}

.indice hr{
	width: 100%;
	border-top: 3px solid #010203;
	color: #010203;
}

.indice .columnas{
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	list-style: none;
	padding: 0;
	margin: 0;
	align-content: stretch;
	padding-left: 7px;
}

.indice .columnas .columna{
	width: 20%;
}

.indice .columnas .columna li{
	line-height: 30px;
	font-weight: 600;
}

.indice .columnas .columna li a{
	text-decoration: none;
	color: black;
}

.indice .columnas .columna li a:hover{
	color: #007ac2;
}

.calendario .titulo h1:after{
  	width: 68.5%;
}

.scrollToTop{
	cursor: pointer; /* Add a mouse pointer on hover */
 	padding: 15px; /* Some padding */
 	opacity: 0.5;
  	-webkit-border-radius: 35px;
  	-moz-border-radius: 35px;
  	border-radius: 35px; /* Rounded corners */ 
	text-align:center; 
	background: #808080;
	border-radius: 35px; /* Rounded corners */
	text-decoration: none;
	z-index: 99; /* Make sure it does not overlap */
 	border: none; /* Remove borders */
 	outline: none; /* Remove outline */
	position:fixed;
	bottom: 20px;
	right: 30px;
	display:none;
	 font-size: 18px; /* Increase font size */

}

.scrollToTop:hover{
	background-color: #666666; /* Add a dark-grey background on hover */
  	opacity: 1;
  	-webkit-transition: all 0.3s linear;
   -moz-transition: all 0.3s ease-in-out;
   -ms-transition: all 0.3s ease-in-out;
   -o-transition: all 0.3s ease-in-out;
   transition: all 0.3s ease-in-out;
}

.calendario{
	clear:both;
	margin: 1.5em;
	margin-top: 0;
	/*transition: all 0.3s ease-in-out;*/
}

.calendario .circuito{
	background-color: white;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1);
	max-height: 250px;
	width: 100%;
	overflow: hidden;
	/*transition: all 0.3s ease-in-out;*/
}

.calendario .circuito:nth-child(even) .imagenCircuito{
	float: left;
	border-right: solid #ffd659;
}

.calendario .circuito:nth-child(even) .imagenCircuito img{
	float: left;
}

.calendario .circuito:nth-child(even) .descripcion{
	float: right;
}

.calendario .circuito:nth-child(odd) .imagenCircuito{
	float: right;
	border-left: solid #ffd659;
}

.calendario .circuito:nth-child(odd) .imagenCircuito img{
	float: right;
}

.calendario .circuito:nth-child(odd) .descripcion{
	float: left;
}

.calendario .circuito:not(:last-child){
	margin-bottom: 1em;
}

.calendario .circuito .imagenCircuito{
	width: 60%;
	box-sizing: border-box;
	overflow: hidden;
	display: inline-block;
	transition: all 0.3s ease-in-out;
}

.calendario .circuito img{
	width: 700px;
	max-height: 250px;
	filter: brightness(20%);
	object-fit: cover;
	object-position: 0 100%;
	transition: all 0.3s ease-in-out;
}

.calendario .circuito .descripcion{
	width: 40%;
	box-sizing: border-box;
	text-align: center;
	height: 250px;
	display: inline-block;
	display: flex;
	flex-direction: column;
    align-items: center;
    transition: all 0.3s ease-in-out;
}

.calendario .circuito .descripcion h2{
	margin-bottom: 10px;
}

.calendario .circuito .descripcion h4.boton a{
	text-decoration: none;
	color: black;
	display: block;
	padding: 5px 10px;
}


.calendario .circuito .descripcion h4{
	font-size: 1em;
	font-weight: 600;
}

.calendario .circuito .descripcion h4.lugar{
	margin-top: 0px;
	margin-bottom: 30px;
}

.calendario .circuito .descripcion h4.hora{
	margin-bottom: 35px;
}

.calendario .circuito .descripcion h4.boton{
	background-color: #ffd659;
	/*margin: 0 auto;*/
	border-radius: 5px;
	box-shadow: 0 0 5px rgba(0,0,0,0.3);
	transition: box-shadow 0.2s ease-in-out;
}

.calendario .circuito:hover img{
	filter: brightness(100%);
}

.calendario .circuito:hover .imagenCircuito{
	width: 70%;
	transition: all 0.3s ease-in-out;
}

.calendario .circuito:hover .descripcion{
	width: 30%;
	background-color: #010203;
	transition: all 0.3s ease-in-out;
}

.calendario .circuito:hover .descripcion h2{
	color: #ffd659;
	transition: all 0.3s ease-in-out;
}

.calendario .circuito:hover .descripcion h4.lugar, 
.calendario .circuito:hover .descripcion h4.hora{
	color: white;
	font-weight: 500;
	transition: all 0.3s ease-in-out;
}

.calendario .circuito .descripcion h4.boton:hover{
	background: #ffc859;
	box-shadow: 0 0 5px rgba(255,255,255,1);
}

.calendario .circuito .descripcion h2.largo{
	padding-left: 0px;
	padding-right: 0px;
	transition: all 0.3s ease-in-out .01s;
}

.calendario .circuito .descripcion h4.largo{
	padding-left: 0px;
	padding-right: 0px;
	transition: font-size 0.3s ease-in-out .01s;
}

.calendario .circuito:hover .descripcion h4.largo{
	font-size: 0.9em;
}

.calendario .circuito:hover .descripcion h4.lugar.largo{
	margin-bottom: 32px;
}

.calendario .circuito:hover .descripcion h2.largo{
	font-size: 1.2em;
	padding-top: 5px;
	padding-bottom: 0px;
	transition: all 0.3s ease-in-out;
}

.calendario .circuito:hover .descripcion h2.largo.darlington,
.calendario .circuito:hover .descripcion h2.largo.phoenix{
	font-size: 1.4em;
	padding-top: 2px;
}

.calendario .circuito:hover .descripcion h2.largo.richmond{
	font-size: 1.3em;
}

.calendario .circuito:hover .descripcion h2.largo.charlotte{
	font-size: 1.15em;
}

.calendario .circuito .descripcion h2.extraLarge{
	font-size: 1em;
}

.calendario .circuito:hover .descripcion h2.extraLarge{
	font-size: 0.85em;
}

.calendario h1:not(.titulo){
	font-size: 2.5em;
}

/* FIN CALENDARIO */

/* INICIO POSICIONES */

.holder.degradePosiciones{
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(237,237,237,1) 9%, rgba(237,237,237,1) 100%);
}

.tablaDePosiciones{
	margin: 1.5em;
}

#posiciones th:nth-child(2){
	padding-left: 8px;
}

#posiciones td:nth-child(2){
	text-align: left;
	padding: 0;
}

#posiciones td:nth-child(3){
	padding: 0;
	margin: 0;
	/*width: 50px;*/
}

#posiciones th:nth-child(3):hover{
	color: white;
}

#posiciones th:nth-child(9),
#posiciones th:nth-child(5){
	position: relative;/*
	display: inline-block;*/
}

#posiciones th:nth-child(9):hover .descripcion,
#posiciones th:nth-child(5):hover .descripcion
{
	opacity: .9;
	z-index: 1;
}

#posiciones .descripcion{
	position: absolute;
	bottom: 120%; /* At the bottom of the tooltip */
	left: 50%;
	padding: 5px;
	color: white;
	font-weight: 500;
	background: black;
	border-radius: 10px;
	opacity: 0;
	transition: opacity .1s ease-in .3s;
	z-index: -1;
}

#posiciones .descripcion.dif{
	width: 120px;
	margin-left: -60px; 
}

#posiciones .descripcion.nT{
	width: 100px;
	margin-left: -50px; 
}

#posiciones .descripcion::after {
  content: "";
  position: absolute;
  top: 100%; /* At the bottom of the tooltip */
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: black transparent transparent transparent;
}


#posiciones {
 	border-collapse: collapse;
  	width: 100%;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1);
}

#posiciones td, #posiciones th {
  padding: 8px;
}

#posiciones td{
    border: 1px solid #ddd;
}

#posiciones th{
    border: 1px solid #32383e;
    transition: all 0.1s ease-in-out;
}

#posiciones th:hover{
	color: #ffd659;
}

#posiciones th:focus{
	color: #ffd659;
	background-color: #333;
	outline: 0;
}

#posiciones tr:nth-child(even){background-color: white;}

#posiciones tr:hover {background-color: #ddd;}

#posiciones th{
  /*padding-top: 12px;
  padding-bottom: 12px;*/
  margin: 0;
  padding: 0;
  text-align: center;
  background-color: #010203;
  color: white;
}

#posiciones td{
	text-align: center;
}

#posiciones .logo.marca{
	height: 20px;
	margin: 0;
	padding: 0;
	padding-top: 4px;
}

#posiciones .logo.numero{
	height: 20px;
	width: 25px;
	position: absolute;
	margin: 0 5px;
}

#posiciones .nombre{
	position: relative;
	padding: 8px 8px 8px 36px;
}

/* FIN POSICIONES */

/* INICIO EQUIPOS */

.indice.equipos{
	margin: 0;
	padding: 0;
}

.indice.equipos .columnas{
	display: flex;
	justify-content: space-around;
	min-height: 100%;
	min-height: 62.6vh;
	padding: 0;
	margin: 0;
}

.indice.equipos .columnas .columna{
	text-align: center;
	flex: 1 1;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.indice.equipos .columnas .columna.ford{
	background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url("../img/manufacturers/ford/mustang-2019-bw.jpg");
	background-position: 50% 0; 
	background-size: cover;
	background-repeat: no-repeat;
}

.indice.equipos .columnas .columna.ford:hover{
	background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("../img/manufacturers/ford/mustang-2019.jpg");
	background-position: 50% 0; 
	background-size: cover;
	background-repeat: no-repeat;
}

.indice.equipos .columnas .columna.toyota{
	background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url("../img/manufacturers/toyota/camry-2019-bw.jpg");
	background-position: 35% 0;  /* 35% */
	background-size: cover;
	background-repeat: no-repeat;
}

.indice.equipos .columnas .columna.toyota:hover{
	background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("../img/manufacturers/toyota/camry-2019.jpg");
	background-position: 35% 0; 
	background-size: cover;
	background-repeat: no-repeat;
}

.indice.equipos .columnas .columna.chevrolet{
	background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url("../img/manufacturers/chevrolet/camaro-2019-bw.jpg");
	background-position: 50% 0; 
	background-size: cover;
	background-repeat: no-repeat;
}

.indice.equipos .columnas .columna.chevrolet:hover{
	background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("../img/manufacturers/chevrolet/camaro-2019.jpg");
	background-position: 50% 0; 
	background-size: cover;
	background-repeat: no-repeat;
}

body:after{
 display:none;
 content: url("../img/teams/mustang2019.jpg") url("../img/teams/camry20192.jpg") url("../img/teams/camaro2019.jpg");
}

.indice.equipos .columnas .columna:not(:last-child){
	width: auto;
}

.indice.equipos .columnas .columna:last-child{
	/*padding-right: 1px;*/
}

.indice.equipos .columnas .columna .contenedorLogo{
	justify-content: flex-start;
}

.indice.equipos .logo{
	height: 50px;
	margin: 25px auto 10px auto;
}

.indice.equipos .columnas .columna .lista{
	display: flex;
	flex-direction: column;
	flex: 1 1;
	justify-content: space-around;
}

.indice.equipos .columnas .columna a{
	color: white;
	text-shadow: 2.2px 2.2px 2.2px #010203;
	font-size: 1.1em;
}

.indice.equipos .columnas .columna a:hover{
	color: #ffd659;
	text-shadow: 2.2px 2.2px 2.2px #010203;
}

/* FIN EQUIPOS */

/* INICIO EQUIPO X */

.holder.equipo{
	background: white;
	overflow: none;
}

.holder.equipo.jgr{
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 72%, rgba(237,237,237,1) 82%, rgba(237,237,237,1) 100%);
}

.holder.equipo.teampenske{
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 65%, rgba(237,237,237,1) 75%, rgba(237,237,237,1) 100%);
}

.holder.equipo .logoEquipo{
	height: 100px;
	display: block;
	margin: 1.5em auto 0;
}

.holder.equipo .imgEquipo{
	margin-bottom: -4px;
}

.holder.equipo .imgEquipo img{
	object-fit: cover;
	width: 100%;
	-webkit-mask: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.5) 20%, rgba(0,0,0,1) 30%, rgba(0,0,0,1) 100%);
}

.holder.equipo .descripcionEquipo{
	box-shadow: inset 0 16px 15px -15px rgba(0, 0, 0, 0.8);
	padding: 1px 1.5em 1.5em 1.5em;
	background: linear-gradient(to top, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 10%, rgba(255,255,255,1) 20%, rgba(255,255,255,1) 100%);
}

.holder.equipo .descripcionEquipo h1{
	text-align: center;
	margin-top: 1em;
}

.holder.equipo .descripcionEquipo h1:before,
.holder.equipo .descripcionEquipo h1:after{
	background-color: #010203;
 	content: ""; /* Importante, tiene que haber contenido aunque esté vacío para que se muestre */
 	display: inline-block;
  	height: 3px; /* grosor de la linea */
  	position: relative;
 	bottom: 12px; /* con esto ajustas la altura */
  	width: 32%; /* largo de la linea */
  	pointer-events: none; /* para que no sea clickeable */
}

.holder.equipo .descripcionEquipo h1:before{ /* margen que separa la linea del elemento */
	right: 0.6em;  
  	margin-left: -60%;
}

.holder.equipo .descripcionEquipo h1:after{ /* margen que separa la linea del elemento */
	left: 0.6em;
 	margin-right: -60%;
}

.holder.equipo.notfound h1{
	text-align: center;
	margin-top: 1em;
}

.holder.equipo.notfound h1:before,
.holder.equipo.notfound h1:after{
	background-color: #010203;
 	content: ""; /* Importante, tiene que haber contenido aunque esté vacío para que se muestre */
 	display: inline-block;
  	height: 3px; /* grosor de la linea */
  	position: relative;
 	bottom: 12px; /* con esto ajustas la altura */
  	width: 25%; /* largo de la linea */
  	pointer-events: none; /* para que no sea clickeable */
}

.holder.equipo.notfound h1:before{ /* margen que separa la linea del elemento */
	right: 0.6em;  
}

.holder.equipo.notfound h1:after{ /* margen que separa la linea del elemento */
	left: 0.6em;
}

.holder.equipo.notfound h3{
	text-align: center;
	margin-top: 1em;
}

.holder.equipo.notfound a {
	transition: color 0.1s ease-in-out;	
	text-decoration: none;
	color: black;
}

.holder.equipo.notfound a:hover {
	color: #007ac2;
}

.contenedorFlex{
	display: flex;
}

.holder.equipo .descripcionEquipo .parrafo{
	width: 72%;
	flex: 1 1;
	padding-right: 1em;
	border-right: 1px solid #bfbfbf;
}

.holder.equipo .descripcionEquipo .parrafo h2{
	margin-top: 15px;
}

.holder.equipo .descripcionEquipo .parrafo p{
	margin: 0;
	padding: 0;
}

.holder.equipo .descripcionEquipo .info{
	width: 28%;
	padding-left: 1em;
}
.holder.equipo .descripcionEquipo .info h4{
	margin: 5px;
	padding: 0;
}

.holder.equipo .descripcionEquipo .info p{
	margin: 5px 10px;
	padding: 0;
}

.holder.equipo .descripcionEquipo .info a{
	text-decoration: none;
	color: #007ac2;
}

.info .icon-x:hover::before{
	color: #000000;
}

.holder.equipo h2.tituloPilotos{
	margin: 0 0 1em 1em;
}

.holder.equipo .pilotos{
	box-sizing: border-box;
	display: flex;
	flex-wrap: wrap;
}

.pilotos .piloto{
	background-color: white;
	box-sizing: border-box;
	width: 21.97%;
	margin: 0 0.6em 1.5em 0.6em;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1);
}

.pilotos .piloto:first-child{
	margin-left: 1.5em;
}

.pilotos .piloto:last-child{
	margin-right: 1.5em;
}

.imagenPiloto{
    overflow: hidden;
}

.pilotos .piloto .imagenPiloto img{
	max-width: 100%;
    display: block;
    width: 100%;
    transform: scale(1);
	height: 150px;
	object-fit: cover;
	background-color: #f4f4f4;
}

.pilotos .piloto h3{
	display: inline-block;
	padding: 0 5px 6px;
	vertical-align: middle;
	pointer-events: none;
}

.pilotos .piloto .logo.numero{
	display: inline-block;
	height: 25px;
	margin: 5px 0 5px 15px;
	vertical-align: middle;
}


/* FIN EQUIPO X */

/* INICIO LOGIN */

.holder.login{
	background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("../img/log-in/background.jpg");
	background-position: 0 0; 
	background-size: cover;
	background-repeat: no-repeat;
	position: relative;
	min-height: 575px;
}

.caja{
	background-color: white;
	width: 50%;
	border-radius: 10px;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1);
	box-sizing: border-box;
	padding: 2em 3.5em;
	overflow: hidden;
	position: absolute;
	top: 50%;
  	left: 50%;
  	-ms-transform: translate(-50%, -50%);
 	transform: translate(-50%, -50%);
 	opacity: 0.9;
 	transition: opacity .1s linear;
 	-webkit-backface-visibility: hidden;
}

.opacidadFocus,
.opacidadHover,
.opacidadPoster{
	opacity: 1 !important;
}

.caja form{
    margin: 0 auto;
}

.caja h1{
	margin: 0 0 15px 0;
	padding: 0;
}

/*.formulario label{
	color: #333333;;
    display: inline-block;
    margin-left: 18px;
    padding-top: 20px;
    font-size: 16px;
    margin: 0 auto;

}*/

.formulario input{
	/*border-radius: 10px;*/
	border: none;
 	width: 84%;
	padding: 0.4em 1.6em;
	font-size: 1em;
	font-weight: bold;
    margin-top: 30px;
}

/*input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active  {
    -webkit-box-shadow: 0 0 0 30px white inset !important;
}*/

/*Change text in autofill textbox*/
/*input:-webkit-autofill {
    -webkit-text-fill-color: black !important;
	font-weight: bold;
}*/

.formulario .campo input{
	border-bottom: 2px solid #808080;
	transition: border-color 0.1s ease-in-out;
}

.formulario input:focus::placeholder{
    color: transparent;
}

.formulario input:not(:placeholder-shown) {
   border-color: #ffd659;
}

.formulario input:focus{
	outline: none;
	border-color: #ffd659;
}

.formulario input:focus .caja{
	opacity: 1;
}

.formulario input:hover{
	border-color: #ffd659;
}

.formulario input[type="submit"]{
	background-color: #ffd659;
	/*padding: 5px 10px;*/
	border-radius: 5px;
	box-shadow: 0 0 5px rgba(0,0,0,0.2);
	width: auto;
	color: black;
	transition: box-shadow 0.1s ease-in-out;
	cursor: pointer;
}

.formulario .boton{
	text-align: center;
}

.formulario .boton input{
	margin-top: 30px;
	font-size: 18px;
	font-weight: bolder;
}

.formulario .boton input{
	transition: background 0.1s ease-in-out;
}

.formulario .boton input:hover{
	background: #ffc859;
}

.formulario p{
	text-align: center;
	font-size: 12px;
	padding: 0;
	margin: 10px 0 0 0;
}

.formulario p a{
	text-decoration: none;
	color: black;
	font-weight: bold;
	transition: color 0.1s ease-in-out;
}

.formulario p a:hover{
	/*color:dodgerblue;*/
	color: #007ac2;
}

/* FIN LOGIN */

/* INICIO REGISTRO */

.holder.registro{
	background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("../img/register/background.jpg");
	background-position: 100% 0; 
	background-size: cover;
	background-repeat: no-repeat;
	position: relative;
	min-height: 575px;
}

.formulario .campo{
	position: relative;
}

.registro .formulario .boton input{
	margin-top: 20px;
	font-size: 18px;
	font-weight: bolder;
}

.formulario .iconoIzq{
	position: absolute;
	left: 0.3em;
}

.formulario .iconoDer{
	position: absolute;
	right: 0.3em;
	bottom: 0.45em;
}

.formulario .iconoIzq.icon-user{
	margin-left: -0.25em;
	bottom: 0.75em; 
}

.formulario .iconoIzq.icon-envelop{
	bottom: 0.70em; 
}

.formulario .iconoIzq.icon-lock{
	bottom: 0.80em; 
}

.formulario .noCoinciden{
	padding: 0;
	margin: 0;
	text-align: left;
	color: #e4002b;
	position: absolute;
	opacity: 0;
}

.formulario .textoResultado,
.formulario .textoLogeo{
	font-size: 1em;
}

.formulario .textoLogeo{
	color: #e4002b;
	left: 0;
	right: 0;
	margin: auto;
}

.formulario #toggle1,
.formulario #toggle2{
	opacity: 0;
}

/* FIN REGISTRO */

/* INICIO NOTICIA */

.holder.noticia{
	background-color: white;
}

.holder.noticia .imgPrincipal{
	width: 100%;
	height: 450px;
	object-fit: cover;
	object-position: 0 30%;
}

.cuerpoNoticia{
	padding: 2em 1.5em 1em 2em;
}

.cuerpoNoticia h1{
	margin-top: 0;
}

.cuerpoNoticia p{
	margin: 0;
	padding: 0;
    white-space: pre-line;
    font-size: 1.1em;
}

.videoNoticia {
	display: flex;
	justify-content: center;
	margin: 20px 0;
}
.videoNoticia iframe {
	max-width: 100%;
}

.comentarios{
	padding: 2em 1.5em 1em 1.5em;
}

.comentarios-list {
    margin-top: 20px;
}

.comentario {
    padding: 10px;
    border-radius: 5px;
}

.comentario-header {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.comentario-header img {
    border-radius: 50%;
    margin-right: 10px;
	height: 36px;
	width: 36px;
 	object-fit: cover;
}

.comentario-header span {
    margin-right: 10px;
}

.comentario-usuario{
	font-size: 20px;
}

.comentario-fecha {
    font-size: 15px;
    color: #888;
}

.comentario-body {
    margin-top: 15px;
}

.comentario-form {
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.comentario-form-header {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.comentario-form-header img {
    border-radius: 50%;
    margin-right: 10px;
	height: 48px;
	width: 48px;
 	object-fit: cover;
}

.comentario-form-header span {
    font-size: 20px;
}

.comentario-form-body textarea {
    width: 100%;
    max-width: 100%;
    min-width: 100%;
    box-sizing: border-box;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical; /* Allow vertical resize only */
}

.comentario-form-body {
    margin-top: 10px;
}

.comentario-form-footer {
    margin-top: 10px;
    text-align: right;
}


.comentarios a {
	text-decoration: none;
	color: black;
	font-weight: bold;
	transition: color 0.1s ease-in-out;
}

.comentarios a:hover{
	color: #007ac2;
}

/* Skeleton Loader Styles */
.skeleton {
	background-color: #e0e0e0;
	border-radius: 4px;
	margin: 0px;
	overflow: hidden;
	position: relative;
}

.skeleton::after {
	animation: loading 1.5s infinite;
	background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
	content: '';
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
}

@keyframes loading {
	0% {
		transform: translateX(-100%);
	}
	100% {
		transform: translateX(100%);
	}
}

.skeleton-img {
	margin: 0;
	height: 75%;
	width: 100%;
}
.skeleton-title {
	width: 75%;
	height: 8%;
	margin-left: 5%;
	margin-bottom: -5px;
}
.skeleton-text {
	height: 6%;
	width: 85%;
	margin-top: 0px;
	margin-left: 5%;
	margin-bottom: 5%;
}

.noticiaPrincipal .skeleton-img{
	height: 80%;
}
.noticiaPrincipal .skeleton-title{
	width: 65%;
	height: 5%;
	margin-left: 2.5%;
	margin-bottom: 0px;
}
.noticiaPrincipal .skeleton-text{
	height: 3.5%;
	margin-left: 2.5%;
	margin-bottom: 2.5%;
}

/* Profile Page Styles */

.perfil {
	padding: 2em 1.5em 0 1.5em;
	background: linear-gradient(to top, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 10%, rgba(255,255,255,1) 20%, rgba(255,255,255,1) 100%);
	box-sizing: border-box;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1);
	background-color: white;
	overflow: auto;
	display: flex;
 	flex-direction: column;
 	justify-content: space-between;
  	align-items: flex-start;
	width: 100%; 
	height:100%;
}

.perfil h1 {
	margin: 0;
}


.perfil hr{
	width: 100%;
	border-top: 3px solid #010203;
	margin-bottom: 2em;
	color: #010203;
}

.perfil h2:after {
	background-color: #010203;
 	content: "";
 	display: inline-block;
  	height: 3px;
  	position: relative;
 	bottom: 7px;
  	pointer-events: none;
  	left: 0.5em;
 	margin-right: -50%;
}

.perfil .password-section h2:after {
	width: 71%;
}

.perfil .logout-section h2:after {
	width: 79.5%;
}

.page-title {
    text-align: left;
    color: black;
    margin-bottom: 30px;
    font-size: 2.5em;
}

.profile-section, .password-section, .logout-section {
    margin-bottom: 30px;
}

.profile-pic-form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.current-profile-pic {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
}

.current-profile-pic img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.username {
	margin-top: 5px;
    font-size: 1.3em;
    font-weight: bold;
    color: black;
    margin-bottom: 20px;
    text-align: center;
}


.file-input-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
	padding: 10px 20px;
    margin-bottom: 20px;
    background-color: #ffd659;
    border-radius: 5px;
	transition: background-color 0.3s;
    cursor: pointer;
}

.file-input-wrapper:hover {
    background-color: #ffc859;
}

.file-input {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
}

.submit-btn, .logout-btn {
    background-color: #ffd659;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
	display: flex;
	margin: auto;
}

.submit-btn:hover {
   background-color: #ffc859;;
}

.logout-btn {
    background-color: #e4002b;
	color: white;
	font-weight: bolder;
}

.logout-btn:hover {
	background-color: #cd0027;
}

.password-form .form-group {
    margin-bottom: 15px;
}

.password-form label {
    margin-bottom: 5px;
    color: #666;
	margin-left: 30%;
}

.password-form input[type="password"] {
    width: 40%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
	margin: auto;
	display: flex;
}

.success-message, .error-message {
    padding: 10px;
    border-radius: 4px;
    margin-top: 10px;
}

.success-message {
    background-color: #dff0d8;
    color: #3c763d;
    border: 1px solid #d6e9c6;
}

.error-message {
    background-color: #f2dede;
    color: #a94442;
    border: 1px solid #ebccd1;
}

/* FIN */