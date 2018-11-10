<?php
require_once "Dao.php";
session_start();

  $dao = new DAO();
  $login = (isset($_POST["email1"])) ? $_POST["email1"] : "";
  $pass =(isset($_POST["pass1"])) ? $_POST["pass1"] : "";
  $_SESSION['login_user']= $login;
$result = $dao->getLogin($login,$pass);


  ?>