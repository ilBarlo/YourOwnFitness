<?php
require "conn.php";
require "dbclass.php";

$service = $_POST['service'];
$db = new DB_functions();

switch($service){
	case "registrazione":{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$nome = $_POST['nome'];
		$cognome = $_POST['cognome'];
		$sesso = $_POST['sesso'];
		$telefono = $_POST['telefono'];
		$obiettivo = $_POST['obiettivo'];
		$freq_all = $_POST['freq_all'];
		
		
		$user = $db->storeUser($email, $password, $nome, $cognome, $sesso, $telefono, $obiettivo, $freq_all);
		print $user;
		break;
	}
	case "login":{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user = $db->login($email, $password, $conn);
		print $user;
		break;
	}
	case "prodotti":{
		$nome_prodotto = $_POST['prodotto'];
		$res = $db->getSuperMarket($nome_prodotto, $conn);
		print($res);
		break;
	}
	case "supermercati":{
		$res = $db->getSuperMarket($conn);
		print($res);
		break;
	}
	case "entra":{
		$email = $_POST['email'];
		$beacon_code = $_POST['beacon'];
		$res = $db->entra($beacon_code, $conn);
		break;
	}
	case "esci":{
		$email = $_POST['email'];
		$beacon_code = $_POST['beacon'];
		$res = $db->esci($beacon_code, $conn);
		break;
	}
	case "prodotto":{
		$res = $db->getProdotti($conn);
		print($res);
		break;
	}
}	
?>