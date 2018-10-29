<?php
				$conn=mysqli_connect("localhost","root","","hospitals");
				$q="Select * from `medicine_list` ";
				$result=mysqli_query($conn,$q);
				$num=mysqli_num_rows($result);
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Medicine List	</title>
		<link rel="stylesheet" href="ruletable.css"/>
	</head>
	<body>
		<p id="heading"><em>Pharmaceutical Drug Dispatch System</em></p>
		<div id="logout">
		<button><a href="Login.php">Logout</a></button>
		</div><br/>
		<h1 style="text-align:center;"> Medicine List </h1>
		<table align="center" id="view_table">
		<table width="600" border='1' cellspacing="1">
		<tr>
		<th>Medicine</th>
		<th>Manufacturer</th>
		<th>Date of Manufature</th>
		<th>Date of Expiry</th>
		<th>Batch Number</th>
		<th>Price</th>
		<th>Form</th>
		<th>Power</th>		
		</tr>
	<?php
	while($row=mysqli_fetch_assoc($result))
	{ 
	   echo "<tr>";
	   echo "<td>".$row['Medicine']."</td>";
	   echo "<td>".$row['Manufacturer']."</td>";
	   echo "<td>".$row['Date Of Manufacture']."</td>";
	   echo "<td>".$row['Date Of Expiry']."</td>";
	   echo "<td>".$row['Batch Number']."</td>";
	   echo "<td>".$row['Price']."</td>";
	   echo "<td>".$row['Form']."</td>";
	   echo "<td>".$row['Power']."</td>";
	   echo "</tr>";	}
	?>		
	</body>
</html>  