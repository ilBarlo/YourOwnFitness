<?php
session_start();
require "conn.php";
require "dbclass.php";

$db = new DB_functions();

if (isset($_POST['height'])){
	$BMI = computeBMI();
	$_POST['x'] = 0;
	$_POST['y'] = 1000;

	$user = $db->setIMC($_SESSION['email'], $BMI, $conn);
}

function computeBMI(){
	$height=$_POST['height'];
	$heightunits=$_POST["heightunits"];
	$weight=$_POST["weight"];
	$weightunits=$_POST["weightunits"];


	//Convert all units to metric
	if ($heightunits=="inches") $height/=39.3700787;
	if ($weightunits=="lb") $weight/=2.20462;

	//Perform calculation
	$BMI=$weight/pow($height,2);
	$BMI = round($BMI * 100 , 2 ,PHP_ROUND_HALF_UP)/100;

	//Display result of calculation
	return $BMI;
}
?>

<script type="text/javascript">
<!--
/////////////////////////////////////////////////////////
//get scroll position
var get_scroll = function(){
var x = 0, y = 0;
if( typeof( window.pageYOffset ) == 'number' ) {
    //Netscape compliant
    y = window.pageYOffset;
    x = window.pageXOffset;
} else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
    //DOM compliant
    y = document.body.scrollTop;
    x = document.body.scrollLeft;
} else if( document.documentElement &&
( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {
    //IE6 standards compliant mode
    y = document.documentElement.scrollTop;
    x = document.documentElement.scrollLeft;
}
var obj = new Object();
obj.x = x;
obj.y = y;
return obj;
};
//////////////////////////////////
function saveScroll(){
var scroll = get_scroll();
document.getElementById("x").value = scroll.x;
document.getElementById("y").value = scroll.y;
}
//////////////////////////////////////////////
////////This runs at <body onload = "setScroll()" >///////////////////////////
function setScroll(){
var x = "<?php echo $_POST['x']; ?>";
var y = "<?php echo $_POST['y']; ?>";

if(typeof x != 'undefined')
window.scrollTo(x, y);
}

function computeBMI()
{
		//Obtain user inputs
		var height=Number(document.getElementById("height").value);
		var heightunits=document.getElementById("heightunits").value;
		var weight=Number(document.getElementById("weight").value);
		var weightunits=document.getElementById("weightunits").value;


		//Convert all units to metric
		if (heightunits=="inches") height/=39.3700787;
		if (weightunits=="lb") weight/=2.20462;

		//Perform calculation
		var BMI=weight/Math.pow(height,2);

		//Display result of calculation
		document.getElementById("output").innerText=Math.round(BMI*100)/100;

		if (output<18.5)
		document.getElementById("comment").value = "Underweight";
		if (output>=18.5 && output<=25)
		document.getElementById("comment").value = "Normal";
		if (output>=25 && output<=30)
		document.getElementById("comment").value = "Obese";
		if (output>30)
		document.getElementById("comment").value = "Overweight";
		document.getElementById("answer").value = output;
		saveScroll();
}
</script>

<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Calcolo IMC  -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Calcolo IMC </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Calcolo IMC" />
		<meta name="keywords" content="fitness" />
<!-- File .css external, messo nella repository css/style.css -->
 		<link rel="stylesheet" type="text/css" href="css/styles.css">

		 <!-- Container per il cookie -->
		 <link rel="stylesheet" href="purecookie.css"/>
		 <script src="purecookie.js"></script>

 </head>

 <body onload = "setScroll()">
<!-- Testata del sito, Logo del sito -->
<header>
<?php if (($_SESSION['login'] != "done")): ?>
	<div class="Login"> <!-- Percorso per la registrazione -->
		<a href="login.php" style="color: black; text-decoration: none" title="Clicca per il login">
		Login
	</a></div>

	<img class="Logo" width="10%" src="images/logo.png" alt="Il logo andrà qui"/>
<?php endif; ?>
<?php if ($_SESSION['login'] == "done"): ?>
	<div class="Login"> <!-- Percorso per la registrazione -->
		<a href="logout.php" style="color: black; text-decoration: none" title="Clicca per il login">
		Logout
	</a></div>
	<img class="Logo" width="10%" src="images/logo.png" alt="Il logo andrà qui"/>
<?php endif; ?>
</header>

<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
<nav>
	<ul>
		<!-- Home -->
		<li><form id="homeform" action="index.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="homesubmit" value="Home">
		</form></li>

		<!-- Menù a tendina -->
		<li class="dropdown">

		<!-- Allenamento -->
		<form id="allenamentoform" action="allenamento.php" method="get">
				<input class="submit1" type="submit" name="submit1" id="allenamentosubmit" value="Allenamento">
		</form>

			<div class="dropdown-content">

				<input class="submit" type="submit" name='submit' id="cardiosubmit" value="Cardio">
				<hr>

				<input class="submit" type="submit" name='submit' id="pesisubmit" value="Pesi">
				<hr>

				<input class="submit" type="submit" name='submit' id="clsubmit" value="Corpo Libero">
				<hr>
				</script>
			</div>
		</form>
		</li>
		<!-- Fine menù a tendina -->

		<!-- Calcolo IMC -->
		<li><form id="imcform" action="#" method="get">
			<input class="submit1" type="submit" name="submit1" id="imcsubmit" value="Calcolo IMC">
		</form></li>

		<!-- Diete -->
		<li><form id="dieteform" action="diete.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="dietesubmit" value="Diete">
		</form></li>

		<!-- Consulenze -->
		<li><form id="imcform" action="consulenza.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="consulenzasubmit" value="Consulenze">
		</form></li>

		<!-- Contatti -->
		<li><form id="imcform" action="contatti.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="imcsubmit" value="Contatti">
		</form></li>

		<!-- Vecchio menù a tendina
		<li><a href="imc.php">Calcolo IMC</a></li>
		<li><a href="diete.php">Diete</a></li>
		<li><a href="consulenza.php">Consulenze</a></li>
		<li><a href="contatti.php">Contatti</a></li> -->
	</ul>
</nav>

		<div id="content">
		 <div id="front1">
			 <h1 style="margin-left: 14px; color: rgb(192, 109, 26)">
				 Your Own Fitness, la scelta <br>giusta per il tuo fisico!
			 </h1>
		 </div>
	</div>
		<!-- Qui andrà lo script per il calcolo dell'IMC -->
	<div id="Registration-Form">
		<div class="container">
			<p id="pre">L'<b>indice di massa corporea</b> (abbreviato IMC o BMI, dall'inglese <i>body mass index</i>) è un dato biometrico, espresso come rapporto
				 					tra peso e quadrato dell'altezza di un individuo ed è utilizzato come un indicatore dello stato di peso forma. Secondo l'Organizzazione Mondiale
									della Sanità l'IMC, o indice di massa corporea, è raggruppabile in 4 categorie:
									<ul id="pre">
										<li> sottopeso (IMC al di sotto di 19)</li><br>
										<li> medio (IMC compreso tra 19 e 24)</li><br>
										<li> sovrappeso (IMC compreso tra 25 e 30)</li><br>
										<li> obesità (IMC al di sopra di 30)</li><br>
									</ul><p>
			<p id="pre" style="color: red"><b>ATTENZIONE!</b></p>
			<p id="pre">L'altezza è in metri (o inches)! Indicare la propria altezza con un punto (Es. 1.80m)</p>
			<hr>
			<br>
			<div class="title">BMI Calculator (inserisci i dati)</div>
				<br>
				<form action="#" method='post'>
				<div class="user-details">
				<div class="input-box">
				<span class="details">Altezza</span><br>
					<input type="text" name ='height' id="height" onkeyup="saveScroll()" style="width: 30%" required value= "<?php if(isset($_POST['height'])): echo $_POST['height']; endif;?>"/>
					<select type="multiple"  name="heightunits" id="heightunits" style="
					height: 46px;
					width: 30%;
					outline: none;
					font-size: 16px;
					border-radius: 5px;
					padding-left: 15px;
					border: 1px solid #ccc;
					border-bottom-width: 2px;
					transition: all 0.3s ease;
					">
					<option value="metres" selected="selected">metri</option>
					<option value="inches">inches</option>
					</select>
				</div>
				<br><br>
				<div class="input-box">
					<span class="details">Peso</span><br>
					<input type="text" id="weight" name = 'weight' onkeyup="saveScroll()" style="width: 30%" value = "<?php if(isset($_POST['weight'])): echo $_POST['weight']; endif;?>" required/>
					<select type="multiple" name = "weightunits" id="weightunits" style="
					height: 46px;
					width: 30%;
					outline: none;
					font-size: 16px;
					border-radius: 5px;
					padding-left: 15px;
					border: 1px solid #ccc;
					border-bottom-width: 2px;
					transition: all 0.3s ease;
					">
						<option value="kg" selected="selected">kilogrammi</option>
						<option value="lb">pounds</option>
					</select>
				</div>
		</div>

			<div class="button">
				<input name="x" id="x" type="hidden" value="" />
				<input name="y" id="y" type="hidden" value="" />
				<input type="submit" name="calculate" value="Calcola il tuo IMC!" onclick="saveScroll();">
			</div>
			<h1>Il tuo IMC &egrave;: <span name = 'imc' id="output"><?php if (isset($_POST['height'])): echo'<script type="text/javascript">','computeBMI();','</script>';endif;?></span></h1>

			<hr>
			<p id="pre">Controlla la tabella sottostante per confrontare il tuo <b>IMC</b><p>
<!-- Tabella BMI -->
			<img src="images/IMG2.jpeg" alt="Tabella BMI" width="800px"/>

		</form>

		</div>
</div>


	<footer>

			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="allenamento.php">Allenamento</a></li>
				<li><a href="imc.php">Calcolo IMC</a></li>
				<li><a href="diete.php">Diete</a></li>
				<li><a href="consulenza.php">Consulenze</a></li>
				<li><a href="contatti.php">Contatti</a></li>
			</ul>

			<div class="copyright">
				I contenuti presenti sul sito <b>"Your Own Fitness"</b> dei quali &egrave; autore il proprietario del sito <b>Barlo&Fitness</b>
				non possono essere copiati, riprodotti, pubblicati o redistribuiti perch&egrave; appartenenti all'autore stesso.
				&#200; vietata la copia e la riproduzione dei contenuti in qualsiasi modo o forma.
				&#200; vietata la pubblicazione e la redistribuzione dei contenuti non autorizzata espressamente dall’autore.
				<hr>Copyright © 2021 Your Own Fitness by Barlo&Fitness, BARLETTA Francesco Pio. All rights reserved
			</div>

	</footer>

</body>

</html>
