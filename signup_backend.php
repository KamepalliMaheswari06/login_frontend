<?php
$username=$_POST['username'];
$password=$_POST['password'];
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"socialmedia");
$query="INSERT INTO `log_in`(`userid`,`password`) VALUES('$username','$password')";
$result=mysqli_query($connect,$query);
if($result)
{
    header('location:login_frontend.php');
}
?>