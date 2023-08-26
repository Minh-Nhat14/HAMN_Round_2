<?php
    $severname= 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $username = 'root'; //Đây là tên của Database
    $password= ''; //Tên sử dụng Database
    $database = 'spread';//Mật khẩu của tên sử dụng Database
    $conn = mysqli_connect($severname, $username, $password, $database);
    if(!$conn){
        echo ("Không thể kết nối database");
    }else{
        echo ("Kết nối thành công");
    }        
?>