<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RealTime Chat Application</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<div class="wrapper">
	<section class="form signup">
		<header>Realtime Chat App</header>
		<form action="#" enctype="multipart/form-data">
			<div class="error-txt">This is an error message!</div>
			<div class="name-details">
				<div class="field input">
					<label>First Name</label>
					<input type="text" name= "fname" placeholder="First Name"required>
				</div>
				<div class="field input">
					<label>Last Name</label>
					<input type="text" name="lname" placeholder="Last Name"required>
				</div>
				</div>
				<div class="field input">
					<label>Email Address</label>
					<input type="email" name="email" placeholder="Enter your Email" required>
				</div>
				<div class="field input">
					<label>Password</label>
					<input type="password" name="password" placeholder="Enter new Password" required>
					<i class='fas fa-eye-slash'></i>
				</div>
				<div class="field image">
					<label>Select image</label>
					<input type="file" name="image" required>
				</div>
				<div class="field button">
					<input type="submit" value="Continue to Chat">
				</div>
			
		</form>
		<div class="link">Already signed up ? <a href="login.php">Login</a></div>
	</section>
</div>
<script src="js/pass-show-hide.js"></script>
<script src="js/signup.js"></script>
</body>
</html>