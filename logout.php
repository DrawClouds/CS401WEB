<?php
  session_start();
    $_SESSION['login_user']=null;
    $_SESSION['logged']=false;
    header('Location: index.php'); 
?>