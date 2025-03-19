<?php
$sorgu = $db->prepare("SELECT * FROM marka");
$sorgu->execute();
?>

<link rel="stylesheet" href="static/styles.css">
<div class="login-box">
    <h2>Ürün Ekle</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <div class="user-box">
            <input type="text" name="urun_ad">
            <label>Ürün İsmi</label>
        </div>
        <div class="user-box">
            <input type="number" name="urun_adet">
            <label>Ürün Adet</label>
        </div>
        <div class="user-box">
            <input type="number" name="urun_fiyat">
            <label>Ürün Fiyat</label>
        </div>
        <div class="user-box">
            <input type="file" name="resim" accept="image/*">
            <label>Resim</label>
        </div>
        <div class="user-box">
            <select name="kategori" id="marka_kategori">
                <option>Marka ve Kategori Seçiniz</option>
                <?php foreach ($sorgu as $marka) : ?>
                    <option value="<?php echo $marka["marka_ad"].' - '.$marka["kategori"]; ?>">
                        <?php echo $marka["marka_ad"].' - '.$marka["kategori"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit">Ekle</button>
    </form>
</div>
