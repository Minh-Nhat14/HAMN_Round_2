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
        font-size: 30px;
    }
    .button-i{
        width: 30% !important;
        background-image: linear-gradient(18deg, rgb(47, 179, 163), rgb(255 241 182))!important;
        border: none;
        color: #414140 !important;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 100%;
    }
    .feed{
        display: flex;
        padding: 15px 195px;
        align-items: center;
    }
    .post_feed{
        font-size: 35px;
        margin-left: 10px;
        color: #b0b0b0;
        transition: color 0.3s; 
    }
    .feed {
    font-size: 24px;
    cursor: pointer;
    }
    .post_feed.active {
        color: #e6c200;
    }
    #result{
        margin-left: 5px;
    }
    .feed-text{
        margin: 15px 199px;
        width: 40%;
        height: 80px;
        border: none;
        border-radius:10px;
        padding: 10px;
        font-size: 15px;
    }
    .form .button-i {
    width: 100%;
    min-height: 40px;
    border-radius: 8px;
    background-color: #152a64;
    border-color: rgba(20, 20, 20, 0.1);
    margin-top: 9px;
    font-weight: 500;
    color: #fef6e4;
    font-size: 17px;
    cursor: pointer;
    font-family: "Quicksand", sans-serif;
    }
    .form .button-i:hover {
    border-width: 1.5px;
    background-color: #001357;
    }

</style>
  </head>   
  <body>
    <?php
    session_start();
    ?>
    <!-- from login -->
    <div class="main">
        
        <form  class="form">
            <h1>Đánh giá khóa học</h1>
            <div class="feed">
                <div class="post_feed" data-value="1"><i class="fa-solid fa-star"></i></div>
                <div class="post_feed" data-value="2"><i class="fa-solid fa-star"></i></div>
                <div class="post_feed" data-value="3"><i class="fa-solid fa-star"></i></div>
                <div class="post_feed" data-value="4"><i class="fa-solid fa-star"></i></div>
                <div class="post_feed" data-value="5"><i class="fa-solid fa-star"></i></div>
                <div id="result"></div>
            </div>
            <input type="text" placeholder ="Nhập nhận xét của bạn vào đây" class="feed-text"></input>
            <div class="button">
            <button type="submit" class="button-i">Yêu cầu hoàn tiền</button>
            <div class="button-i" id="submit">Gửi đánh giá khóa học</div>
            </div>
        </form>
    </div>
  </body>
  <script>
    const stars = document.querySelectorAll('.post_feed');
    const result = document.getElementById('result');
    const button = document.querySelectorAll('.button-i');

    stars.forEach(star => {
    star.addEventListener('click', () => {
        const value = parseInt(star.getAttribute('data-value'));
        
        stars.forEach(star => star.classList.remove('active'));
        for (let i = 0; i < value; i++) {
            stars[i].classList.add('active');
        }

            result.textContent = value;
        });
    });
    const submitReviewButton = document.getElementById('submit');
    
    submitReviewButton.addEventListener('click', function (event) {
        window.location.href = "index.php";
    });

  </script>
</html>
