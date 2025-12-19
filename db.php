<?php
$servername = "localhost";
$username = "root";
$password = "12345678"; // XAMPP varsayılan şifresi boştur
$dbname = "barber_db";

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>