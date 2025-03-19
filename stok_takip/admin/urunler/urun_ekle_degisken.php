<?php
include 'include/database.php';

$urun_kodu = mt_rand(1000000, 9999999);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $urun_ad = $_POST['urun_ad'];
    $urun_adet = $_POST['urun_adet'];
    $urun_fiyat = $_POST['urun_fiyat'];
    $kategori = $_POST['kategori'];

        $yol="assets/images/";
        $tmp_name			=	$_FILES["resim"]["tmp_name"];
        $name 			    = 	$_FILES["resim"]["name"];	
        $yuklemeVarmi = @move_uploaded_file($tmp_name, $yol.$name);
        if($yuklemeVarmi):
            $resim=$_FILES["resim"]["name"];
        endif;
    
    $query = $db->prepare("INSERT INTO urunler (urun_ad, urun_adet, urun_fiyat, urun_kodu, kategori, img_url) VALUES (:urun_ad, :urun_adet, :urun_fiyat, :urun_kodu, :kategori, :img_url)");
    $query->bindParam(':urun_ad', $urun_ad);
    $query->bindParam(':urun_adet', $urun_adet);
    $query->bindParam(':urun_fiyat', $urun_fiyat);
    $query->bindParam(':urun_kodu', $urun_kodu);
    $query->bindParam(':kategori', $kategori);
    $query->bindParam(':img_url', $resim);
   
    if ($query->execute()) {
      
    } else {
        
    }
}
?>