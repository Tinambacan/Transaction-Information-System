<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
    <meta name ="viewport" content ="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Staff Information</title>
	<link rel="stylesheet" type="text/css" href="Breadcrumbs/newcss.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
	
</head>
<body>
<header>	
<div class="container">
	<div class="jumbotron">
			<div class="card">
				<div class="wrapper">
				    <div class="breadcrumbs">
				       <div class="home">
				         <a href="Breadcrumbs/Breadcrumbs.html"><i class="fas fa-home"></i></a>
				       </div>
				       <ul>
				         <li><a href="#">
				           <i class="fas fa-address-card"></i>
				           <p>About</p>
				           </a></li>
				         <li><a href="Inventory/index.php">
				           <i class="fas fa-warehouse"></i>
				           <p>Inventory</p>
				           </a></li>
				         <li class="active"><a href="DisplayStaff.php">
				           <i class="fas fa-user-friends"></i>
				           <p>Staff Info</p>
				           </a></li>
				  		 <li><a href="logout.php">
				           <i class="fas fa-sign-out-alt"></i>
				           <p>Logout</p>
				           </a></li>         
				      	</ul>  

					</div>
				</div>
			<div>
	</div>
	
    <div class="card">
    	<div class="card-body">
	    	<?php
		    	$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection, 'transaction_system');
				$query = "SELECT * FROM user";
				$query_run = mysqli_query($connection,$query);
			?>
    		<table id="datatableid" class="table table-info table-striped">
				  <thead>
				    <tr>
				      <th scope="col">First Name</th>
				      <th scope="col">Middle Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">House No.</th>
				      <th scope="col">Street</th>
				      <th scope="col">Brgy.</th>
				      <th scope="col">City</th>
				      <th scope="col">Province</th>
				      <th scope="col">Birthday</th>
				      <th scope="col">Contact#</th>
				    </tr>
				  </thead>
			
				  <tbody>
			<?php
				if($query_run)
					{
						foreach($query_run as $row)
					{
			?>
				    <tr>
				      <td><?php echo $row['fname'];  ?></td>
				      <td><?php echo $row['mname']; ?></td>
				      <td><?php echo $row['lname']; ?></td>
				      <td><?php echo $row['houserno']; ?></td>
				      <td><?php echo $row['street']; ?></td>
				      <td><?php echo $row['brgy']; ?></td>
				      <td><?php echo $row['city']; ?></td>
				      <td><?php echo $row['province']; ?></td>
				      <td><?php echo $row['birthday']; ?></td>
				      <td><?php echo $row['contact']; ?></td>
				    </tr>
		    <?php
				}		
			}
			else
				{
					echo "No record found";
				}
    		?>
				  </tbody>
		    
			</table>
    	</div>
    </div>
   </div>
</div>
</header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#datatableid').DataTable({
    	"pagingType": "full_numbers",
    	"lengthMenu": [
    		[10,25,50,-1],
    		[10,25,50,"All"]
    	],
    	responsive: true,
    	language:{
    		search: "_INPUT_",
    		searchPlaceholder:"Search Your Data",
    	}

    });
  });
</script>
</body>
</html>