<?php
session_start();
include_once('../sysgen/db_connect.php');
include_once('../my_fun/my_fun.php');


if($_SESSION['login_session'] != "admin@gmail.com"){
header("location:../index.php");
}


if(isset($_POST["submit"])){
    $created_at=getTime();
    $topic=$_POST["post_title"];
    $privacy=$_POST["privacy_select"];
    $admin=$_POST["admin"];
    $content=$_POST["postcontent"];

    $imglink=mt_rand(time(),time()) . "_" . $_FILES["file"]["name"] .mt_rand(time(),time());
    move_uploaded_file($_FILES["file"]["tmp_name"],"../assets/upload/".$imglink);
    
    $qry="INSERT INTO post (topic,privacy,admin,content,imglink,created_at)
          VALUES ('$topic','$privacy','$admin','$content','$imglink','$created_at')";
    
    $result=mysqli_query($con,$qry);

    $file=$_FILES["file"];


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_page</title>
    <script src="https://kit.fontawesome.com/eda44fcafb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="admin_theme.css">
</head>
<body>
<div class="navbar">
        <!-- <div class="logo_container">
            <img src="img/logo.png" class="navbar_logo">
        </div> -->
        <div class="menu_icon" onclick="showhide()">
                <i class="fas fa-align-center"></i>
        </div>

        <form action=""  class="search_container">
            <input type="text" placeholder="SEARCH.." name="search" class="search_box">
                <button type="submit" class="search_button"><i class="fas fa-search"></i></button>
        </form>
        <div class="menu_links">
            <a href="../logout.php"><div class="home_page">Home</div></a>
            <div class="contact_page">Contact Us</div>
            <a href="../logout.php"><div class="contact_page">Log Out</div></a>
        </div>
    </div>

    <!-- message box=========================================================================== -->
    <div class="msg_box">
        <?php
            if($result){
                echo '
                <div class="msg_container" >
                        <div class="hdr">
                            <span>Upload Successfully.</span>
                        </div>
                        <div class="ic" onclick="showhide()">
                            <span>
                                <i class="far fa-times-circle"></i>
                            </span>
                        </div>
                </div>';
            }
        ?>
    </div>
    <!-- post================================================================================== -->
    <div class="post_container">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="create_post">
                <div class="form_group">
                    <div class="label"><span>Create Post</span></div>
                    <input type="text" name="post_title" class="p_c_email" placeholder="Post topic . . . ">
                </div>
                <div class="form_group">
                    <div class="label_2"><span>Privacy</span></div>
                    <select name="privacy_select" class="privacy_select">
                        <option class="op" value="public">Public</option>
                        <option class="op" value="private">Private</option>
                    </select>
                </div>
                <div class="custom_file">
                    <input type="file" name="file" class="custom_file_input" multiple>
                </div>
                <div class="form_group">
                    <div class="label_2"><span>Content</span></div>
                    <textarea name="postcontent" class="text_area" placeholder="Text here"></textarea>
                </div>
                <div class="form_group">
                    <div class="label"><span>Admin Teams</span></div>
                    <input type="text" name="admin" class="p_c_email" placeholder="Admin's name">
                </div>
                <div class="row">
                    <button class="btn">Cancel</button>
                    <button type="submit" name="submit" class="btn_post">Post</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="../assets/js/script.js"></script>
</html>