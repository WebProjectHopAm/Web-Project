<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css.map"/>
    <script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js.map"></script>
    <script type="text/javascript" src="../js/habh.js"></script> 
</head>
<body>
<div id="top-nav-bar">        
            <div id="nav-bar">
            	<div id="left-bar">
                	<a title="Trang chủ" href="../php/Home.php" style="text-decoration:none">
                        <img src="../Image/logo.png" style="vertical-align:middle; cursor:pointer" height="60px" width="60px"/>                  	
                    </a>
                	<input type="text" id="myInput" onkeyup="showHint(this.value)" placeholder="Tìm kiếm theo tên bài hát"/>   
                    <div class="search"><span id="txtHint"></span></div>                
                </div>
                <div id="right-bar">    
                    <a title="Đăng bài hát" class="btn">Đăng bài hát</a>
                   	<a href="../php-login-script-level-1/login.php" title="Đăng nhập" class="btn">Đăng nhập</a>
                    <a href="../php-login-script-level-1/register.php" title="Đăng ký" class="btn">Đăng ký</a>
                </div>            
          	</div> 
            <div id="title-bar">
            	<div class="title">
                	<a href="../php/Home.php" title="Bài hát" class="text-item">Bài hát</a>
                    <a href="#" class="text-item" title="Playlist" onClick="play()">Playlist</a>
                    <a href="#" class="text-item" title="Hợp âm" onClick="play()">Hợp âm</a>
                    <a href="../php/Dieubaihat.php" title="Điệu bài hát" class="text-item">Điệu bài hát</a>
                    <a href="#" class="text-item" title="Thể loại" onClick="play()">Thể loại</a>
                    <a href="#" class="text-item" title="Yêu cầu hợp âm" onClick="play()">Yêu cầu hợp âm</a>
                    <a href="#" class="text-item" title="Thành viên" onClick="play()">Thành viên</a>
                </div>
            </div>  	
        </div>
        <br/><br/><br/>
<style>
.search{
	margin-left:70px; 
	z-index:99999;
	margin-top:0; 
	position:fixed;
	background-color:#FFF;
	border:1px solid #ddd;
	border-radius:10px;
	text-decoration: none;
	cursor: pointer;
}
</style>
        
</body>
</html>