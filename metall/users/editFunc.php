<?php 

 require '../bootstrap.php';

$name = $_SESSION['logged_user']->name;
$email = $_SESSION['logged_user']->email;
$phone = $_SESSION['logged_user']->phone;
$date = $_SESSION['logged_user']->join_date;
$id = $_SESSION['logged_user']->id;

?>