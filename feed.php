<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Đăng Nhập</title>
<link rel="stylesheet" href="./style/login.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@538&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/eef555952d.js" crossorigin="anonymous"></script>
<style>
    .form{
        background: rgb(230 230 230 / 89%)!important;
    }
    .main{
        background-image: linear-gradient(18deg, rgb(47, 179, 163), rgb(255, 235, 154))!important;
    }
    form h1{
        text-align: center;
    }
    .button{
        display: flex;
        justify-content: space-around;
    }
    h1{
        text-align: center;
    }
    button{
        width: 30% !important;
        background-image: linear-gradient(18deg, rgb(47, 179, 163), rgb(255 241 182))!important;
        border: none;
        color: #414140 !important;
    }
</style>
  </head>   
  <body>
    <?php
    session_start();
    ?>
    <!-- from login -->
    <div class="main">
        
        <form action="./php/checklogin.php" method="POST" class="form">
            <h1>Đánh giá khóa học</h1>
            <div class="feed">
                <div class="post_feed"><i class="fa-regular fa-star"></i></div>
            </div>
            <div class="button">
            <button type="submit" class="login__signInButton" >Yêu cầu hoàn tiền</button>
            <button type="submit" class="login__signInButton">Đánh giá khóa học</button>
            </div>
        </form>
    </div>
  </body>
  
</html>
