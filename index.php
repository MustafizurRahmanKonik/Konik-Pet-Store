<?php

//$host="localhost";
//$user="root";
//$password = "";
//$database = "store";
 $con= mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "store");
 
 if(isset($_POST['login'])){
     $uemail=$_POST['email'];
     $upassword=$_POST['password'];
     
     $sql= mysqli_query($con, "select * from customer where c_email='$uemail' AND c_password='$upassword'");
     
     $rows= mysqli_num_rows($sql);
     if ($rows == 1){
         header("location: afterlogin.php");
     }
     else{
         echo 'Invalid';
     }
     mysqli_close($con);
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">KPS</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="login.html">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
               
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="search" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Konik <br><span>Pet</span> <br>Store</h1>
            <p class="par">Konik Web Developer</p>

                <button class="cn"><a href="signup.html">JOIN US</a></button>

                <div class="form">
                    <form action="index.php" method="POST">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email">
                    <input type="password" name="password" placeholder="Enter Password">
                    <button class="btnn" name="login">Login</a></button>
                    </form>

                    <p class="link">Don't have an account?<br>
                    <a href="signup.html">Signup here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
 <footer class="footer-distributed">

    <div class="footer-left">

        <h3>Konik<span>Pet</span>Store</h3>

        <p class="footer-links">
            <a href="login.html" class="link-1">Home</a>
        
            <a href="service.php">Pricing</a>
        
            <a href="about.php">About</a>
            
            <a href="faq.php">Faq</a>
            
            <a href="contact.php">Contact</a>
        </p>

        <p class="footer-company-name">Konik Pet Store © 2023</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Daffodil International University</span> Ashulia, Savar</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+8801799063771</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mdkonik73@gmail.com">support@store.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span>
             Our site is based on<br> pet based store, it is a simple project based on HTML 
             CSS PHP and JS</p>
        </p>

        <div class="footer-icons">
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="#"><ion-icon name="logo-google"></ion-icon></a>
            <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
        </div>

    </div>

</footer>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>