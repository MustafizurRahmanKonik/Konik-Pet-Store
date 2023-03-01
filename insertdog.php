<?php
        $con= mysqli_connect('localhost', 'root',  '');
        if (!$con){
            echo 'Not connected to server ';
        }
        else{
            mysqli_select_db($con, 'store');
            if (!mysqli_select_db($con, 'store')){
                echo 'Database is not selected';
            }
            else{
               
/** @var type $_POST */
               $form_id= filter_input(INPUT_POST, 'id');
                $form_name= filter_input(INPUT_POST, 'name');
                $form_price= filter_input(INPUT_POST, 'price');
                $form_food= filter_input(INPUT_POST, 'food');
                if ($form_id != null && $form_name!=null && $form_price!=null && $form_food!=null) {
                $sql="insert into dog(d_id, d_name, d_price, d_food)
VALUES('$form_id','$form_name','$form_price','$form_food')";
                if(!mysqli_query($con, $sql)){
                    echo 'Not inserted/saved';
                }
                else{
                    echo 'Inserted/saved succuesfully';
                }
                }
            }
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/card.css">
    <script type="text/javascript">
        function ivalidation(){
           var dname= document.forms["insertform"]["name"].value;
           var did = document.forms["insertform"]["id"].value;
           var dfood = document.forms["insertform"]["food"].value;
         
           var dprice = document.forms["insertform"]["price"].value;
           
           var insert = document.forms["insertform"]["insert"].value;
         
            if(did == '' ){
                alert("Please Enter id");
                return false;
            }
            if(dname == '' ){
                alert("Please Enter name");
                return false;
            }
            if(dprice == '' ){
                alert("Please Enter price");
                return false;
            }
            if(dfood == '' ){
                alert("Please Enter food");
                return false;
            }
        }
            </script>
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
                <li><a href="contact.php">CONTACT</a></li>
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
                <div class="formup">
                <form action="" method="post" style="height:50px;width:50px;" id="insertform">
    <table style="background-color: black; height: 200px; width: 200px">
        <tr>
            <td><h2>ID</h2></td>
            <td><input type="text" name="id" id="id" value="" style="background-color: black" /></td> 
        </tr>
        <tr>
            <td><h2>Name</h2></td>
            <td><input type="text" name="name" id="name" style="background-color: black" /></td>
        </tr>
        <tr>
            <td><h2>Price</h2></td>
            <td><input type="text" name="price" id="price" style="background-color: black" /></td>
        </tr>
        <tr>
            <td><h2>Food</h2></td>
            <td><input type="text" name="food" id="food" style="background-color: black" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" id="insert" onclick="ivalidation()" value="insert" style="background-color: black" /><br/></td>
    </tr>
    </table>
</form>
                </div>
            </center>
            <div></div><div>
                  <div>
                      <button class="btn"><a href="insertcat.php">Go for cat? Click Here</a></button>
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