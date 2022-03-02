<?php

class DB_functions{

	function __construct(){
	}

	public function storeUser($email, $password, $nome, $cognome, $sesso, $telefono, $obiettivo, $freq_all, $conn){
		$encrypted_password = sha1($password);

		$mysql_qry = "INSERT INTO utente VALUES('$email', '$password', '$nome', '$cognome', '$sesso', '$telefono', '$obiettivo', 0.0,'$freq_all')";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}

	public function login($email, $password, $conn){
		$encrypted_password = $password;
		$mysql_qry = "select nome, cognome from utente where email = '$email' and password = '$encrypted_password'";
		$result = mysqli_query($conn, $mysql_qry);
		if(mysqli_num_rows($result) > 0){
		return $result;
		}
		else{
			return "0";
		}
	}

	public function setIMC($email, $imc, $conn){
		$mysql_qry = "update utente set imc = '$imc' where email = '$email'";
		$result = mysqli_query($conn, $mysql_qry);
	}

	public function getTrainingsPerType($type, $conn){
		$mysql_qry = "SELECT * FROM schede_complete where tipo= '$type'";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}

	public function getAllTrainings($conn){
		$mysql_qry = "SELECT * FROM schede_complete";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}

	public function getTrainingsPerTypeUser($email, $type, $conn){
		$mysql_qry = "select utente set imc = '$imc' where email = '$email'";
		$result = mysqli_query($conn, $mysql_qry);
	}
	
	public function getAllTrainingsNoDupl($conn){
		$mysql_qry = "SELECT distinct nome FROM schede_complete";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}
	
	public function getTrainingsPerTypeNoDupl($type, $conn){
		$mysql_qry = "SELECT distinct nome FROM schede_complete where tipo= '$type'";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}

	public function getAllTrainingsByName($name, $conn){
		$mysql_qry = "SELECT * FROM schede_complete WHERE nome = '$name'";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}
	public function getAllTrainingsByUser($email, $conn){
		$mysql_qry = "SELECT * FROM utenti_allenamenti WHERE email_utente = '$email'";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}
	
	public function updateProgress($email, $allenamento, $incremento, $conn){
		$mysql_qry = "update utenti_allenamenti set progresso = progresso + '$incremento' where email_utente = '$email' and nome_allenamento = '$allenamento'";
		$result = mysqli_query($conn, $mysql_qry);
	}
	
	public function getTotalNumberOfExcercises($allenamento, $conn){
		$mysql_qry = "select count(nome) from schede_complete where nome = '$allenamento'";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}

	public function getTrainingsPerWeek($email, $conn){
		$mysql_qry = "select freq_all from utente where email = '$email'";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}

	public function storeUserTrainings($email, $allenamento, $trainings_per_week, $date, $conn){
		$mysql_qry = "insert into utenti_allenamenti values ('$email','$allenamento','$trainings_per_week', 0, '$date')";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}

	public function storeUserDiet($email, $dieta, $data_inizio, $conn){
		$mysql_qry = "insert into utenti_diete values ('$email','$dieta','$data_inizio', '$data_inizio')";
		$result = mysqli_query($conn, $mysql_qry);
		return $result;
	}
}

?>

