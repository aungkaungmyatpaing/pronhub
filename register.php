<?php
    session_start();
    include_once('sysgen/db_connect.php');
    include_once('my_fun/my_fun.php');

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];
        if($password==$confirm_password){
            $password=encodePassword($password);
            $currentTime=getTime();
            $emailCheck="SELECT * FROM user WHERE email='$email'";
            if(mysqli_num_rows(mysqli_query($con,$emailCheck))>0){
                echo 'alert("Email is already created by another one!")';
                header("location:register.php");
            }else{
            $insert_qry="INSERT INTO user (username,email,pass,created_at,updated_at) 
            VALUES ('$name','$email','$password','$currentTime','$currentTime')";

            if(mysqli_query($con,$insert_qry)){
                $_SESSION['login_session']=$email;
                header("location:index.php");
            }else{
                echo "FAILED";
            }
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
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="log_in_form">
        <form method="POST">
            <div class="form_header">
                <span class="header_login">Register</span>
            </div>
            <input type="text" name="name" class="u_name" placeholder="Name" required>
            <input type="email" name="email" class="u_email" placeholder="Email" required>
            <input type="password" name="password" class="u_password" placeholder="Password" required>
            <input type="password" name="confirm_password" class="u_password" placeholder="Confirm Password" required>
            <button type="submit" name="submit" class="login">Register</button>
            <a href="login.php">Already have an account</a>
        </form>
    </div>
</body>
</html>
