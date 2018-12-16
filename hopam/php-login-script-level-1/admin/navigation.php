<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/login.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap.min.css.map"/>
    <script type="text/javascript" src="../../Bootstrap/js/bootstrap.min.js.map"></script>
</head>
<body>
<div id="top-nav-bar">        
            <div id="nav-bar">
            	<div id="left-bar">
                	<a title="Trang chủ" href="../../Home.php" style="text-decoration:none">
                        <img src="../../Image/logo.png" style="vertical-align:middle; cursor:pointer" height="60px" width="60px"/>                  	
                    </a>
                	<input type="text" id="myInput" placeholder="Tìm kiếm theo tên bài hát"/>                   
                </div>
                <div id="right-bar">    
                    <a title="Đăng bài hát" class="btn">Đăng bài hát</a>
                   	<a href="../../php-login-script-level-1/login.php" title="Đăng nhập" class="btn">Đăng nhập</a>
                    <a href="../../php-login-script-level-1/register.php" title="Đăng ký" class="btn">Đăng ký</a>
                </div>            
          	</div> 
            <div id="title-bar">
            	<div class="title">
                	<a href="../../Home.php" title="Bài hát" class="text-item">Bài hát</a>
                    <a href="#" class="text-item" title="Playlist" onClick="play()">Playlist</a>
                    <a href="#" class="text-item" title="Hợp âm" onClick="play()">Hợp âm</a>
                    <a href="../../php/Dieubaihat.php" title="Điệu bài hát" class="text-item">Điệu bài hát</a>
                    <a href="#" class="text-item" title="Thể loại" onClick="play()">Thể loại</a>
                    <a href="#" class="text-item" title="Yêu cầu hợp âm" onClick="play()">Yêu cầu hợp âm</a>
                    <a href="#" class="text-item" title="Thành viên" onClick="play()">Thành viên</a>
                </div>
            </div>  	
        </div>
<br/><br/><br/><br/>
    <!-- navbar
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
 
        <div class="navbar-header">
            <!-- to enable navigation dropdown when viewed in mobile device -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
 
            <!-- Change "Site Admin" to your site name -->
            <!-- <a  class="navbar-brand" href="<?php echo $home_url; ?>admin/index.php">Admin</a> -->
        </div>
 
        <div class="navbar-collapse collapse" style="padding-left:80px">
            <ul class="nav navbar-nav">
 
 
                <!-- highlight for order related pages -->
                <li <?php echo $page_title=="Admin Index" ? "class='active'" : ""; ?>>
                    <a href="<?php echo $home_url; ?>admin/index.php">Quản lý</a>
                </li>
 
                <!-- highlight for user related pages -->
                <li <?php
                        echo $page_title=="Users" ? "class='active'" : ""; ?> >
                    <a href="<?php echo $home_url; ?>admin/read_users.php">Người dùng</a>
                </li>
            </ul>
 
            <!-- options in the upper right corner of the page -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?>
                        &nbsp;&nbsp;<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <!-- log out user -->
                        <li><a href="<?php echo $home_url; ?>logout.php">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
 
        </div><!--/.nav-collapse -->
 
    </div>
</div> 
<!-- /navbar -->
</body>
</html>