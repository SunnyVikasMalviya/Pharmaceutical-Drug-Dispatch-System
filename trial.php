<?php
			$hcode=$_REQUEST["hcodelogin"];
			$userid=$_REQUEST["useridlogin"];
			$password=$_REQUEST["passwordlogin"];
			if(isset($_REQUEST['submit']))
			{
				$conn=mysqli_connect("localhost","root","","hospitals");
				if(!$conn)
				die("Connection failed: ".mysqli_connect_error());
				$sql = "SELECT `User ID` FROM `hospital_list` WHERE `Hospital Code`='$hcode' and `User ID` = '$user' and `Password` = '$password'";
				$result = mysqli_query(`hospitals`,$sql);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$active = $row['active'];
				$count = mysqli_num_rows($result);         // If result matched $myusername and $mypassword, table row must be 1 row
				if($count == 1)
				{
					session_register("myusername");
					$_SESSION['login_user'] = $myusername;
					header("location: welcome.php");
				}	
				else
				{
					$error = "Your Login Name or Password is invalid";
				}
			}
				mysqli_close($conn);
			}			
?>