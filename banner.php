
<!DOCTYPE html>
<html lang="en">

<head>
     <link rel="shortcut icon" href="https://www.favicon.cc/logo3d/683049.png" type="image/png">
     <link rel="stylesheet" href="style.css">
     <title>1UP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript" src="jquery.js"></script>
 </head>

<html>
<body>
 <div >
        <ul id="banner">
            <li id="bannerItem">
                <a id="bannerItemText" href="index.php">Home</a>
            </li>
            <li id="bannerItem">
                <a id="bannerItemText" href="services.php">Services</a>
            </li>
           
            <li id="bannerItem">
                <a id="bannerItemText" href="about-us.php">About Us</a>
            </li>
            <li id="bannerItem">
                <a id="bannerItemText" href="contact.php">Comment</a>
            </li>
            <li id="loginItem">
                <?php
               


                if(($_SESSION['logged']==true)){


                    echo "<a id='bannerItemText'>" . $_SESSION['login_user'] . "</a>";
                    echo "</li>";
                    echo "<li id='loginItem'>";
                    echo "<a id='bannerItemText' href='logout.php'>logout</a>";
                    echo "</li>";
                    
                }
                else {
                 echo   "<li id='loginItem'>
                    <a id='bannerItemText' href='login.php'>Log In</a>
                </li>
                <li id='loginItem'>
                    <a id='bannerItemText' href='login.php'>Sign Up</a>
                </li>";
                }
            ?>
            </li>
        </ul>
    </div>
    <div id="mainBannerPic"</div>
    </body>
    </html>
