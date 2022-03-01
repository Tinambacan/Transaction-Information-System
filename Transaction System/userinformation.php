<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'transaction_system');

if(isset($_POST['insertdata']))
{
	$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$query = "INSERT INTO login (`email`,`password`) VALUES ('$email','$password')";
	$query_run = mysqli_query($connection,$query);
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$houseno = $_POST['houseno'];
	$street = $_POST['street'];
	$brgy = $_POST['brgy'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$birthday = $_POST['birthday'];
	$contact = $_POST['contact'];
	$query1 = "INSERT INTO user (`fname`,`mname`,`lname`,`houserno`,`street`,`brgy`,`city`,`province`,`birthday`,`contact`) VALUES ('$fname','$mname','$lname','$houseno','$street','$brgy','$city','$province','$birthday','$contact')";
	$query_run1 = mysqli_query($connection,$query1); 
	if($query_run && $query_run1)
	{
		echo '<script>alert("data Saved");</script>';
		header('Location:Transaction Login.php');
	}
	else
	{
		echo '<script>alert("data not Saved");</script>';
	}           	
}
?>