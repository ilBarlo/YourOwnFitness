<?php
session_start();
require "conn.php";
require "dbclass.php";

$db = new DB_functions();
?>

<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Consulenze -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Calcolo IMC </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Registrazione Form per consulenze" />
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
		<li><form id="imcform" action="#" method="get">
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

	<!-- Form di Registrazione per consulenza -->
<div id="Registration-Form">
	<div class="container">
			<p id="pre">In questa sezione del sito troverai un form di registrazione per richiedere una consulenza con uno dei nostri esperti.
				 Compila il form e, una volta inviato, uno dei nostri personal trainer ti manderà un messaggio via email e/o cellullare
				 per chiarire ogni tuo dubbio <b>in modo completamente gratuito</b>!<p>
			<hr>
			<br>
			<div class="title">Registrazione per consulenze</div>
			<br>
			<form action="invioform.php" method="post">
				<div class="user-details">

					<div class="input-box">
						<span class="details">Nome</span>
						<input name="nome" type="text" placeholder="Inserisci il tuo nome" required>
					</div>

					<div class="input-box">
						<span class="details">Cognome</span>
						<input name="cognome" type="text" placeholder="Inserisci il tuo cognome" required>
					</div>

					<div class="input-box">
						<span class="details">Email</span>
						<input name="email" type="text" placeholder="Inserisci la tua email" required>
					</div>

					<div class="input-box">
						<span class="details">Telefono</span>
						<input name="telefono" type="text" placeholder="Inserisci il tuo n° di telefono" required>
					</div>

					<div class="input-box">
						<span class="details">Obiettivo</span>
						<input name="obiettivo"type="text" placeholder="Inserisci il tuo obiettivo" required>
					</div>

				</div>

				<div class="gender-details">
					<input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
					<span class="gender-title">Sesso</span>
					<div class="category">

						<label for="dot-1">
							<span class="dot one"></span>
							<span class="gender">Male</span>
						</label>

						<label for="dot-2">
							<span class="dot two"></span>
							<span class="gender">Female</span>
						</label>

						<label for="dot-3">
					 		<span class="dot three"></span>
					 		<span class="gender">Prefer not to say</span>
					 	</label>

					</div>
				</div>

				<div class="button">
					<input type="submit" value="Invia modulo">
				</div>

	</div>
</div>

<!-- Fine del Registration Form -->

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
