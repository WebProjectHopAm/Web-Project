<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kết quả tìm kiếm</title>
</head>
<body>
<?php 
    include('header.php');
?>
<!-- <?php
    require('../php-login-script-level-1/config/database.php');
    $a = $_POST['data'];
    $sql = "select * from users where username like '%$a%'";
    $query = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($query);
    if($num>0){
        while($row = mysqli_fetch_array($query)){


?>

<?php


         }
        }
?> -->


    <!-- <div id="content">
    // <?php 
                    // if(isset($_REQUEST['submit']))
                    // {
                    //     $search=$_GET['ten'];
                    //     if(empty($search))
                    //     {
                    //         echo "<p>Yêu cầu nhập dữ liệu vào ô trống</p>";

                    //     }
                    //     else{
                    //         $query="SELECT * FROM demo WHERE title like '%$search%'";
                    //         $results=mysqli_query($dbc,$query);
                    //         kt_query($results,$query);
                    //         while($demo=mysqli_fetch_array($results,MYSQLI_ASSOC))
                    //         {
                    //         ?>
             
                            }
                        }
                    }
            </div> -->
            <br/><br/><br/><br/><br/><br/>               
    <?php
    //khai báo biến host
    $hostName = 'localhost';
    // khai báo biến username
    $userName = 'root';
    //khai báo biến password
    $passWord = '';
    // khai báo biến databaseName
    $databaseName = 'demo';
    // khởi tạo kết nối
    $connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
    //Kiểm tra kết nối
    if (!$connect) {
    exit('Kết nối không thành công!');
    }
    // thành công
    echo 'Kết nối thành công!';

        if(isset($_GET['btnsearch']))
        {
            $keyword = $_GET['keyword'];
            $sql = mysqli_query("SELECT*FROM baihat WHERE baihat LIKE '%$keyword%' ");
            $num_row = mysqli_num_rows($sql);
            if($num_row==0){
                ?>
                Không tìm thấy kết quả với từ khóa <?php echo $keyword; ?>
            <?php

            }
            else{
                ?>
            Kết quả tìm kiếm với từ khóa <?php echo $keyword; ?> có <?php echo $num_row; ?> kết quả.

            <ul>

            <?php
                while ($row = mysqli_fetch_array($sql)){
                    ?>

                <li>
                    <?php echo $row['baihat'];?>
                </li>
                    <?php
                }
                echo "</ul>";
        }
    }
    ?>
</body>
</html>