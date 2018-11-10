<?php
    session_start();    
?>

<!DOCTYPE html>

<body class="pageTemplate">
    
    <!-- BANNER -->
    <?php include 'banner.php'?>
    <!-- Body -->
    <div class="container">
        
        <?php
      
        echo $_SESSION['message'];?>
    </div>

    <!-- Footer -->
     <!-- Footer -->
     <footer class="foot">
    <?php include 'footer.php'?>
    </footer>
</body>


</html>