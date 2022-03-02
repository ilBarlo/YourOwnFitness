<?php
session_start();
require "conn.php";
require "dbclass.php";

$db = new DB_functions();
?>

<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Contatti -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Calcolo IMC </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Contatti" />
		<meta name="keywords" content="fitness" />
<!-- File .css external, messo nella repository css/style.css -->
	 <link rel="stylesheet" type="text/css" href="css/styles.css">

	 <!-- Container per il cookie -->
	 <link rel="stylesheet" href="purecookie.css"/>
	 <script src="purecookie.js"></script>
	 
 </head>

 <body>
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
		<li><form id="imcform" action="#" method="get">
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

		<!-- Qui andranno i vari contatti (e le varie foto?) -->
		<!-- Mettere email di YourOwnFitness, email e numeri di telefono nostri -->
		<div id="Presentation">
			<h1 style="text-transform: uppercase">Contatti</h1>

			<ul>
				<li><b>email:</b> yourownfitness.web&#64;gmail.com</li>
			</ul>

			<ul>
				<li>BARLETTA Francesco
					<ul>
					<li><b>email:</b> f.barletta5&#64;studenti.poliba.it</li>
					<li><b>telefono:</b> 3394215741</li></ul><hr>

				<li>LONGO Antonello
					<ul>
					<li><b>email:</b> a.longo70@studenti.poliba.it</li>
					<li><b>telefono:</b> 3884460133</li></ul><hr>

				<li>LONGO Pierluigi
					<ul>
					<li><b>email:</b> p.longo6@studenti.poliba.it</li>
					<li><b>telefono:</b> 3201125429</li></ul><hr>

				<li>CAMPOSEO Antonio
					<ul>
					<li><b>email:</b> a.camposeo3@studenti.poliba.it</li>
					<li><b>telefono:</b> 3274738459</li></ul><hr>

				<li>DI PALMA Antonio
					<ul>
					<li><b>email:</b> a.dipalma6@studenti.poliba.it</li>
					<li><b>telefono:</b> 3474558602</li></ul><hr>
			</ul>

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
