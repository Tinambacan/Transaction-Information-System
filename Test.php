</!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table border= 0 padding="5" align="center">
		<tr><td>
			<h1>Arithmetic</h1>
			<form action="" method="post">
				Number 1: 
				<input type="number" name="num1"><br>
				Select Operator:<select name="operation">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>

				</select>
				<br>
				Number 2:
				<input type="number" name="num2"><br>
				<input type="Submit" value="Calculate" name="Calculate"><br>

			</form>


			<?php
				if(isset($_POST["Calculate"]))
				{
				   numbers($_POST["num1"],$_POST["num2"]);
				   echo "<br>";
				   echo "<br>";
				   echo "<br>";
				   echo "Loop Statement <br>";
				   for($ctr = 1 ;$ctr<=10;$ctr++)
				   {
				   	if ($ctr<10)
				   		echo $ctr. ",  ";
				   	else 
				   		echo $ctr. "   ";
				   }
 					
				}
				else
					echo "Please input again the numbers:";

				function numbers($n1,$n2)
				{ 
					if($_POST["operation"] == "-")
					{
						echo "The difference of two number is ";  
						echo $n1 - $n2;
					}
				    else if($_POST["operation"] == "+")
					{
						echo "The sum of two number is ";  
						echo $n1 + $n2;
					}
					else if($_POST["operation"] == "*")
					{
						echo "The product of two number is ";  
						echo $n1 * $n2;
					}
					else
					{
					 	echo "The Quotient of two numbers is ";
					 	echo $n1 / $n2;
					}
					
				}
       		    

	  		?>
	  	</tr></td>
	</table>
</body>
</html>
