<?php
include("path.php");
session_start();
unset($_SESSION['id']);
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);  //this success is css class which is already defined
session_destroy();
header('Location: ' .BASE_URL . '/index.php');

 ?>
