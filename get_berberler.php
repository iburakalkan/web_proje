<?php
include 'db.php';

if (isset($_POST['sube_id'])) {
    $sube_id = $_POST['sube_id'];

    $stmt = $pdo->prepare("SELECT * FROM berberler WHERE sube_id = :sube_id");
    $stmt->execute([':sube_id' => $sube_id]);
    $berberler = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Berberleri JSON formatında döndür
    echo json_encode($berberler);
}
?>