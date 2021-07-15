<?php
session_start();
if(!isset($_SESSION['email'])){
header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <div class="container">
    <h2 class="text-center text-success"> Welcome <?php echo$_SESSION['email']; ?> </h2>
    <img class="img-profile rounded-circle"  src="images/profile.png/ <?php echo $_SESSION['username']; ?>"/>
    <a href="logout.php"> Logout </a>
    </div>
</body>
</html>







