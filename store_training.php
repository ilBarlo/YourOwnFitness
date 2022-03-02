<?php 
require "conn.php";
require "dbclass.php";
$db = new DB_functions();
$publish_date = date("Y-m-d");
$trainings_per_week = $db->getTrainingsPerWeek($_POST['email'],$conn);
$result = $trainings_per_week->fetch_array();
$trainings_per_week = intval($result[0]);
$success = $db->storeUserTrainings($_POST['email'], $_POST['allenamento'], $trainings_per_week, $publish_date, $conn);
if($success == 0){
    echo "Allenamento ".$_POST['allenamento']." già seguito!";
} 
else echo "Buon divertimento con il workout ".$_POST['allenamento'];
?>