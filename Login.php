<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Login Page</title>
		<link rel="stylesheet" href="rulesignup.css"/>
	</head>
	<body>
		<p id="heading"><em>Pharmaceutical Drug Dispatch System</em></p>
		<h1 id="signup">Login!</h1>
		<div id="box">
		<form action="Home.php" method="post">
		Hospital Code : <input type="text" name="hcodelogin"><br/>
		User Id : <input type="text" name="useridlogin"><br/>
		Password : <input type="password" name="passwordlogin"><br/><br/>
		<input type="submit">
		<input type="reset"><br/><br/>
		Not a member? 
		<button><a href="index.php">Sign Up</a></button>
		</form>
		</div>
	</body>
</html>
