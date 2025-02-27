
<?php
include 'connection.php';

header("Content-Type: application/json");

try {
    $stmt = $conn->query("SELECT code FROM kodlar ORDER BY id DESC LIMIT 1;");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($row ? ['code' => $row['code']] : ['error' => 'Kod bulunamadı']);
} catch (PDOException $e) {
    echo json_encode(["error" => "Veritabanı hatası: " . $e->getMessage()]);
}
?>