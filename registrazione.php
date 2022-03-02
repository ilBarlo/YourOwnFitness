<?php
session_start();
if(isset($_SESSION['reg']) && $_SESSION['reg'] == "err"){
  alert("Email già utilizzata in fase di regsitrazione!");
  $_SESSION['reg'] == "ok";
}

function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

<script>
function checkPass(){
         var pass  = document.getElementById("password1").value;
         var rpass  = document.getElementById("password").value;
        if(pass != rpass){
            document.getElementById("submit").disabled = true;
            //$('.missmatch').html("Entered Password is not matching!! Try Again");
        }else{
            //$('.missmatch').html("");
            document.getElementById("submit").disabled = false;
        }
}
</script>

<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Registrazione -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Calcolo IMC </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Registrazione" />
		<meta name="keywords" content="fitness" />
<!-- File .css external, messo nella repository css/style.css -->
	 <link rel="stylesheet" type="text/css" href="css/styles.css">
 </head>

<!-- METTERE IL LOGO UNA VOLTA PREPARATO SIA AL login SIA AL registration FORM -->

 <body style="
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background-image: url(images/IMG.jpeg);
  background-size: cover;
">

  <div class="container">
    <div class="title">Registrazione</div>
    <div class="content">
      <form action="index.php" method="post"> <!-- una volta finito mettere server.php -->
<!-- Serve per identificare il servizio da mandare in post -->
				<input type="hidden" name="service" value="registrazione">
<!-- -->
        <div class="user-details">
					<div class="input-box">
            <span class="details">Nome</span>
            <input name="nome" type="text" placeholder="Inserisci il nome" required>
          </div>

          <div class="input-box">
            <span class="details">Cognome</span>
            <input name="cognome" type="text" placeholder="Inserisci il cognome" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input name="email" type="text" placeholder="Inserisci la email" required>
          </div>
          <div class="input-box">
            <span class="details">Telefono/Cellulare</span>
            <input name="telefono" type="text" placeholder="Inserisci il tuo numero di telefono" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input name = "password1" id = "password1" onkeyup="checkPass()" type="password" placeholder="Inserisci la password" required>
          </div>

          <div class="input-box">
            <span class="details">Conferma Password</span>
            <input name="password" id="password" type="password" onkeyup="checkPass()" placeholder="Conferma la tua password" required>
          </div>

          <div class="input-box">
            <span class="details">Frequenza di allenamento</span>
            <input name="freq_all" type="text" placeholder="N° di giorni alla settimana in cui ti alleni (1-6)" required>
          </div>

          <div class="input-box">
            <span class="details">Obiettivo</span>
            <input name="obiettivo" type="text" placeholder="Definire il tuo obiettivo (es. dimagrire ecc..)" required>
          </div>

        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value = "M" id="dot-1">
          <input type="radio" name="gender" value = "F" id="dot-2">
          <input type="radio" name="gender" value="DC" id="dot-3">
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
          <input type="submit" id="submit" value="Registrati!">
        </div>
				<hr>
        <div class="details" style="
        align-items: center; justify-content: center; display: flex;">
          <a href="index.php">
          Torna alla Home principale
          </a>
        </div>

      </form>
    </div>
  </div>

</body>
</html>
