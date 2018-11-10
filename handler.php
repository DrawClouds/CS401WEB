<?php
session_start();

$name = $_POST['name'];
$comment = $_POST['comment'];
$_SESSION['presets']['name'] = $name;
$_SESSION['presets']['comment'] = $comment;

$messages = array();
$presets = array();
$bad = false;
if (empty($name)) {
  $_SESSION['messages'][] = "Name is required.";
  $bad = true;
}
if (empty($comment)) {
  $_SESSION['messages'][] = "Comment is required.";
  $bad = true;
}
if ($bad) {
  header('Location: contact.php');
  $_SESSION['validated'] = 'bad';
  exit;
}
// Got here, means everything validated, and the comment will post.
$_SESSION['messages'][] = "Thanks for posting!";
$_SESSION['validated'] = 'good';
unset($_SESSION['presets']);
require_once 'php/Dao.php';
$dao = new Dao();
$dao->saveComment($name, $comment);
header('Location: contact.php');
exit;
?>