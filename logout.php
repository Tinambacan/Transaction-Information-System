<?php
 session_start();
 unset($_SESSION['loggedIN']);
 session_destroy();
 header('Location: Transaction Login.php');
 exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>