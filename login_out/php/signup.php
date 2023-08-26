<?php
 
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
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT name_login FROM user WHERE name_login='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
          
          
    //Lưu thông tin thành viên vào bảng
    @$addmember = mysql_query("
        INSERT INTO user (
            name_user,
            name_login,
            password,
            money,
            role
            
        )
        VALUE (
            '{$name_user}',
            '{$name_login}',
            '{$password}',
            '{$money}',
            '{$work}'
        )
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Quá trình đăng ký thành công.";
            require_once '../login.html'
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>