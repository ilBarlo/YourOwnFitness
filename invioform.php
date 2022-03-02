<?php
// Recupero i valori inseriti nel form
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$obiettivo = $_POST['obiettivo'];

// Dopo 4 secondi rimando all’home del sito
$delay = "5";
$url = "index.php";

// La verifica della completezza dei dati è già stata effettuata nella classe consulenza.php

// Verifico se un indirizzo email è valido
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo 'Indirizzo email non corretto';
}
else{

// Compilo un messaggio combinando i dati recuperati dal form
$testo = "Nome: " . $nome . "\n"
       . "Cognome: " . $cognome . "\n"
       . "Email: " . $email . "\n"
       . "Telefono: " . $telefono . "\n"
       . "Obiettivo: " . $obiettivo;

// Uso la funzione mail di PHP per inviare i dati al mio indirizzo di posta
mail('yourownfitness.web@gmail.com', 'Mail per consulenza', $testo);
}
?>

<body>
<table align='center' bordercolor='#CCCCCC'>
  <tr>
    <td>
<div align='center'><font face='Verdana, Arial, Helvetica, sans-serif'>
Grazie per averci contattato</font><br><br>
Risponderò al più presto all'indirizzo email immesso nel form<br><br>
Per tornare all'Home attendi 4 secondi o <a href='index.php'>Clicca qui</a></font></div></td>
<meta http-equiv='refresh' content='$delay;  url=$url'>
</tr>
</table>
</body>
