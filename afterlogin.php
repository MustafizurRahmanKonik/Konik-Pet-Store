<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="CSS/style2.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/product.css">
    <link rel="stylesheet" href="CSS/pagination.css">
    <style> 
input[type=submit], input[type=submit], input[type=reset] {
  background-color: #fcd5ce;
  border: none;
  color: white;
  padding: 25px 75px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
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
  <body>
    <div id="wrap">
    <div id="columns" class="columns_3">
    <figure>
    <img src="Photos/d1.jpg">
    <figcaption>DOG-1</figcaption>
      <span class="price">৳4400</span>
      <form action="search/search.php" method="POST">
      <input type="hidden" id="d01" name="d01" value="d01">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
    <figure>
    <img src="Photos/c1.jpg">
    <figcaption>DOG-1</figcaption>
      <span class="price">৳4400</span>
      <form action="csearch/search1.php" method="POST">
      <input type="hidden" id="c01" name="c01" value="c01">
      <a class="button" href=""><input type="submit" id="buy1" value="Buy" class="button" /></a>
      </form>
    </figure>
    
   <figure>
    <img src="Photos/c2.jpg">
    <figcaption>Green and Black Flowers</figcaption>
      <span class="price">$44</span>
      <form action="csearch/search2.php" method="POST">
      <input type="hidden" id="c02" name="c02" value="c02">
      <a class="button" href=""><input type="submit" id="buy1" value="Buy" class="button" /></a>
      </form>
    </figure>
    
    <figure>
    <img src="Photos/d4.jpg">
    <figcaption>Red Flowy</figcaption>
      <span class="price">$44</span>
      <form action="search/search4.php" method="POST">
      <input type="hidden" id="d04" name="d04" value="d04">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
    <figure>
    <img src="Photos/c3.jpg">
    <figcaption>Black Dots</figcaption>
      <span class="price">$44</span>
      <form action="csearch/search3.php" method="POST">
      <input type="hidden" id="c03" name="c03" value="c03">
      <a class="button" href=""><input type="submit" id="buy1" value="Buy" class="button" /></a>
      </form>
    </figure>
    
     <figure>
     <img src="Photos/d6.jpg">
    <figcaption>Put a Bird On It</figcaption>
       <span class="price">$44</span>
       <form action="search/search6.php" method="POST">
      <input type="hidden" id="d06" name="d06" value="d06">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
    
    <figure>
    <img src="Photos/c4.jpg">
    <figcaption>Red Flowy</figcaption>
      <span class="price">$44</span>
      <form action="csearch/search4.php" method="POST">
      <input type="hidden" id="c04" name="c04" value="c04">
      <a class="button" href=""><input type="submit" id="buy1" value="Buy" class="button" /></a>
      </form>
    </figure>
        
     <figure>
    <img src="Photos/d8.jpg">
    <figcaption>Blue Spots</figcaption>
       <span class="price">$44</span>
       <form action="search/search8.php" method="POST">
      <input type="hidden" id="d08" name="d08" value="d08">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
     <figure>
     <img src="Photos/c6.jpg">
    <figcaption>Put a Bird On It</figcaption>
       <span class="price">$44</span>
       <form action="csearch/search6.php" method="POST">
      <input type="hidden" id="c06" name="c06" value="c06">
      <a class="button" href=""><input type="submit" id="buy1" value="Buy" class="button" /></a>
      </form>
    </figure>	  
  </div>

</div>
          <div class="cont">
             <div class="page">
                 <button class="btn1" onclick="backBtn()"> <img src="448-arrow.png"> prev</button>
            <ul  class="ing">
                <li class="link active" value="1" onclick="activeLink()">1</li>
                <a href="secondpage.php"><li class="link " value="2" onclick="activeLink()">2</li></a>
            </ul>
                 <a href="secondpage.php"><button class="btn2"  onclick="nextBtn()">next <img src="448-arrow.png"></button></a> 
        </div> 
        </div>    
      
      <script>
      
      let link = document.getElementsByClassName("link");
      let currentValue=1;
      function activeLink(){
          for(l of link){
              l.classList.remove("active");
          }
          event.target.classList.add("active");
          currentValue = event.target.value;
          }
          
          function backBtn(){
              if(currentValue > 1){
                  for(l of link){
                      l.classList.remove("active");
                  }
                  
                  currentValue --;
                  link[currentValue-1].classList.add("active");
              }
          }
  function nextBtn(){
              if(currentValue < 3){
                  for(l of link){
                      l.classList.remove("active");
                  }
                  
                  currentValue ++;
                  link[currentValue-1].classList.add("active");
              }
          }
 
      
      </script>
    
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