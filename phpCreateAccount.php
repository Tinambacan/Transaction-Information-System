<?php
$server = "localhost";
$user  ="root";
$password ="";
$dbname = "transaction_system";
$conn = mysqli_connect($server,$user,$password,$dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])
        && !empty($_POST['email'])&& !empty($_POST['type'])){
        $username =$_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $type = $_POST['type'];
        $query = "INSERT INTO login(type,username, email, password) values ('$type','$username','$email','$password')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());
        if($run){
            echo "submitted Successfully";
        }
        else
            echo "Form not submitted";
    }  
    if(!empty($_POST['name'])&& !empty($_POST['age']) && !empty($_POST['gender'])&& !empty($_POST['address'])&&!empty($_POST['contact'])&& !empty($_POST['birthday'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender =$_POST['gender'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];        
        $query = "INSERT INTO create_account(name, age, gender, birthday, address, contact) values ('$name','age','gender','$birthday','$address','$contact')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());  
        if($run){
            echo "submitted Successfully";
        }
        else
            echo "Form not submitted";   
    }
    else
        echo "all fields required";
}
        
?>