<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'transaction_system'); 

if(isset($_POST['deletedata']))
{
	 $id = $_POST['delete_id'];
	$query ="DELETE FROM inventory WHERE id ='$id'";
	

	 $query_run= mysqli_query($connection,$query);
	 if($query_run)
	 {
	 	$_SESSION['status'] = "Data Deleted Successfully";
		header('Location:index.php');
	 }
	else
	{
		echo '<script>alert("data not Deleted");</script>';
	}
}
?>