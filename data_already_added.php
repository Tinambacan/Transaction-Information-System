<?php
$connect = mysqli_connect("localhost", "root", "", "zzzz");
$message = '';
if (isset($_POST["add"]))
{
   if (!empty($_POST["item"]))
   {
   		  $sql = "
   		  	   INSERT INTO item (item_name)
   		  	   SELECT '".$_POST["item"]."' FROM item
   		  	   WHERE NOT EXISTS 
   		  	   (
   		  	    SELECT item_name FROM item WHERE item_name = '".$_POST["item"]."'
   		  	    ) LIMIT 1
   		  ";
   		  if(mysqli_query($connect, $sql))
   		  {
   		  	  $insert_id = mysqli_insert_id($connect);
   		  	  if($insert_id != '')
   		  	  {
   		  	  		header("location:item_already_inserted.php?inserted=1");
   		  	  }
   		  	  else
   		  	  {
   		  	  		header("location:item_already_inserted.php?already=1");
   		  	  }
   		  }
    }
   
   else
   {
   	      header("location:item_already_inserted.php?required=1");
   }

}

if(isset($_GET["added"]))
{
		$message = "Item Name Added";
}

if(isset($_GET["already"]))
{
		$message = "Item already added";
}

if(isset($_GET["required"]))
{
	$message = "Name of Item Required";

}
?>

 <!doctype html>
<html>
  <head>
           <title>ADDING AN ITEM</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>  
      <body>  
           <b />  
           <div class="container" style="width:500px;">  
                <label class="text-danger">  
                <?php  
                if($message!= '')
                {
                	echo $message;
                }  
                ?>  
                </label>  
                <h3 align="">Add an Item</h3><br />      
                <form method="post">  
                     <label>Enter item</label>
                     <input type="text" name="item" class="form-control" />  
                     <br />  
                     <input type="submit" name="add" class="btn btn-info" value="Add" />  
                </form>
           </div> 
           <br />  
      </body>  
</html>

