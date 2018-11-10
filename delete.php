<?php
$id = $_GET['id'];
require_once 'php/Dao.php';
$dao = new Dao();
$dao->deleteComment($id);
header('Location: contact.php');
exit;