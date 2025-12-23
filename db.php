<?php
$host = 'localhost';
$dbname = 'berber_db';
$username = 'root'; // Veritabanı kullanıcı adın
$password = '';     // Veritabanı şifren

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Bağlantı başarılı"; // Bunu test ettikten sonra silebilirsin
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>