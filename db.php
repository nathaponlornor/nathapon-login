<?php
$servername = "powerbi-mysql-db.ctked9bh9r68.ap-southeast-1.rds.amazonaws.com"; // Hostname ของ RDS
$username = "admin"; // ชื่อผู้ใช้ฐานข้อมูล
$password = "Metro2023"; // รหัสผ่านฐานข้อมูล
$dbname = "mydatabase"; // ชื่อฐานข้อมูล

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
