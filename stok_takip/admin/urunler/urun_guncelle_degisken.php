<?php
$urun_ad = strip_tags(trim($_POST["urun_ad"]));
$urun_adet =$_POST["urun_adet"];
$urun_fiyat = $_POST["urun_fiyat"];
$urun_id = $_GET['id'];

if(!$urun_ad || !$urun_adet || !$urun_fiyat) {
    ?>
    <div class="cogin-box">
        <h2 class="deneme">Alanlar Boş Bırakılamaz</h2>
    </div>
    <?php
} else {
    
    if (strlen($urun_ad) < 3 || strlen($urun_ad) > 60) {
        ?>
        <div class="cogin-box">
            <h2 class="deneme">Ürün İsmi Yanlış Girildi</h2>
        </div>
        <?php
    } else {
        if (empty($urun_fiyat)) {
            ?>
            <div class="cogin-box">
                <h2 class="deneme">Ürün Fiyatı Girilmedi</h2> 
            </div>
            <?php
        } else {
            $sorgu = $db->prepare("UPDATE urunler SET urun_ad=?, urun_adet=?, urun_fiyat=? WHERE urun_id=?");
            $sorgu->execute([$urun_ad, $urun_adet, $urun_fiyat, $urun_id]);
            header("location: urun_listesi.php");
        }
    }
}
?>
