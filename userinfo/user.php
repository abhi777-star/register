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

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

$q="select * from signin where firstname= '$firstname' && lastname= '$lastname' && email= '$email' && password= '$password' ";

$result =mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
    echo"duplicate data";
}else{
    $qy="insert into signin(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";
    mysqli_query($con,$qy);
}

header("location:login.php");


?>