<?php
require_once "Dao.php";
session_start();

$dao = new Dao();

$first_name = (isset($_POST["first_name"])) ? $_POST["first_name"] : "";
$last_name = (isset($_POST["last_name"])) ? $_POST["last_name"] : "";
$email = (isset($_POST["email"])) ? $_POST["email"] : "";
$password = (isset($_POST["pass"])) ? $_POST["pass"] : "";

$dao->saveUser($first_name, $last_name, $email, $password);

$_SESSION['login_user'] = $email;
$_SESSION['logged'] = true;

header('Location: ../index.php');

?>