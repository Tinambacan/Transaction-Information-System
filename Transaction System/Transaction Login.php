<!--Login from Data Base###############-->
<?php
session_start();
if(isset($_SESSION['loggedIN'])){
    header('Location: Breadcrumbs/Breadcrumbs.html');
    exit();
}
if (isset($_GET['login']))
{ 
    $conn = new mysqli('localhost','root','','transaction_system');
    $email =$_GET['emailPHP'];
    $password =sha1($_GET['passwordPHP']);
    $data = $conn-> query("SELECT id FROM login WHERE email= '$email' AND password = '$password'");
    if ($data ->num_rows>0){
        $_SESSION['loggedIN'] = '1';
        $_SESSION['email'] = $email;
        exit ('User login');
    }
    else {
        echo '<script>alert("Wrong Password Or Email");</script>';
        exit('User not found');

    }
}
?>
<!--###################################-->

<html>
<head>
    <meta charset ="UTF-8">
    <meta name ="viewport" content ="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<!--CreateAccount Modal#################################-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="createaccountaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="userinformation.php" method="post" >
      <div class="modal-body">
        <div class ="form-group">
                <label>Email</label>
                <input type="text" name = "email" class = "form-control" placeholder="Create Email Addresss " required>
            </div>
            <div class ="form-group">
                <label>Password</label>
                <input type= "password" name = "password" class = "form-control" required placeholder="Create password">
            </div>
            <div class ="form-group">
                <label>First Name</label>
                <input type="text" name = "fname" class = "form-control" placeholder="Enter your first name" required>
            </div>
            <div class ="form-group">
                <label>Middle Name (Optional)</label>
                <input type="text" name = "mname" class = "form-control" placeholder="Enter your Middle name">
            </div>
            <div class ="form-group">
                <label>Last Name</label>
                <input type="text" name = "lname" class = "form-control" placeholder="Enter your Last name" required>
            </div>
            <div class ="form-group">
                <label>House No.</label>
                <input type="text" name = "houseno" class = "form-control" placeholder="Enter the house no.">
            </div>
            <div class ="form-group">
                <label>Street</label>
                <input type="text" name = "street" class = "form-control" placeholder="Enter the street">
            </div>
            <div class ="form-group">
                <label>Brgy.</label>
                <input type="text" name = "brgy" class = "form-control" placeholder="Enter the brgy" required>
            </div>
            <div class ="form-group">
                <label>City</label>
                <input type="text" name = "city" class = "form-control" placeholder="Enter the city"required>
            </div>
            <div class ="form-group">
                <label>Province</label>
                <input type="text" name = "province" class = "form-control" placeholder="Enter the province">
            </div>
            <div class ="form-group">
                <label>Birthday</label>
                <input type="date" name = "birthday" class = "form-control" placeholder="Enter your Birthday"required>
            </div>
            <div class ="form-group">
                <label>Contact Number(must be 11 numbers)</label>
                <input type="text" name = "contact" class = "form-control" placeholder="Enter you contact number" pattern="[0-9]{11}"required>
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
<!--CreateAccount Modal#################################-->
<!--Body################################################-->
<div class="container">
    <div class="row justify-content-center">
        <div class="card ">
            <div class="card-header text-center bg-info text-white">
               Login Form
            </div>
            <div class="card-body">
            <form method="post" action= "Transaction Login.php">
                <div class="inpu-group form-group">
                    <label for="email"><font color="white">Email</font></label>
                    <input type ="text" id="email" class="form-control" placeholder=" Enter email..."><br>
                </div>
                <div class="form-group">
                    <label for="password"><font color="white">Password</font></label>
                    <input type ="password" id="password" class="form-control" placeholder="Enter password..."><br>
                </div>   
                <input type ="button" value="Log in" id="login" class="btn btn-success">
                <!--Button Modal for Create Account-->
               
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createaccountaddmodal">
                     Create Account
                     </button>
        
                <!--###############################-->   
                <div class="card-footer text-right">
                    <font color="white"><small>&copy; Transaction System</small></font>
                </div> 
            </form>
            </div>
               
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!--Ajax##########################################-->
<script type="text/javascript">
        $(document).ready(function (){
          $("#login").on('click', function (){
             var email = $("#email").val();
             var password = $("#password").val();
             if (email == "" || password == "")
                 alert('please check your input');
             else{
                 $.ajax(
                     {
                         url:'Transaction login.php',
                         data: {
                             login: 1,
                             emailPHP: email,
                             passwordPHP: password,
                         },
                         success: function (response){
                             $("#response").html(response);
                             if(response.indexOf('User login')>=0)
                             window.location = 'Breadcrumbs/Breadcrumbs.html';
                         },
                        
                     }
                 );
             }

          });
        });
    </script>
    <p id = "response"></p>
 
</body>
</html>