<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign up</title>
<link rel="stylesheet" href="./style/signup.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@538&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- form signup -->
    <div class="main">
        
        <form action="./php/upsignup.php" method="POST" class="form">
        <h3>Đăng Ký</h3>

        <div class="form-group">
          <label  for="fullname" class="form-group-label">Tên đầy đủ</label></br>
          <input type="text" name="registername"
          placeholder="VD: Trần Minh Nhật" class="input -signup-name form-group-input">
        </div>

          <div class="form-group">
            <label  for="email" class="form-group-label">Tên đăng nhập</label></br>
            <input type="text" name="registerusername"
            placeholder="VD: Trần Minh Nhật" class="input-signup-username form-group-input">
          </div>
          
    
          <div class="form-group">
            <label for="email" class="form-group-label">Bạn muốn làm</label></br>
            <select name="registerwork" class="input-signup-work form-group-input">
                <option value="Học sinh">Người học</option>
                <option value="Giáo viên">Người chia sẻ kinh nghiệm</option>
            </select>
          </div>
    
          <div class="form-group">
            <label for="password" class="form-group-label">Mật khẩu</label></br>
            <input  type="password" name ="registerPassword"
            placeholder="Nhập mật khẩu" class="input-signup-password form-group-input">
          </div>
    
          <div class="form-group">
            <label for="repeat_password" class="form-group-label">Nhập lại mật khẩu</label></br>
            <input  type="password" name ="registerPasswordagain"
            placeholder="Nhập lại mật khẩu" class=" input-signup-passwordagain form-group-input">
          </div >
    
          <button type="submit" class="signup__signInButton">Đăng kí</button>

          
        </form>
    </div>
  </body>
  <!-- <script src="./js/signup.js"></script> -->
</html>
