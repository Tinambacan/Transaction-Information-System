<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'transaction_system');
if(isset($_POST['updatedata']))
{
	$id =$_POST['update_id'];
	$item =$_POST['itemname'];
	$quantity =$_POST['quantity'];
	$price =$_POST['price'];

	$query= "UPDATE inventory SET Item='$item', quantity='$quantity', price='$price' WHERE id='$id' ";
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