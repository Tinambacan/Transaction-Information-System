<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'transaction_system');
if(isset($_POST['insertdata']))
{
	$itemname = $_POST['itemname'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$query = "INSERT INTO inventory (`item`,`quantity`,`price`) VALUES ('$itemname','$quantity','$price')";
	$query_run = mysqli_query($connection,$query);	
	
	if($query_run)
	{
		echo '<script>alert("data Saved");</script>';
		header('Location:index.php');
	}
	else
	{
		echo '<script>alert("data not Saved");</script>';
	}
}

?>
