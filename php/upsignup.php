<?php
 session_start();
 ob_start();
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['registername'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('connect.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
            
    //Lấy dữ liệu từ file dangky.php
    $name   = addslashes($_POST['registername']);
    $username   = addslashes($_POST['registerusername']);
    $work     = addslashes($_POST['registerwork']);
    $password   = addslashes($_POST['registerPassword']);
    $againpassword       = addslashes($_POST['registerPasswordagain']);
    $money = 0;
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$name || !$username || !$work || !$password || !$againpassword )
    {
        echo "Nhập lại mật khẩu không chính xác";
        exit;
    }
    if ($password != $againpassword )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    // Mã khóa mật khẩu
    $password = md5($password);
          
    $query = "SELECT * FROM user WHERE name_login = '$username'";
    $result = $conn->query($query);
        
    // Kiểm tra xem truy vấn có thành công không
    if ($result) {
        // Lấy số lượng hàng
        $num_rows = $result->num_rows;
        
        if ($num_rows > 0) {
            echo "Tên đăng nhập đã tồn tại trong cơ sở dữ liệu.";
        } else {
            echo "Tên đăng nhập chưa tồn tại trong cơ sở dữ liệu.";
        }
    }
          
          
          
    //Lưu thông tin thành viên vào bảng
    $query = "INSERT INTO user (name_user, name_login, password, money, role) VALUES ('$name', '$username', '$password', '$money', '$work')";

    // Thực hiện truy vấn
    if ($conn->query($query)) {
        echo "Dữ liệu đã được đẩy lên cơ sở dữ liệu thành công. <a href='../login.php'>Thử lại</a>";
        $_SESSION['username'] = $username;
    $_SESSION['work'] = $result['role'];
    $_SESSION['id'] = $result['id'];
    $_SESSION['money'] = $result['money'];
    // echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='../welcome.php'>Về trang chủ</a>";
    header('Location: ../index.php');
    } else {
        echo "Đẩy dữ liệu lên cơ sở dữ liệu thất bại: <a href='../signup.php'>Thử lại</a>". $conn->error;
    }
        
?>