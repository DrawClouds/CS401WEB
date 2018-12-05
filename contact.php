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
    <div class="pagesize">

    
    <div class="text-center">
        <div id="mainBannerPicText">
            <h2 class="title1">CONTACT US</h2>
        </div>
    </div>



    <div id="contact">
<div class ="formback">
    <h1 class="contactus">Submit form below to inquire about services or prices</h1>

                    <form class="contactform" method="POST">
                        <input type="text" class="input" id="subject" name="email1" autocomplete="off" placeholder="Subject">
                        <br>
                      
                        <textarea name="comment" form="usrform">Enter text here...</textarea>
                      
 </div>                     
                        <input type="submit" class="submit" value="Submit">
                    </form>
    </div>



    <div>
<!-- Footer -->
   
    <footer class="foot">
            <?php include 'footer.php'?>
    </footer>

  </div>  
 
  
</div>
</body>


</html>