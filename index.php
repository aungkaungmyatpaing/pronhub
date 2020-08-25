<?php

    session_start(); 
    if(!isset($_SESSION['login_session'])){
        header("location:login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple_blog</title>
    <script src="https://kit.fontawesome.com/eda44fcafb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/ads.css">
</head>
<body>
<!-- navbar ========================================================= Start -->
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
            <div class="home_page">Home</div>
            <div class="contact_page">Contact Us</div>
            <a href="logout.php"><div class="contact_page">Log Out</div></a>
        </div>
    </div>
    <div class="live_and_premium">
        <div class="l_p">Live Cams</div>
        <div class="l_p">Sex Dates</div>
        <div class="l_p">Live Sex</div>
        <div class="l_p">Premium</div>
    </div>
    <!-- navbar_menu_dropdown ============================================================================= -->
        <div class="drop_down" id="show_hide">
            <form action="" class="search_container_drop_down">
                <input type="text" placeholder="SEARCH..." name="search" class="search_box_drop_down">
                <button type="submit" class="search_button_drop_down"><i class="fas fa-search"></i></button>
            </form>
            <div class="sign">

                <div class="sign_icon_container">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Sign In</span>
                </div>

                <div class="sign_icon_container">
                    <i class="fas fa-download"></i>
                    <span>Download</span>
                </div>

                <div class="sign_icon_container">
                    <i class="fas fa-upload"></i>
                    <span>Upload</span>
                </div>

                <div class="sign_icon_container">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Sign Out</span>
                </div>
                
            </div>
            <!-- main ===================================================================== -->
            <div class="customer_contact">
                <div class="main_header">
                    <span>MAIN</span>
                </div>
                <div class="porn_videos" onclick="downArrow()">
                    <div class="porn_videos_icon">
                    <i class="fas fa-video"></i>
                    </div>
                    <span>Porn Videos</span>
                    <div class="down_arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div id="mini_dropdown">
                    <div class="mini_down"><span>Premium Video</span></div>
                    <div class="mini_down"><span>Videos</span></div>
                    <div class="mini_down">Hentai</div>
                </div>
                <div class="save_list" onclick="downArrow2()">
                    <div class="save_icon">
                    <i class="far fa-bookmark"></i>
                    </div>
                    <span>Save Lists</span>
                    <div class="down_arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div id="mini_dropdown2">
                    <div class="mini_down"><span>Videos</span></div>
                    <div class="mini_down"><span>GIFs</span></div>
                    <div class="mini_down">Photos</div>
                </div>
                <div class="categories">
                    <div class="categories_icon">
                    <i class="fas fa-folder-open"></i>
                    </div>
                    <span>Categories</span>
                </div>
                <div class="channels">
                    <div class="channels_icon">
                    <i class="fas fa-tv"></i>
                    </div>
                    <span>Channels</span>
                </div>
                <div class="photos">
                    <div class="photos_icon">
                    <i class="fas fa-camera-retro"></i>
                    </div>
                    <span>Photos</span>
                </div>
                <div class="porn_gifs">
                    <div class="porn_gifs_icon">
                    <i class="fas fa-film"></i>
                    </div>
                    <span>Porn GIFs</span>
                </div>
                <div class="porn_stars" onclick="downArrow3()">
                    <div class="porn_stars_icon">
                    <i class="far fa-heart"></i>
                    </div>
                    <span>Porn Stars</span>
                    <div class="down_arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div id="mini_dropdown3">
                    <div class="mini_down"><span>Top 100</span></div>
                    <div class="mini_down"><span>Europe</span></div>
                    <div class="mini_down">Asia</div>
                </div>
                <div class="contact">
                    <div class="contact_icon">
                        <i class="fab fa-teamspeak"></i>
                    </div>
                    <span>Contact to Team</span>
                </div>
                <div class="get_premium">
                    <div class="premium_icon">
                    <i class="fas fa-star"></i>
                    </div>
                    <span>Upgrade To Premium</span>
                </div>
            </div>
            <!-- community ======================================================================= -->
            <div class="community">
                <div class="community_header">
                    <span>COMMUNITY</span>
                </div>

                <div class="upload">
                <div class="upload_icon">
                <i class="fas fa-caret-square-up"></i>
                </div>
                <span>Upload</span>
                </div>

                <div class="community_feed">
                <div class="community_feed_icon">
                <i class="far fa-comments"></i>
                </div>
                <span>Community Feed</span>
                </div>

                <div class="community_videos">
                <div class="community_videos_icon">
                <i class="far fa-file-video"></i>
                </div>
                <span>Community Videos</span>
                </div>

                <div class="member_search">
                <div class="member_search_icon">
                <i class="fas fa-user-friends"></i>
                </div>
                <span>Member Search</span>
                </div>

                <div class="top_members">
                <div class="top_members_icon">
                <i class="fas fa-user-shield"></i>
                </div>
                <span>Top Members</span>
                </div>
            </div>
        </div>

<!-- navbar========================================================== End -->


<!-- ads============================================================= Start -->
<div class="ads_slider">
        <div class="ads_container">
                <img src="img/ads_1.jpg" class="ads_img">
        </div>
        <div class="ads_container">
                <img src="img/ads_2.jpg" class="ads_img">
        </div>
        <div class="ads_container">
                <img src="img/ads_3.jpg" class="ads_img">
        </div>
        <div class="ads_container">
                <img src="img/ads_4.jpg" class="ads_img">
        </div>
</div>
<!-- ads ========================================================================= End -->
<div class="all_video_container">
    <div class="sec_video_container">
        <div class="hd_container">
            <video class="hd_video" controls>
                <source src="sysgen/video/video_1.mp4" type="video/mp4">
                <source src="sysgen/video/video_1.ogg" type="video/ogg">
            </video>
            <div class="video_name"><span>Slander Love Is Gone.mp4</span></div>
            <div class="vd_navbar">
                <div class="vd_nav_icon"><i class="fas fa-thumbs-up"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-thumbs-down"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-share"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-save"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-info-circle"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-comments"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-file-download"></i></div>
            </div>
        </div>
        <div class="hd_container">
            <video class="hd_video" controls>
                <source src="sysgen/video/video_3.mp4" type="video/mp4">
                <source src="sysgen/video/video_3.ogg" type="video/ogg">
            </video>
            <div class="video_name"><span>Candy Paint</span></div>
            <div class="vd_navbar">
                <div class="vd_nav_icon"><i class="fas fa-thumbs-up"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-thumbs-down"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-share"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-save"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-info-circle"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-comments"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-file-download"></i></div>
            </div>
        </div>
        <div class="hd_container">
            <video class="hd_video" controls>
                <source src="sysgen/video/video_2.mp4" type="video/mp4">
                <source src="sysgen/video/video_2.ogg" type="video/ogg">
            </video>
            <div class="video_name"><span>She get go psycho</span></div>
            <div class="vd_navbar">
                <div class="vd_nav_icon"><i class="fas fa-thumbs-up"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-thumbs-down"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-share"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-save"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-info-circle"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-comments"></i></div>
                <div class="vd_nav_icon"><i class="fas fa-file-download"></i></div>
            </div>
        </div>    
    </div>
</div>

<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<h1>body item</h1>
<!-- footer======================================================================= Start -->
<div class="footer">
    <div class="footer_container">
        <!-- column_1 -->
        <div class="container_column_1">
                <div class="porn_videos">
                    <div class="porn_videos_icon">
                    <i class="fas fa-video"></i>
                    </div>
                    <span>Porn Videos</span>
                </div>
                <div class="photos">
                    <div class="photos_icon">
                    <i class="fas fa-camera-retro"></i>
                    </div>
                    <span>Photos</span>
                </div>
                <div class="porn_gifs">
                    <div class="porn_gifs_icon">
                    <i class="fas fa-film"></i>
                    </div>
                    <span>Porn GIFs</span>
                </div>
                <div class="porn_stars">
                    <div class="porn_stars_icon">
                    <i class="far fa-heart"></i>
                    </div>
                    <span>Porn Stars</span>
                </div>
        </div>
        <div class="container_column_2">
                <div class="channels">
                    <div class="channels_icon">
                    <i class="fas fa-tv"></i>
                    </div>
                    <span>Channels</span>
                </div>
                <div class="categories">
                    <div class="categories_icon">
                    <i class="fas fa-folder-open"></i>
                    </div>
                    <span>Categories</span>
                </div>
                <div class="save_list">
                    <div class="save_icon">
                    <i class="far fa-bookmark"></i>
                    </div>
                    <span>Save Lists</span>
                </div>
                <div class="contact">
                    <div class="contact_icon">
                        <i class="fab fa-teamspeak"></i>
                    </div>
                    <span>Contact to Team</span>
                </div>
        </div>
        <div class="container_column_3">
                <div class="upload">
                <div class="upload_icon">
                <i class="fas fa-caret-square-up"></i>
                </div>
                <span>Upload</span>
                </div>
                <div class="community_feed">
                <div class="community_feed_icon">
                <i class="far fa-comments"></i>
                </div>
                <span>Community Feed</span>
                </div>
                <div class="community_videos">
                <div class="community_videos_icon">
                <i class="far fa-file-video"></i>
                </div>
                <span>Community Videos</span>
                </div>
                <div class="member_search">
                <div class="member_search_icon">
                <i class="fas fa-user-friends"></i>
                </div>
                <span>Member Search</span>
                </div>
        </div>
        <div class="container_column_4">
                <div class="get_premium">
                    <div class="premium_icon">
                    <i class="fas fa-star"></i>
                    </div>
                    <span>Upgrade To Premium</span>
                </div>
                <div class="download">
                    <div class="download_icon_">
                            <i class="fas fa-download"></i>
                    </div>
                    <span>Download</span>
                </div>
                <div class="sign_in">
                    <div class="sign_in_icon_">
                            <i class="fas fa-sign-in-alt"></i>
                    </div>
                    <span>Sign In</span>
                </div>
                <div class="sign_out">
                    <div class="sign_out_icon_">
                            <i class="fas fa-sign-out-alt"></i>
                    </div>
                    <span>Sign Out</span>
                </div>

        </div>
    </div>
</div>
<!-- footer====================================================================== End -->
<script src="assets/js/script.js"></script>
</body>
</html>