<?php
session_start();
include_once('sysgen/db_connect.php');
include_once('my_fun/my_fun.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($password=encodePassword($password)){
        $get_user_query="SELECT * FROM user WHERE email='$email' AND pass='$password'";
        $get_user=mysqli_query($con,$get_user_query);
        if(mysqli_num_rows($get_user)>0){
            $_SESSION['login_session']=$email;
            if($email==="admin@gmail.com"){
                header("location:admin/index.php");
            }else{
                header("location:index.php");
            }
        }else{
            header("location:login.php");
        }

    }
    
}

?>

<!-- html============================================================================= -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="log_in_form">
        <form action="login.php" method="POST">
            <div class="form_header">
                <span class="header_login">Login</span>
            </div>
            <input type="email" name="email" class="u_email" placeholder="Email">
            <input type="password" name="password" class="u_password" placeholder="Password">
            <button type="submit" name="submit" class="login">Log In</button>
            <a href="register.php">Create New Account</a>
        </form>
    </div>
</body>
</html>
