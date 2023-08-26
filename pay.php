<?php
 session_start();
include('connect.php');

$student_id = $_SESSION['id'];
$student_pay = $_SESSION['money'];
$cost = 5;
if ($student_pay >= 5){
    //trừ tiền
    $sql = "UPDATE user SET money = money - 500 WHERE id = $student_id";
    $sql2 = "UPDATE user SET money = money + 500 WHERE id = $teacher_id";
}


?>