<?php
    session_start();    
?>

<!DOCTYPE html>

<body class="pageTemplate">
    
    <!-- BANNER -->
    <?php include 'banner.php'?>
    <!-- Body -->
    <div>
    <div class="message">
        
        <?php
      
        echo $_SESSION['message'];?>
    </div>
</div>

    <!-- Footer -->
     <!-- Footer -->
     
</body>
<footer class="foot">
    <?php include 'footer.php'?>
    </footer>

</html>