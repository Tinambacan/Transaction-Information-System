<?php
 session_start();
 unset($_SESSION['loggedIN']);
 session_destroy();
 header('Location: Transaction Login.php');
 exit();
?>
