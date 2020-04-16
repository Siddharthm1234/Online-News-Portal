<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<h2>Editor</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="includes/signup.inc.php" method="post">
			<h1>Create Account</h1>
			
			<input type="text" placeholder="Username" name="Uid" />
			<input type="text" name="mail" placeholder="Email">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwd-repeat" placeholder="Repeat Password">
			<button id="btn-signup" type="submit" name="signup-submit">Sign In</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
			<form action="includes/login.inc.php" method="post">
			<h1>Log in</h1>

			<input type="text" name="User" placeholder="UserName">
			<input type="password" name="Pass" placeholder="Password">
			<button type="submit" name="login-submit">Login</button>
			
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>

</footer><script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

</body>
</html>