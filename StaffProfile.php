<!DOCTYPE html>
<html>
<head>
	<title>Staff Profile</title>
	<style type="text/css">
		label{ 
			width: 100px;
			display: inline-block;
		}
	</style>
</head>
<body>
<table border = 0 padding = "5" align="center">
<tr><td>  
	<?php
	$server = "localhost";
	$user  ="root";
	$password ="";
	$dbname = "transaction_system";
	$conn = mysqli_connect($server,$user,$password,$dbname);
	$sql = "SELECT * FROM create_account";
	$result = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($result)){
		echo $row['name'] . "<br>";
	}
	?>
	<form method="post" action="StaffProfile.php">
		<a href="Select type.php">
             <input type ="button" value="back">
        </a>
	</form>
</tr></td>
</table>
</body>
</html>
