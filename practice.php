</!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<table border = 0 padding = "5" align="center">
<tr><td>  	
  <form action="" method="get">
	Variable num1:<br>
	<input type="number" name ="var_a"><br>
	Variable num2:<br>
	<input type="number" name ="var_b"><br>
	<input type="submit" name ="Enter">
  </form> 
	<br>
	<?php
	   if (isset($_Get["var_a"])||($_GET["var_b"]))
	   {	 
		   echo $_GET["var_a"]+$_GET["var_b"];
		   echo "<br>";
		   echo $_GET["var_a"]-$_GET["var_b"];
		   echo "<br>";
		   echo $_GET["var_a"]*$_GET["var_b"];
		   echo "<br>";
		   echo $_GET["var_a"]/$_GET["var_b"];
		   echo "<br>";
		   echo $_GET["var_a"]%$_GET["var_b"];
		
		   echo "<br>";
		   echo "<br>";
			if ($_GET["var_a"] >$_GET["var_b"])
				echo "Variable num1 is largest ";
			else 
				echo "Variable num2 is largest ";
	       echo "<br>";
	       echo "<br>";
		/*	if($GET["var_a"]%2==0)
				echo "Variable is even";
			else
				echo "Variable is odd";*/
			$sum=0;
			for($ctr=10;$ctr>0;$ctr--)
			{
	           echo $ctr. "<br>";
	           $sum += $ctr;  
			}
			echo "The sum of loop is: ".$sum;
			echo "<br>";
			echo "<br>";

			function numbers($num1,$num2)
			{
	 			echo $num1 + $num2;

			}
			numbers($_GET["var_a"],$_GET["var_b"]);
			echo "<br>";
			numbers(44,31);

		}
		else 
			echo "Please enter the value";
	?>
</tr>
</td>
</table>

</body>
</html>
