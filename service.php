

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/card.css">
</head>
<body>
  
  <div class="main">
    <div class="navbar">
        <div class="icon">
            <a href="logout.php"><button type="submit" name="Logout" class="btn">Logout</button></a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="service.php">SERVICE</a></li>
                <li><a href="design.php">DESIGN</a></li>
               
            </ul>
        </div>

        <div class="search">
            <input class="srch" type="search" name="" placeholder="Type To text">
            <a href="#"> <button class="btn">Search</button></a>
        </div>

    </div> 
    <div class="content">
        <div class="container">
            <center>
              <div class="card">
                <div class="front"><i class="fa-brands fa-html5"></i>
                  <h1>DOGS</h1>
                </div>
                <div class="back">
                  <div class="content">
                    <p>
                      The dog is only one thing on the earth that loves you more than 
                    He loves himself</p>
                    <a href="dog.php">Browse</a>
                  </div>
                </div>
              </div>
          
              <div class="card">
                <div class="front 2"><i class="fa-brands fa-css3"></i>
                  <h1>CATS</h1>
                </div>
                <div class="back">
                  <div class="content">
                    <p>
                        A cat will be your friend But<br>
                        Never will be your slave
                    </p>
                    <a href="cat.php">Browse</a>
                  </div>
                </div>
              </div>
          
              <div class="card">
                <div class="front 3"><i class="fa-brands fa-js"></i>
                  <h1>PET FOOD</h1>
                </div>
                <div class="back">
                  <div class="content">
                    <p>
                      Take Care of your Pets as Your child
                    </p>
                    <a href="petfood.php">Browse</a>
                  </div>
                </div>
              </div>
            </center>
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