<?php
include "db.php";

/* Formdan gelen veriler */
$name    = $_POST['bb-name'] ?? '';
$phone   = $_POST['bb-phone'] ?? '';
$time    = $_POST['bb-time'] ?? '';
$branch  = $_POST['bb-branch'] ?? '';
$date    = $_POST['bb-date'] ?? '';
$people  = $_POST['bb-number'] ?? 0;
$message = $_POST['bb-message'] ?? '';


/* 🔴 TELEFON KONTROLÜ – İŞTE BURAYA */
if (!preg_match('/^(\+90|0)[0-9]{10}$/', $phone)) {
    echo "❌ Telefon numarası geçersiz";
    exit;
}

/* 🔴 BOŞ ALAN KONTROLÜ */
if ($name == '' || $date == '') {
    echo "❌ Lütfen zorunlu alanları doldurun";
    exit;
}


/* SQL kaydı */
$sql = "INSERT INTO bookings 
(name, phone, time, branch, date, people, message)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssis",
    $name,
    $phone,
    $time,
    $branch,
    $date,
    $people,
    $message
);

if ($stmt->execute()) {
    echo "✅ Randevu başarıyla kaydedildi";
} else {
    echo "❌ Kayıt sırasında hata oluştu";
}
