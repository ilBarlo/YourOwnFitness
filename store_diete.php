<?php 
require "conn.php";
require "dbclass.php";
session_start();
$db = new DB_functions();
$publish_date = date("Y-m-d");

$success = $db->storeUserDiet($_SESSION['email'], $_POST['dieta'], $publish_date, $conn);
/*if($success == 1){
    echo "OK";
}
*/
echo $success;
?>