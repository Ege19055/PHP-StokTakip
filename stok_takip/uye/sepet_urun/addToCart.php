<?php
session_start();
include "../../include/cart_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["urunID"])) {
    $urunID = $_POST["urunID"];

    
    $stmt = $db->prepare("INSERT INTO sepet (urun_id) VALUES (?)");
    $stmt->execute([$urunID]);

    echo "Ürün sepete eklendi!";

    header("Location: sepet.php");
    exit(); 
} else {
    http_response_code(400);
    echo "Hatalı istek!";
}
?>
