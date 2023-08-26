<?php
 session_start();
 ob_start();
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['loginusername'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('connect.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
            
    //Lấy dữ liệu
    $username   = $_POST['loginusername'];
    $password   = $_POST['loginpassword'];
    echo $password;
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password )
    {
        echo '<script>
        window.location.href = "../login.php";
        alert("Vui lòng điền đầy đủ thông tin");
        </script>';
        
    }else{
         $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = "SELECT * FROM user WHERE name_login = '$username'";
    $result = $conn->query($query)->fetch_assoc();
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $result['password']) {
        echo '<script>
    window.location.href = "../login.php";
    alert("Sai thông tin đăng nhập");
    </script>';
        
    }else{
        $_SESSION['username'] = $result['name_login'];
        $_SESSION['name'] = $result['name_user'];
        $_SESSION['work'] = $result['role'];
        $_SESSION['id'] = $result['Id_user'];
        $_SESSION['money'] = $result['money'];
        // echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='../welcome.php'>Về trang chủ</a>";
        header('Location: ../index.php');
    }
    }
          
    // mã hóa pasword
   
     
    //Lưu tên đăng nhập
    
    //$conn->close();
?>