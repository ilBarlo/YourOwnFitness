<?php
  unset($_SESSION['email']);
  session_destroy();
  setcookie("user", "", time() - 3600); // Distruzione del cookie
  header("location:index.php");
?>
