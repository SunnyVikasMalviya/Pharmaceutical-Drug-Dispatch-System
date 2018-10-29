<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Successfull SignUp Page	</title>
		<link rel="stylesheet" href="rulesignup.css"/>
	</head>
	<body>
		<p id="heading"><em>Pharmaceutical Drug Dispatch System</em></p>
		<?php
			$hname=$_REQUEST["hname"];
			$webdomain=$_REQUEST["webdomain"];
			$hcode=$_REQUEST["hcode"];
			$userid=$_REQUEST["userid"];
			$password=$_REQUEST["password"];
			$cpassword=$_REQUEST["cpassword"];
			$body=$_REQUEST["gov1"];
			if(!preg_match("/^[a-zA-Z]*$/",$hname))
			{
				echo "Only letters and spaces are allowed.Click on sign up button ";
			}
			else if($password!=$cpassword)
			{
				echo "Password and Confirm Password do not match.Click on sign up button";
			}
			else
			{
				if(isset($_REQUEST['submit']))
				{
					$conn=mysqli_connect("localhost","root","","hospitals");
					if(!$conn)
					die("Connection failed: ".mysqli_connect_error());
					$sql="INSERT INTO `hospitals`.`hospital_list`(`Hospital Name`,`Web_Domain`,`Hospital_Code`,`User_Id`,`Password`,`Governing_Body`) VALUES ('$hname','$webdomain','$hcode','$userid','$password','$body')";
					if(mysqli_query($conn,$sql))
					mysqli_close($conn);
	
				}
			}
		?>
		<br/>
		<button><a href="Login.php">Login</a></button><br/> 		
		<button><a href="index.php">SignUp</a></button> 		
	</body>
	</html>  