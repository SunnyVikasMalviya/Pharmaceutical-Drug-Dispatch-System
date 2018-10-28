<?php
				$conn=mysqli_connect("localhost","root","","hospitals");
				if(!$conn)
				die("Connection failed: ".mysqli_connect_error());
				$q="Select * from `hospital_list` ";
				$result=mysqli_query($conn,$q);
				$num=mysqli_num_rows($result);
				mysqli_close($conn);
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Hospital List	</title>
		<link rel="stylesheet" href="ruletable.css"/>
	</head>
	<body>
		<p id="heading"><em>Pharmaceutical Drug Dispatch System</em></p>
		<div id="logout">
		<button><a href="Login.php">Logout</a></button>
		</div><br/>
		<h1 style="text-align:center;"> View Hospital List </h1>
		<table align="center" id="view_table">
		<tr>
		<th>Hospital Name</th>
		<th>Web Domain</th>
		<th>Hospital Code</th>
		<th>Governing Body</th>
		</tr>
	<?php
	for($i=1;$i<=$num;$i++)
	{ 
	   $row=mysqli_fetch_array($result);
	   ?>
	   <tr>
	   <td><?php echo $row['Hospital Name'];?></td>
	   <td><?php echo $row['Web_Domain'];?></td>
	   <td><?php echo $row['Hospital_Code'];?></td>
	   <td><?php echo $row['Governing_Body'];?></td>
	   </tr>
	   <?php
	}
	?>		
	</body>
</html>  