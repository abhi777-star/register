<?php

session_start();

$con=mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}
else{
    "no Connection";
}

mysqli_select_db($con,'register');

$email=$_POST['email'];
$password=$_POST['password'];

$q="select * from signin where email= '$email' && password= '$password' ";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
     $_SESSION['email']=$email;
     header('location:home.php');
}else{
    header('location:login.php');
}




?>