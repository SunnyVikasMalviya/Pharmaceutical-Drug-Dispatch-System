<?php
				$conn=mysqli_connect("localhost","root","","hospitals");
				$q="Select * from `hospital_list` ";
				$result=mysqli_query($conn,$q);
				$num=mysqli_num_rows($result);
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Hospital List	</title>
		<link rel="stylesheet" href="ruletable.css"/>
	</head>
	<body>
		<p id="heading"><em>Pharmaceutical Drug Dispatch System</em></p>
		<div id="logout">
		<button><a href="Login.php">Logout</a></button>
		</div><br/>
		<h1 style="text-align:center;"> Hospital List </h1>
		<table align="center" id="view_table">
		<table width="600" border='1' cellspacing="1">
		<tr>
		<th>Hospital</th>
		<th>Hospital Code</th>
		<th>Web Domain</th>
		<th>Governing Body</th>
		</tr>
	<?php
	while($row=mysqli_fetch_assoc($result))
	{ 
	   echo "<tr>";
	   echo "<td>".$row['Hospital Name']."</td>";
	   echo "<td>".$row['Hospital_Code']."</td>";
	   echo "<td>".$row['Web_Domain']."</td>";
	   echo "<td>".$row['Governing_Body']."</td>";
	   echo "</tr>";	}
	?>		
	</body>
</html>  