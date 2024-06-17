<?php 
	include('inc/nav.php');
	$estaPagina='Posiciones';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Posiciones | NASCAR</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.php">
	<link rel="icon" href="img/favicon.ico">
	<style>
		body {
            visibility: hidden;
        }
	</style>
</head>
<body class="sitio">
	<main class="holder degradePosiciones">
		<div class="tablaDePosiciones">
			<h1>Posiciones ─ Temporada 2019</h1>
			<table id="posiciones">
				<thead>
				   <tr>
				    <th class="sortInitialOrder-asc">Pos.</th>
				    <th style="text-align: left;">Piloto</th>
				    <th class="sorter-false">Marca</th>
				    <th>Puntos</th>
				    <th>Dif.<span class="descripcion dif">Puntos detrás del líder</span></th>
				    <th>Ganadas</th>
				    <th>Top 5s</th>
				    <th>Top 10s</th>
				    <th>NTs<span class="descripcion nT">No Terminó</span></th>
				    <th>Vueltas<br> Lideradas</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td>1</td>
				    <td><img src="img/posiciones/martinTruex19Logo.png" class="logo numero"><span class="nombre"><b>Martin Truex Jr</b></span></td>
				    <td>
				    	<a href="https://www.toyota.com/racing" target="_blank"><img src="img/posiciones/toyota-logo-notext.png" class="logo toyota"></a>
				    </td>
				    <td>3095</td>
				    <td>0</td>
				    <td>6</td>
				    <td>13</td>
				    <td>19</td>
				    <td>2</td>
				    <td>771</td>
				  </tr>
				  <tr>
				    <td>2</td>
				    <td><img src="img/posiciones/dennyHamlin11Logo.png" class="logo numero"><span class="nombre"><b>Denny Hamlin</b></span></td>
				    <td>
				    	<a href="https://www.toyota.com/racing" target="_blank"><img src="img/posiciones/toyota-logo-notext.png" class="logo toyota"></a>
				    </td>
				    <td>3080</td>
				    <td>-15</td>
				    <td>4</td>
				    <td>15</td>
				    <td>19</td>
				    <td>1</td>
				    <td>594</td>
				  </tr>
				  <tr>
				    <td>3</td>
				    <td><img src="img/posiciones/kyleBusch18Logo.png" class="logo numero"><span class="nombre"><b>Kyle Busch</b></span></td>
				    <td>
				    	<a href="https://www.toyota.com/racing" target="_blank"><img src="img/posiciones/toyota-logo-notext.png" class="logo toyota"></a>
				    </td>
				    <td>3080</td>
				    <td>-15</td>
				    <td>4</td>
				    <td>14</td>
				    <td>23</td>
				    <td>2</td>
				    <td>1378</td>
				  </tr>
				  <tr>
				    <td>4</td>
				    <td><img src="img/posiciones/kevinHarvick4Logo.png" class="logo numero"><span class="nombre"><b>Kevin Harvick</b></span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>3074</td>
				    <td>-21</td>
				    <td>3</td>
				    <td>12</td>
				    <td>21</td>
				    <td>3</td>
				    <td>793</td>
				  </tr>
				  <tr>
				    <td>5</td>
				    <td><img src="img/posiciones/kyleLarson42Logo.png" class="logo numero"><span class="nombre"><b>Kyle Larson</b></span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet">
				    </td>
				    <td>3063</td>
				    <td>-32</td>
				    <td>1</td>
				    <td>7</td>
				    <td>15</td>
				    <td>6</td>
				    <td>463</td>
				  </tr>
				  <tr>
				    <td>6</td>
				    <td>
				    	<img src="img/posiciones/bradKeselowski2Logo2.png" class="logo numero"><span class="nombre"><b>Brad Keselowski</b></span>
				    </td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>3052</td>
				    <td>-43</td>
				    <td>3</td>
				    <td>12</td>
				    <td>17</td>
				    <td>2</td>
				    <td>1058</td>
				  </tr>
				  <tr>
				    <td>7</td>
				    <td><img src="img/posiciones/alexBowman88Logo.png" class="logo numero"><span class="nombre"><b>Alex Bowman</b></span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet">
				    </td>
				    <td>3049</td>
				    <td>-46</td>
				    <td>1</td>
				    <td>6</td>
				    <td>10</td>
				    <td>1</td>
				    <td>182</td>
				  </tr>
				  <tr>
				   <td>8</td>
				    <td><img src="img/posiciones/williamByron24Logo2.png" class="logo numero"><span class="nombre">William Byron</span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet">
				    </td>
				    <td>3032</td>
				    <td>-63</td>
				    <td>0</td>
				    <td>3</td>
				    <td>11</td>
				    <td>1</td>
				    <td>211</td>
				  </tr>
				  <tr>
				    <td>9</td>
				    <td><img src="img/posiciones/joeyLogano22Logo.png" class="logo numero"><span class="nombre"><b>Joey Logano</b></span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>3032</td>
				    <td>-63</td>
				    <td>2</td>
				    <td>10</td>
				    <td>17</td>
				    <td>0</td>
				    <td>781</td>
				  </tr>
				  <tr>
				    <td>10</td>
				    <td><img src="img/posiciones/clintBowyer14Logo.png" class="logo numero"><span class="nombre">Clint Bowyer</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>3028</td>
				    <td>-67</td>
				    <td>0</td>
				    <td>7</td>
				    <td>15</td>
				    <td>6</td>
				    <td>89</td>
				  </tr>
				  <tr>
				    <td>11</td>
				    <td><img src="img/posiciones/chaseElliot9Logo.png" class="logo numero"><span class="nombre"><b>Chase Elliot</b></span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet"></a>
				    </td>
				    <td>3025</td>
				    <td>-70</td>
				    <td>3</td>
				    <td>10</td>
				    <td>13</td>
				    <td>5</td>
				    <td>578</td>
				  </tr>
				  <tr>
				    <td>12</td>
				    <td><img src="img/posiciones/ryanBlaney12Logo2.png" class="logo numero"><span class="nombre">Ryan Blaney</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>3010</td>
				    <td>-85</td>
				    <td>0</td>
				    <td>8</td>
				    <td>14</td>
				    <td>4</td>
				    <td>385</td>
				  </tr>
				  <tr>
				    <td>13</td>
				    <td><img src="img/posiciones/aricAlmirola10Logo.png" class="logo numero"><span class="nombre">Aric Almirola</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>2101</td>
				    <td>-994</td>
				    <td>0</td>
				    <td>1</td>
				    <td>10</td>
				    <td>2</td>
				    <td>115</td>
				  </tr>
				  <tr>
				    <td>14</td>
				    <td><img src="img/posiciones/ryanNewman6Logo.png" class="logo numero"><span class="nombre">Ryan Newman</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>2085</td>
				    <td>-1010</td>
				    <td>0</td>
				    <td>2</td>
				    <td>11</td>
				    <td>0</td>
				    <td>16</td>
				  </tr>
				  <tr>
				    <td>15</td>
				    <td><img src="img/posiciones/kurtBusch1Logo.png" class="logo numero"><span class="nombre"><b>Kurt Busch</b></span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet">
				    </td>
				    <td>2084</td>
				    <td>-1011</td>
				    <td>1</td>
				    <td>5</td>
				    <td>15</td>
				    <td>1</td>
				    <td>191</td>
				  </tr>
				  <tr>
				    <td>16</td>
				    <td><img src="img/posiciones/ericJones20Logo.png" class="logo numero"><span class="nombre"><b>Eric Jones</b></span></td>
				    <td>
				    	<a href="https://www.toyota.com/racing" target="_blank"><img src="img/posiciones/toyota-logo-notext.png" class="logo toyota"></a>
				    </td>
				    <td>2037</td>
				    <td>-1058</td>
				    <td>1</td>
				    <td>9</td>
				    <td>13</td>
				    <td>3</td>
				    <td>162</td>
				  </tr>
				  <tr>
				    <td>17</td>
				    <td><img src="img/posiciones/jimmieJohnson48Logo.png" class="logo numero"><span class="nombre">Jimmie Johnson</span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet">
				    </td>
				    <td>740</td>
				    <td>-2355</td>
				    <td>0</td>
				    <td>3</td>
				    <td>11</td>
				    <td>1</td>
				    <td>89</td>
				  </tr>
				  <tr>
				   <td>18</td>
				    <td><img src="img/posiciones/danielSuarez41Logo.png" class="logo numero"><span class="nombre">Daniel Suarez</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></td>
				    <td>730</td>
				    <td>-2365</td>
				    <td>0</td>
				    <td>3</td>
				    <td>10</td>
				    <td>2</td>
				    <td>135</td>
				  </tr>
				  <tr>
				    <td>19</td>
				    <td><img src="img/posiciones/paulMenard21Logo.png" class="logo numero"><span class="nombre">Paul Menard</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>656</td>
				    <td>-2439</td>
				    <td>0</td>
				    <td>0</td>
				    <td>4</td>
				    <td>1</td>
				    <td>11</td>
				  </tr>
				  <tr>
				    <td>20</td>
				    <td><img src="img/posiciones/chrisBuescher37Logo.png" class="logo numero"><span class="nombre">Chris Buescher</span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet"></a>
				    </td>
				    <td>599</td>
				    <td>-2496</td>
				    <td>0</td>
				    <td>0</td>
				    <td>4</td>
				    <td>3</td>
				    <td>69</td>
				  </tr>
				  <tr>
				    <td>21</td>
				    <td><img src="img/posiciones/mattDiBenedetto95Logo.png" class="logo numero"><span class="nombre">MattDiBenedetto</span></td>
				    <td>
				    	<a href="https://www.toyota.com/racing" target="_blank"><img src="img/posiciones/toyota-logo-notext.png" class="logo toyota"></a>
				    </td>
				    <td>585</td>
				    <td>-2510</td>
				    <td>0</td>
				    <td>3</td>
				    <td>7</td>
				    <td>4</td>
				    <td>152</td>
				  </tr>
				  <tr>
				    <td>22</td>
				    <td><img src="img/posiciones/rickyStenhouseJr17Logo.png" class="logo numero"><span class="nombre">Ricky Stenhouse Jr</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>563</td>
				    <td>-2532</td>
				    <td>0</td>
				    <td>1</td>
				    <td>2</td>
				    <td>4</td>
				    <td>75</td>
				  </tr>
				  <tr>
				    <td>23</td>
				    <td><img src="img/posiciones/austinDillon3Logo.png" class="logo numero"><span class="nombre">Austin Dillon</span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet"></a>
				    </td>
				    <td>558</td>
				    <td>-2537</td>
				    <td>0</td>
				    <td>0</td>
				    <td>4</td>
				    <td>3</td>
				    <td>69</td>
				  </tr>
				  <tr>
				    <td>24</td>
				    <td><img src="img/posiciones/tyDillon13Logo.png" class="logo numero"><span class="nombre">Ty Dillon</span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet"></a>
				    </td>
				    <td>509</td>
				    <td>-2586</td>
				    <td>0</td>
				    <td>1</td>
				    <td>2</td>
				    <td>0</td>
				    <td>14</td>
				  </tr>
				  <tr>
				    <td>25</td>
				    <td><img src="img/posiciones/danielHemric8Logo.png" class="logo numero"><span class="nombre">Daniel Hemric</span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet"></a>
				    </td>
				    <td>425</td>
				    <td>-2670</td>
				    <td>0</td>
				    <td>1</td>
				    <td>2</td>
				    <td>4</td>
				    <td>17</td>
				  </tr>
				  <tr>
				    <td>26</td>
				    <td><img src="img/posiciones/bubbaWallace43Logo.png" class="logo numero"><span class="nombre">Bubba Wallace</span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet"></a>
				    </td>
				    <td>420</td>
				    <td>-2675</td>
				    <td>0</td>
				    <td>1</td>
				    <td>1</td>
				    <td>2</td>
				    <td>0</td>
				  </tr>
				  <tr>
				    <td>27</td>
				    <td><img src="img/posiciones/ryanPreece47Logo.png" class="logo numero"><span class="nombre">Ryan Preece</span></td>
				    <td>
				    	<a href="https://www.chevrolet.com/motorsports" target="_blank">
				    	<img src="img/posiciones/chevrolet-logo-notext.png" class="logo chevrolet"></a>
				    </td>
				    <td>405</td>
				    <td>-2690</td>
				    <td>0</td>
				    <td>1</td>
				    <td>3</td>
				    <td>6</td>
				    <td>1</td>
				  </tr>
				  <tr>
				   <td>28</td>
				   	<td><img src="img/posiciones/michaelMcDowell34Logo.png" class="logo numero"><span class="nombre">Michael McDowell</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>396</td>
				    <td>-2699</td>
				    <td>0</td>
				    <td>1</td>
				    <td>1</td>
				    <td>5</td>
				    <td>18</td>
				  </tr>
				  <tr>
				    <td>29</td>
				    <td><img src="img/posiciones/coreyLaJoie32Logo.png" class="logo numero"><span class="nombre">Corey LaJoie</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>334</td>
				    <td>-2761</td>
				    <td>0</td>
				    <td>0</td>
				    <td>1</td>
				    <td>3</td>
				    <td>0</td>
				  </tr>
				  <tr>
				    <td>30</td>
				    <td><img src="img/posiciones/davidRagan38Logo2.png" class="logo numero"><span class="nombre">David Ragan</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>330</td>
				    <td>-2765</td>
				    <td>0</td>
				    <td>0</td>
				    <td>0</td>
				    <td>5</td>
				    <td>3</td>
				  </tr>
				  <tr>
				    <td>31</td>
				    <td><img src="img/posiciones/mattTifft36Logo.png" class="logo numero"><span class="nombre">Matt Tifft</span></td>
				    <td><a href="https://performance.ford.com/" target="_blank"><img src="img/posiciones/ford-logo.png" class="logo ford"></a></td>
				    <td>316</td>
				    <td>-2779</td>
				    <td>0</td>
				    <td>0</td>
				    <td>1</td>
				    <td>4</td>
				    <td>1</td>
				  </tr>
			  </tbody> 
			</table>
			<p style="font-style: italic; font-size: 0.9em; margin-bottom: 0;">Un nombre en <span style="font-weight: bold;">negrita</span> indica que el piloto ganó una carrera en la presente temporada.</p>
		</div>
	</main>

	<?php include('inc/footer.php') ?>

	<script>
    // Delay the display of the body content to prevent Flash of Unstyled Content (FOUC)
    setTimeout(function() {
        document.body.style.visibility = "visible";
    }, 10); 
	</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.tablesorter.min.js"></script>

</body>
</html>