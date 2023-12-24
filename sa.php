<?php
$yourname=$REQUEST['username'];
$youremail=$REQUEST['email'];
$yournumber=$REQUEST['number'];

if(isset($_POST['submit']))
{
$host="localhost";
$user="root";
$password="";
$db="salma";

$conn=mysqli_connect($host,$user,$password,$db);

$insert="insert into loky values('$username','$email','$number')";

$mysqli_query($conn,$insert);.

if($conn){
 echo("<h1 style color:green;>Your Registration is done!</h1>");
}
else{
 echo("<h1 style color:red;>Your Registration is failed!</h1>");
}




}






?>