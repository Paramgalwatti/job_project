<?php
session_start();
include("connection.php");
$id =$_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pass = md5($_POST["pass"]);
$check = "SELECT * FROM `jobprofile` where  firstname = '$fname'";
$result = mysqli_query($conn,$check );

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

    $_SESSION["useremail"]=$Useremail;
    $_SESSION["id"]=$id;
  
echo '<script>alert("Username is already exist!")</script>';  


header('Location:register.php?error=userexist');
 
}
}
else{
$insert = "INSERT INTO jobprofile(firstname,lastname,email,password) value('$fname','$lname','$email','$pass')";
if(mysqli_multi_query($conn,$insert))
{
    header("Location:login.php");
}
else
{
    echo "Error".$insert."<br>". mysqli_error($conn);
}
}








?>
