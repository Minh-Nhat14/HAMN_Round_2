<?php
session_start();
include('php/connect.php');

$teacher_id = $_GET['data'];

$student_id = $_SESSION['id'];
$student_pay = $_SESSION['money'];
$cost = 5;

if ($student_pay >= 5) {
    // Trừ tiền của học sinh và cộng tiền cho giáo viên
    $sql = "UPDATE user SET money = money - 5 WHERE Id_user = $student_id";
    $sql2 = "UPDATE user SET money = money + 5 WHERE Id_user = $teacher_id";

    // Thực hiện truy vấn SQL
    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
        echo "Giao dịch thành công";
        header('Location: video_student.php');
    } else {
        echo "Lỗi trong quá trình thực hiện giao dịch: " . mysqli_error($conn);
    }
} else {
    echo "Bạn không đủ tiền";
}


?>