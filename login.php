<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_form";
$conn= mysqli_connect($servername, $username, $password, $database);  

$username = $_POST['username'];
$password = $_POST['password']; 

$sql = "select * from users where username = '$username' and password = '$password'";

$myresult = mysqli_query($conn, $sql);

if($conn == true){
  echo "Connection successful";}
  else{
    echo "No connection". mysqli_error($conn);
    
  }
?>