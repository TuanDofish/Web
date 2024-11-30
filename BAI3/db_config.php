<?php
$host = "localhost"; // Máy chủ MySQL
$dbname = "students_db"; // Tên cơ sở dữ liệu
$username = "root"; // Tài khoản MySQL
$password = ""; // Mật khẩu MySQL

// Kết nối tới MySQL
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối CSDL thất bại: " . $e->getMessage());
}
?>
