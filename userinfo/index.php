<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/logic.js"></script>
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>User Register Form</title>
</head>
<body>
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Registration Form
		</div>

		<form action="user.php" method="post">
        <div class="profile-images-card">
	<div class="profile-images">
		<img src="images/profile.png" id="upload-img">
	</div>
	<div class="custom-file">
		<label for="fileupload"> Upload Profile</label>
		<input type="file" id="fileupload">
	</div>
</div>


			<div class="form_wrap">
				<div class="input_grp">

					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" id="fname" required="required" class="input_wrap" name="firstname">
					</div>

					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" id="lname" required="required" class="input_wrap" name="lastname">
					</div>
				</div>

				<div class="input_wrap">
					<label for="email">Email Address</label>
					<input type="text" id="email"required="required" class="input_wrap"  name="email">
				</div>
		
				<div class="input_wrap">
					<label for="city">City</label>
					<input type="text" id="city" required="required" class="input_wrap" name="city">
				</div>

				<div class="input_wrap">
					<label for="country">Country</label>
					<input type="text" id="country" required="required" class="input_wrap" name="country">
				</div>

                <div class="input_wrap">
                <label for="psw">Password</label>
                <input type="password"  name="password" id="psw" required>
				</div>

				<div class="input_wrap">
					<input type="submit" value="Register Now" class="submit_btn" onclick="send();">
                    <div class="container login">
                    <p>Already have an account? <a href="login.php">Log in</a>.</p>
				</div>
			</div>
		</form>
	</div>
</div>
    


<script>

</script>
</body>
</html>