<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<meta name ="viewport" content ="width = device-width, initial-scale = 1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Insert Item</title>
	<link rel="stylesheet" type="text/css" href="../Breadcrumbs/newcss.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
<body>
<!-- Insertion Item -->
<!-- Modal -->
<div class="modal fade" id="itemaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action = "additem.php" method="post">
      <div class="modal-body">
		
			<div class ="form-group">
				<label>Item Name</label>
				<input type="text" name = "itemname" class = "form-control" placeholder="Enter Item">
			</div>
			<div class ="form-group">
				<label>Quantity</label>
				<input type="number" name = "quantity" class = "form-control" placeholder="Enter the quantity">
			</div>
		  	<div class ="form-group">
				<label>Price</label>
				<input type="number" name = "price" class = "form-control" placeholder="Enter the price">
			</div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="insertdata" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################################################################# -->
<!-- Edit the Item -->
<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Item Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action = "updatecode.php" method="post">
      <div class="modal-body">
			<input type="hidden" name="update_id" id="update_id">

			<div class ="form-group">
				<label>Item Name</label>
				<input type="text" name = "itemname" id ="Item" class = "form-control" placeholder="Enter Item">
			</div>

			<div class ="form-group">
				<label>Quantity</label>
				<input type="text" name = "quantity" id ="quantity" class = "form-control" placeholder="Enter the quantity">
			</div>

		  	<div class ="form-group">
				<label>Price</label>
				<input type="text" name = "price" id ="price" class = "form-control" placeholder="Enter the price">
			</div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="updatedata" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- ############################################################################################# -->

<!-- ############################################################################################# -->
<!-- DELETE the Item -->
<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Item Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action = "deletecode.php" method="post">
      <div class="modal-body">
      	
			<input type="hidden" name="delete_id" id="delete_id">

			<h4>Do you want do delete this data?</h4>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
        <button type="submit" name="deletedata" class="btn btn-primary">Yes</button>
      </div>
      </form>

    </div>
  </div>
</div>
<!-- ############################################################################################# -->

<div class="container">
		<?php 
		      	 if(isset($_SESSION['status']))
		      	  {
		    ?>
		   	 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  				<center><strong><?php echo $_SESSION['status'];?></strong></center>
  				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			 </div>
		    <?php		      		
		      		unset($_SESSION['status']);
		      	  }
        ?>
		<div class="jumbotron">
			
        	<div class="card">
					<div class="wrapper">
				    <div class="breadcrumbs">
				       <div class="home">
				         <a href="../Breadcrumbs/Breadcrumbs.html"><i class="fas fa-home"></i></a>
				       </div>
				       <ul>
				         <li><a href="#">
				           <i class="fas fa-address-card"></i>
				           <p>About</p>
				           </a></li>
				         <li class="active"><a href="../Inventory/index.php">
				           <i class="fas fa-warehouse"></i>
				           <p>Inventory</p>
				           </a></li>
				         <li><a href="../DisplayStaff.php">
				           <i class="fas fa-user-friends"></i>
				           <p>Staff Info</p>
				           </a></li>
				  		 <li><a href="../logout.php">
				           <i class="fas fa-sign-out-alt"></i>
				           <p>Logout</p>
				           </a></li>         
				      	</ul>  

					</div>
				</div>
			<div class ="card text-center ">
			<h3></h3>	
			</div>
			<div class ="card">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#itemaddmodal">
 			 Add Item
			</button>
			</div>
			<div class ="card">
				<div class ="card-body">						
				<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection, 'transaction_system');
					$query = "SELECT * FROM inventory";
					$query_run = mysqli_query($connection,$query);
				?>
					<table id="datatableid" class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">#ItemNo.</th>
						      <th scope="col">Item Name</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Price</th>
						      <th scope="col">Edit</th>
						      <th scope="col">Delete</th>
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
						      <td><?php echo $row['id'];?> </td>
						      <td><?php echo $row['Item'];?> </td>
						      <td><?php echo $row['quantity'];?> </td>
						      <td><?php echo $row['price'];?> </td>
						      <td>
						      	<button type ="button" class ="btn btn-success editbtn">EDIT</button>
						      </td>
						      <td>
						      	<button type ="button" class ="btn btn-danger deletebtn">DELETE</button>
						      </td>
						    </tr>
				<?php
						}
					} 
					else
					{
						echo "No record";
					}
				?>
						  </tbody>
				
					</table>
				</div>  	
			</div>
		</div>
		
</div>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--######### Search Bar -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

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

<!--######## Search Bar-->

<!--######## Delete Item-->
<script>
	 $(document).ready(function(){
	 	$('.deletebtn').on('click',function(){
	 		$('#deletemodal').modal('show');
	 		
	 		$tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
            return $(this).text();
            }).get();

            console.log(data);

	 		$('#delete_id').val(data[0]);
	 	});
	 });

</script>	
<!--######## Delete Item-->

<!--######## Edit Item-->
<script>
	 $(document).ready(function(){
	 	$('.editbtn').on('click',function(){
	 		$('#editmodal').modal('show');

	 		$tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
            return $(this).text();
            }).get();

            console.log(data);

	 		$('#update_id').val(data[0]);
	 		$('#Item').val(data[0]);
	 		$('#quantity').val(data[1]);
	 		$('#price').val(data[2]);

	 	});
	 });

</script>
<!--######## Edit Item-->
</body>
</html>