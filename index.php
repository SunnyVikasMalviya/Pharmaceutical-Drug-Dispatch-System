<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>SignUp Page	</title>
		<link rel="stylesheet" href="rulesignup.css"/>
	</head>
	<body>
		<p id="heading"><em>Pharmaceutical Drug Dispatch System</em></p>
		<h1 id="signup">Sign Up!</h1>
		<div id="box">
			<form action="http://localhost/PHP/mini%20project/successfullsignup1.php" method="post">
			Hospital Name : <input required type="text" name="hname"><br/>
			Web Domain : <input type="text" name="webdomain"><br/>
			Hospital Code :<input required type="text" name="hcode"><br/>
			User Id : <input required type="text" name="userid"><br/>
			<button>Add User</button><br/>
			Password : <input required type="password" name="password"><br/>
			Confirm Password : <input required type="password" name="cpassword"><br/>
			Governing Body : <br/>
			<input type="radio" value="gov" name="gov1">Government<br/>
			<input type="radio" value="pri" name="gov1">Private<br/><br/>
			<input type="submit" name="submit" id="submit">
			<input type="reset"><br/><br/>
			Already a member?		
			<button><a href="Login.php">Login</a></button> 
			</form>
		</div>		
	</body>
	</html>