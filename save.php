<?php
include 'connection.php';

// Formdan gelen PHP kodunu al
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];

    // Veritabanına ekle
    $stmt = $conn->prepare("INSERT INTO kodlar (code) VALUES (:code)");
    $stmt->execute(['code' => $code]);

    echo "Kod başarıyla eklendi!";
}

