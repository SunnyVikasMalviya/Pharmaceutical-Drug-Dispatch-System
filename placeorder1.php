<?php
	$mname=$_REQUEST["mname"];
	if(isset($_REQUEST['submit']))
	{
		$conn=mysqli_connect("localhost","root","","hospitals");
		if(!$conn)
		die("Connection failed: ".mysqli_connect_error());
		$q="Select * from `medicine_list` WHERE `Medicine`='$mname' ";
		$result=mysqli_query($conn,$q);
		$num=mysqli_num_rows($result);
		mysqli_close($conn);
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>	Place Order</title>
		<link rel="stylesheet" href="rulesignup.css"/>
	</head>
	<body>
		<p id="heading"><em>Pharmaceutical Drug Dispatch System</em></p>
		<div id="logout">
		<button><a href="Login.php">Logout</a></button>
		</div><br/>
		<h1 style="text-align:center;"> View Medicine List </h1>
		<table align="center" id="view_table">
		<tr>
		<th>Medicine</th>
		<th>Manufacturer</th>
		<th>Date of Manufature</th>
		<th>Date of Expiry</th>
		<th>Batch Number</th>
		<th>Price</th>
		<th>Form</th>
		<th>Power</th>		
		<th>Purchase</th>
		</tr>
		<?php
		for($i=1;$i<=$num;$i++)
		{ 
		   $row=mysqli_fetch_array($result);
		   ?>
		   <tr>
		   <td><?php echo $row['Medicine'];?></td>
		   <td><?php echo $row['Manufacturer'];?></td>
		   <td><?php echo $row['Date Of Manufacture'];?></td>
		   <td><?php echo $row['Date Of Expiry'];?></td>
		   <td><?php echo $row['Batch Number'];?></td>
		   <td><?php echo $row['Price'];?></td>
		   <td><?php echo $row['Form'];?></td>
		   <td><?php echo $row['Power'];?></td>
		   <td><button><a>Place Order</a></button></td>		   
		   </tr>
		   <?php
		}
		?>
		<br/>
		<button><a href="Login.php">Login</a></button><br/> 		
		<button><a href="index.php">SignUp</a></button> 
	</body>
</html>  