<?php
session_start();
if(isset($_SESSION['loggedIN'])){
    header('Location: Select type.php');
    exit();
}
if (isset($_GET['login']))
{ 
    $conn = new mysqli('localhost','root','','transaction_system');
    $email =$_GET['emailPHP'];
    $password =$_GET['passwordPHP'];
    $data = $conn-> query("SELECT id FROM login WHERE email= '$email' AND password = '$password'");
    if ($data ->num_rows>0){
        $_SESSION['loggedIN'] = '1';
        $_SESSION['email'] = $email;
        exit ('User login');
    }
    else {
        exit('User not found');
    }
}
?>
<html>
 <head>
     <title>Transaction Login Form</title>
 </head>
 <body>
    <table border = 0 padding = "5" align="center">
    <tr><td>    
    <form method="post" action= "Transaction Login.php">
        <input type ="text" id="email" placeholder="Email..."><br>
        <input type ="password" id="password" placeholder="Password..."><br>
        <input type ="button" value="Log in" id="login">
        <a href="CreateAccount.php">
             <input type ="button" value="Create Account" id="create">
        </a>    
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
                             window.location = 'Select type.php';
                         },
                        
                     }
                 );
             }

          });
        });
    </script>
    <p id = "response"></p>
 </tr></td>
 </table>
 </body>
 </html>