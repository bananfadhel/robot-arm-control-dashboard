<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slider";

$motor1 = $_POST["motor1"];
$motor2 = $_POST["motor2"];

// طباعة القيم
echo "Motor1: $motor1<br>";
echo "Motor2: $motor2<br>";

// إنشاء الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// استعلام SQL لإدخال القيم
$sql = "INSERT INTO slider1 (id, motor1, motor2) 
        VALUES (NULL, '$motor1', '$motor2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
