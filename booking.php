<?php
// Türkçe karakter ve JSON formatı ayarı
header('Content-Type: application/json; charset=utf-8');

include "db.php";

// 1. Formdan gelen verileri alıyoruz
$name      = $_POST['bb-name'] ?? '';
$phone     = $_POST['bb-phone'] ?? '';
$time      = $_POST['bb-time'] ?? '';
$sube_id   = $_POST['bb-branch'] ?? ''; // Artık Şube ID geliyor (Örn: 1)
$berber_id = $_POST['bb-berber'] ?? ''; // Yeni: Berber ID geliyor (Örn: 2)
$date      = $_POST['bb-date'] ?? '';
$people    = $_POST['bb-number'] ?? 0;
$message   = $_POST['bb-message'] ?? '';

// --- Telefon Numarası Temizleme ve Kontrol (Senin eski kodun) ---
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
// -------------------------------------------------------------

// 2. Zorunlu Alan Kontrolü (Berber ve Şube kontrolü eklendi)
if (empty($name) || empty($date) || empty($sube_id) || empty($berber_id)) {
    echo json_encode([
        "status" => "error", 
        "message" => "Lütfen İsim, Tarih, Şube ve Berber seçimlerini eksiksiz yapın."
    ]);
    exit;
}

try {
    // 3. Veritabanına Kayıt (Sorgu değişti)
    // Artık 'sube' yerine 'sube_id' ve 'berber_id' sütunlarına kayıt yapıyoruz.
    
    $sql = "INSERT INTO randevular (ad_soyad, telefon, randevu_saati, sube_id, berber_id, randevu_tarihi, kisi_sayisi, mesaj) 
            VALUES (:ad, :tel, :saat, :sube_id, :berber_id, :tarih, :kisi, :not)";
    
    $stmt = $pdo->prepare($sql);
    
    $sonuc = $stmt->execute([
        ':ad'        => $name,
        ':tel'       => $phone,     
        ':saat'      => $time,
        ':sube_id'   => $sube_id,   // Veritabanındaki INT alana gidiyor
        ':berber_id' => $berber_id, // Veritabanındaki INT alana gidiyor
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
    // Hata mesajını yakala
    echo json_encode([
        "status" => "error", 
        "message" => "Veritabanı hatası: " . $e->getMessage()
    ]);
}
?>