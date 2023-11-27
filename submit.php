<?php 
$fname = $_POST["name"];
$lname = $_POST["last"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$connection= mysqli_connect("localhost","root","","form");
$sql= "INSERT INTO form (f_name,l_name,email,pass) VALUES
 ('$fname','$lname','$email','$pass')";
$result= mysqli_query($connection,$sql); 
if ($result){ 
    echo "successful";}
     else {
        echo "there is an error";
}
echo "<br>";
?>