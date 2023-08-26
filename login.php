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
  </head>
  <body>
    <style>
      #back-top{
        background: #6bc3a1;
        height: 50px;
        width: 50px;
        right: 31px;
        bottom: 18px;
        position: fixed;
        color: #181818bd;
        font-size: 20px;
        text-align: center;
        border-radius: 50%;
        line-height: 48px;
        border: 2px solid transparent;
        box-shadow: 0 0 10px 3px rgba(108,98,98,0.2);
      }
    </style>
    <!-- from login -->
    <div class="main">
        
        <form action="./php/checklogin.php" method="POST" class="form">
          <h3>Đăng Nhập</h3>
          <div class="form-group">
            <label for="email" class="form-group-label">Tên đăng nhập</label></br>
            <input type="text"
            placeholder ="VD: Trần Minh Nhật" name="loginusername" class="input-login-username form-group-input" >
          </div>
    
          <div class="form-group">
            <label for="password" class="form-group-label">Mật khẩu</label></br>
            <input type="password"
            placeholder="Nhập mật khẩu" name="loginpassword" class="input-login-password form-group-input"  >
          </div>
    
          <button type="submit" class="login__signInButton">Đăng nhập</button>
        </form>
    </div>
    <div id="back-top" >
    <a title="Go to Top" href="index.php"> <i class="fa-solid fa-house" style="color: #0000007c;"></i></a>
    </div>
  </body>
  
</html>
