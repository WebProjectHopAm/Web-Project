<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hợp Âm HD - Website tra cứu hợp âm bài hát</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scare:1">
        <link rel="stylesheet" type="text/css" href="../css/habh.css">
        <link rel="stylesheet" type="text/css" href="../css/dbh.css">
        <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css.map"/>
		<script type="text/javascript" src="../js/habh.js"></script> 
        <script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js.map"></script>
        <script src="../js/jquery-3.3.1.js"></script>
    </head>
    <body>
        <div id="top-nav-bar">        
            <div id="nav-bar">
            	<div id="left-bar">
                    <form name="frmsearch" method="GET">
                	    <a title="Trang chủ" href="Home.php" style="text-decoration:none">
                            <img src="../Image/logo.png" style="vertical-align:middle; cursor:pointer" height="60px" width="60px"/> 
                        </a>
                        <input type="text" id="myInput" onkeyup="showHint(this.value)" placeholder="Tìm kiếm theo tên bài hát"/> 
                        <div class="search"><span id="txtHint"></span></div>
                    </form>                
                </div>
                <div id="right-bar">    
                    <a title="Đăng bài hát" class="btn">Đăng bài hát</a>
                   	<a href="../php-login-script-level-1/login.php" title="Đăng nhập" class="btn">Đăng nhập</a>
                    <a href="../php-login-script-level-1/register.php" title="Đăng ký" class="btn">Đăng ký</a>
                </div>            
          	</div> 
            <div id="title-bar">
            	<div class="title">
                	<a href="Home.php" title="Bài hát" class="text-item">Bài hát</a>
                    <a href="#" class="text-item" title="Playlist" onClick="play()">Playlist</a>
                    <a href="#" class="text-item" title="Hợp âm" onClick="play()">Hợp âm</a>
                    <a href="Dieubaihat.php" title="Điệu bài hát" class="text-item">Điệu bài hát</a>
                    <a href="#" class="text-item" title="Thể loại" onClick="play()">Thể loại</a>
                    <a href="#" class="text-item" title="Yêu cầu hợp âm" onClick="play()">Yêu cầu hợp âm</a>
                    <a href="#" class="text-item" title="Thành viên" onClick="play()">Thành viên</a>
                    
                </div>
            </div>  	
        </div>
    </body>
</html>
