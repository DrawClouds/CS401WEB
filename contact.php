<?php
    session_start();

    require_once 'php/Dao.php';
     
$dao = new Dao();
$comments = $dao->getComments();
?><!DOCTYPE html>
<html lang="en">

<body class="pageTemplate">
    <!-- BANNER -->
    <?php include 'banner.php'?>

    <!-- BODY -->



    <div class="text-center">
        <div id="mainBannerPicText">
            <h1 class="title1">LEAVE A COMMENT ABOUT THE NEW MUFFINS RECIPE</h1>
        </div>
    </div>


<div>
  <div class= "commentspage">
      <div class= "leftbuffer"></div>
    <img class=pokey src="https://external-preview.redd.it/7vqQx6MAyvfflICLsZZRGigGO49HNp9eBpW4_ayNHJQ.jpg?auto=webp&s=6f8f66c531b79877239104df7f7737c020cb1e25" alt="muffins">
    
    <div class= "commentsContainer">
    <h2 id="subtitle">Leave a Comment</h2>
<?php if (isset($_SESSION['messages'])) {
  foreach ($_SESSION['messages'] as $message) {?>
      <div class="message <?php echo isset($_SESSION['validated']) ? $_SESSION['validated'] : '';?>"><?php
      echo $message; ?></div>
<?php  }
 unset($_SESSION['messages']);
?> </div>
<?php } ?>

    <form method="post" action="handler.php" enctype="multipart/form-data">
			Name:<br>
      <input type="text" name="name" value="<?php echo isset($_SESSION['presets']['name']) ? $_SESSION['presets']['name'] : ''; ?>"><br>
			Comment:<br>
			<input  maxlength="250" rows="5" type="textarea"  size="35" name="comment" value="<?php echo isset($_SESSION['presets']['comment']) ? $_SESSION['presets']['comment'] : ''; ?>">
      
      <input type="submit" value="Submit">
    </form>
    


    <table class = commenttable>
<?php
    foreach ($comments as $comment) {
      echo "</td><td>" . htmlentities($comment['name']) . "</td><td>{$comment['comment']}</td><td><a href='delete.php?id={$comment['id']}'/>X</a></td></tr>";
    }
?>

</div>
    </table></div><div class= "rightbuffer"></div>
<!-- Footer -->
    <footer class="foot">
            <?php include 'footer.php'?>
            </footer>
  

  </div>  

    
</body>


</html>