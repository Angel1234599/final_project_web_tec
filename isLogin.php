<?php
if(!isset($_SESSION['isLoggedIn']) || $_SESSION['boolLogin'] == false){
  header('Location: login.php');
  
}
?>
