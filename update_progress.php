<?php
session_start();
require "conn.php";
require "dbclass.php";
$db = new DB_functions();

$email = $_POST['email'];
$allenamento = $_POST['allenamento'];
$num_esercizi = $db->getTotalNumberOfExcercises($allenamento, $conn);
$res = mysqli_fetch_row($num_esercizi);
$number = $res[0];
$incremento = 100/$number;
$result = $db->updateProgress($email, $allenamento, $incremento, $conn);
?>