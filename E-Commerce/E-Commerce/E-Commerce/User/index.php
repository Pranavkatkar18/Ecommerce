<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Now</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="Login/style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>Welcome User</h1>

				<span>
					<p>login with social media</p>
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
				</span>
			</div>
		</div>


		<div class="right">
			<h5>Login</h5>
			<p style ="font-weight:bold;"> Don't have an account? Register Now!!! <a href="/E-Commerce/User/Login/reg.php" style="text-decoration:none; font-weight:bold; font-size:large; cursor:pointer;">Creat Your Account</a></p>
			<form action = "/E-Commerce/User/Login/Sql/userlog.php" class="form" method="post">


				<div class="inputs">
					<input type="text" name="uname" placeholder="user name" required>
					<br>
					<input type="password" name="pass" placeholder="password" required>

					<br><br>
					<div class="remember-me--forget-password">
						<!-- Angular -->
						<label>
							<input type="checkbox" name="item" checked />
							<span class="text-checkbox">Remember me</span>
						</label>
						
					</div>

					<br>
					<button type="submit" name="ulog" value= "ulog" style="cursor:pointer;">Login</button>
				</div>






			</form>

		</div>

	</div>
	

</body>

</html>