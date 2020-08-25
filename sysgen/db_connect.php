<?php
$host="localhost";
$user="root";
$pass="";

// database connect
$con=mysqli_connect($host,$user,$pass) or die(mysqli_error());

mysqli_select_db($con,"pornhub_blog");
