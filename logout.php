<?php
session_start();
unset( $_SESSION['login_session']);
header("location:login.php");
?>