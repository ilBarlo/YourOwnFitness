<?php
session_start();
require "conn.php";
require "dbclass.php";

echo $_SESSION['email'];
$db = new DB_functions();
$type = $_POST['submit'];

if ($type == "Allenamento"){
	$trainings = $db->getAllTrainings($conn);
}
else $trainings = $db->getTrainingsPerType($type,$conn);

if(mysqli_num_rows($trainings) > 0){
	for ($x = 0; $x < mysqli_num_rows($trainings); $x++){
		$resrow = mysqli_fetch_row($trainings);
		$nome = $resrow[0];
		$tipo = $resrow[1];
		$durata = $resrow[2];
		$nome_esercizio_attrezzo = $resrow[3];
		$peso = $resrow[4];
		$serie = $resrow[5];
		$ripetizioni = $resrow[6];
		echo $nome.$tipo.$durata.$nome_esercizio_attrezzo.$peso.$serie.$ripetizioni;
	}
}
?>


<!-- Utilizzo l'iframe in modo da poter visualizzare le diverse schede sulla stessa pagina "allenamento.php" -->
<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Allenamento -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Allenamento </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Allenamento" />
		<meta name="keywords" content="fitness" />
<!-- File .css external, messo nella repository css/style.css -->
	 <link rel="stylesheet" type="text/css" href="css/styles.css">
	 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	 <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
 </head>

 <body>
<!-- Testata del sito, Logo del sito -->
<header>

	<div class="Login"> <!-- Percorso per la registrazione -->
		<a href="login.php" style="color: black; text-decoration: none" title="Clicca per il login">
		Login
	</a></div>

	<img class="Logo" width="10%" src="images/logo.png" alt="Il logo andrà qui"/>

</header>

<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
<nav>
	<ul>
		<!-- Home -->
		<li><form id="homeform" action="index.php" method="get">
			<input class="submit1" type="submit" name="submit" id="homesubmit" value="Home">
		</form></li>

		<!-- Menù a tendina -->
		<li class="dropdown">

		<!-- Allenamento -->
		<form id="allenamentoform" method="post">
				<input class="submit1" type="submit" name="submit" id="allenamentosubmit" value="Allenamento">

			<div class="dropdown-content" style="margin-top: 0px;">

				<input class="submit" type="submit" name='submit' id="cardiosubmit" value="Cardio">
				<hr>

				<input class="submit" type="submit" name='submit' id="pesisubmit" value="Pesi">
				<hr>

				<input class="submit" type="submit" name='submit' id="clsubmit" value="Corpo Libero">
				<input type="hidden" name='ciao' value="Ciao">
				<input type="hidden" name='come stai' value="Come stai?">
				<hr>
				</script>
			</div>
		</form>
		</li>
		<!-- Fine menù a tendina -->

		<!-- Calcolo IMC -->
		<li><form id="imcform" action="imc.php" method="get">
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

		<!-- Qui andranno le varie schede di allenamento attraverso l'iframe. Utilizzare4 iframe anche per linkare i video tutorial di determinati esercizi su YouTube -->
		<div id="Presentation">
			<h1>Scrivere qui sotto<h1>
				<div>
					<!-- Qui vanno gli allenamenti -->
				</div>
				<!-- Prova a mettere un iframe con il video di Miletto -->
			<iframe style="position: relative"width="560" height="315" src="https://www.youtube.com/embed/CjMhgsKP0t0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
<?php include("ajax.js"); ?>
</body>

</html>