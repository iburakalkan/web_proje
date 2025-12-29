<?php

header('Content-Type: application/json; charset=utf-8');

include "db.php";


$name      = $_POST['bb-name'] ?? '';
$phone     = $_POST['bb-phone'] ?? '';
$time      = $_POST['bb-time'] ?? '';
$sube_id   = $_POST['bb-branch'] ?? ''; 
$berber_id = $_POST['bb-berber'] ?? ''; 
$date      = $_POST['bb-date'] ?? '';
$people    = $_POST['bb-number'] ?? 0;
$message   = $_POST['bb-message'] ?? '';

$phone = str_replace([' ', '-', '(', ')', '+'], '', $phone);
if (strlen($phone) == 11 && substr($phone, 0, 1) == '0') {
    $phone = substr($phone, 1);
}
if (strlen($phone) == 12 && substr($phone, 0, 2) == '90') {
    $phone = substr($phone, 2);
}

if (!preg_match('/^5[0-9]{9}$/', $phone)) {
    echo json_encode([
        "status" => "error", 
        "message" => "Lütfen telefon numaranızı başında '0' olmadan, 10 hane olarak giriniz (Örn: 5301234567)."
    ]);
    exit;
}

if (empty($name) || empty($date) || empty($sube_id) || empty($berber_id)) {
    echo json_encode([
        "status" => "error", 
        "message" => "Lütfen İsim, Tarih, Şube ve Berber seçimlerini eksiksiz yapın."
    ]);
    exit;
}

try {
    
    
    $sql = "INSERT INTO randevular (ad_soyad, telefon, randevu_saati, sube_id, berber_id, randevu_tarihi, kisi_sayisi, mesaj) 
            VALUES (:ad, :tel, :saat, :sube_id, :berber_id, :tarih, :kisi, :not)";
    
    $stmt = $pdo->prepare($sql);
    
    $sonuc = $stmt->execute([
        ':ad'        => $name,
        ':tel'       => $phone,     
        ':saat'      => $time,
        ':sube_id'   => $sube_id,   
        ':berber_id' => $berber_id,
        ':tarih'     => $date,
        ':kisi'      => $people,
        ':not'       => $message
    ]);

    if ($sonuc) {
        echo json_encode([
            "status" => "success", 
            "message" => "Randevunuz başarıyla oluşturuldu! Sizi " . $phone . " numarasından arayacağız."
        ]);
    } else {
        echo json_encode([
            "status" => "error", 
            "message" => "Kayıt sırasında teknik bir hata oluştu."
        ]);
    }

} catch (PDOException $e) {
    
    echo json_encode([
        "status" => "error", 
        "message" => "Veritabanı hatası: " . $e->getMessage()
    ]);
}
?>