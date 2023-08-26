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
  </head>
  <body>
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
  </body>
  
</html>
