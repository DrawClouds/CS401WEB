<?php
    session_start();
?>

<!DOCTYPE html>

<body class="pageTemplate">
    <!-- BANNER -->
    <?php include 'banner.php'?>

    <!-- BODY -->
    <div class="buffer"></div>
    <div class="container">
     

        <div class="form-wrap">
            <div class="tabs">
                <h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
                <h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
            </div>
    
            <div class="tabs-content">
                <div id="signup-tab-content" class="active">
                    <form class="signup-form" action="php/action_page.php" method="POST">
                        <input type="text" class="input" id="first_name" name="first_name" placeholder="First Name">
                        <input type="text" class="input" id="last_name" name="last_name" placeholder="Last Name">
                        <input type="email" class="input" id="user_email" name="email" placeholder="Email">
                        <input type="password" class="input" id="user_pass" name="pass" placeholder="Password">
                        <input type="submit" class="button" value="Submit">
                    </form>
                </div>
    
                <div id="login-tab-content">
                    <form class="login-form" action="php/login_handler.php" method="POST">
                        <input type="text" class="input" id="user_login" name="email1" autocomplete="off" placeholder="Email">
                        <input type="password" class="input" id="user_pass1" name= "pass1" autocomplete="off" placeholder="Password">
                        
                        <input type="submit" class="button" value="Login">
                    </form>
                </div>
            </div>
        </div>
    <?php
       
    ?>
    </div>

     <!-- Footer -->
     <footer class="foot">
    <?php include 'footer.php'?>
    </footer>
</body>


</html>