<?php
$servername = "localhost";
$username = "root";
$password =  "";
$dbname = "regform";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection is feild: ".mysqli_connect_error());

}
else{
     echo "connected";
}






?>