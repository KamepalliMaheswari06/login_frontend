<?php
$username=$_POST['username'];
$password=$_POST['password'];
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"socialmedia");
$query="SELECT * FROM `log_in` WHERE userid='$username' AND password='$password'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
    $row=mysqli_fetch_array($result);
    $_SESSION['id']=$row['user_id'];
    header('location:home.php');
}
else
{
    header('location:index.php?error=1');
}
?>