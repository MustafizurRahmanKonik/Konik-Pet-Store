    <?php
$host="localhost";
$user="root";
$password = "";
$database = "store";
$link= mysqli_connect("localhost", "root", "","store");
$con= mysqli_select_db($link, "store");

session_start();

if(session_destroy()){
    header("location: index.php");
}