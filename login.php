<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RealTime Chat Application</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
<div class="wrapper">
	<section class="form login">
		<header>Realtime Chat App</header>
		<form action="#">
			<div class="error-txt">This is an error message!</div>
				<div class="field input">
					<label>Email Address</label>
					<input type="email" name="email" placeholder="Enter your Email">
				</div>
				<div class="field input">
					<label>Password</label>
					<input type="password" name="password" placeholder="Enter new Password">
					<i class='fas fa-eye-slash'></i>
				</div>
				<div class="field button">
					<input type="submit" value="Continue to Chat">
				</div>
			
		</form>
		<div class="link">Not yet signed up ? <a href="index.php">SignUp</a></div>
	</section>
</div>
<script src="js/pass-show-hide.js"></script>
<script src="js/login.js"></script>
</body>
</html>