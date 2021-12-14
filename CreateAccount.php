<html>
<head>
	<title>Create Account</title>
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
	<form method="post" action = "phpCreateAccount.php">

		<label>Username</label> <input type ="text" name="username"><br>
		<label>Email:</label> <input type ="text" name="email"> <br>
		<label>Password:</label> <input type ="password" name="password"><br> 
		<label>Log in As:</label><select name="type"><br>
			<option value="staff">Staff</option><br>
		    <option value="owner">Owner</option><br>
			</select>
		<br>
	    <label>Name:</label> <input type ="text" name="name"> <br>
	    <label>Age:</label> <input type ="number" name="age"> <br> 
	    <label>Gender:</label> <input type ="text" name="gender"> <br>  
	    <label>Address:</label> <input type ="text" name="address"> <br> 
	    <label>Birthday:</label> <input type ="date" name="birthday" ><br>
	    <label>ContactNumber:</label> <input type ="number" name="contact" ><br>
	    <button type ="submit" name ="submit">Submit</button>
	</form>		
	
	
    </tr></td>
 </table>
</body>
</html>

