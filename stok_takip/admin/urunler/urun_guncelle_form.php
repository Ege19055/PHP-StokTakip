<?php 
$id = $_GET["id"];
$sorgu = $db->prepare("SELECT * FROM urunler where urun_id=?");
$sorgu->execute([$id]);

if($sorgu->rowCount()){

    foreach($sorgu as $satir){
        ?><?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="static/styles.css">
<div class="login-box">

  <h2>Ürün Güncelle</h2>
  <form action="" method="POST">
  <div class="user-box">
      <input type="text" name="urun_ad" value="<?php echo $satir["urun_ad"]; ?>">
      <label>Ürün İsmi</label>
    </div>
    <div class="user-box">
      <input type="number" name="urun_adet" value="<?php echo $satir["urun_adet"]; ?>">
      <label>Ürün Adet</label>
    </div>
    <div class="user-box">
      <input type="number" name="urun_fiyat" value="<?php echo $satir["urun_fiyat"]; ?>">
      <label>Ürün Fiyat</label>
    </div>
    <div class="user-box">
            <input type="file" name="resim" accept="image/*" value="<?php echo $satir["img_url"]; ?>">
            <label>Resim</label>
        </div>
    <div class="user-box">
            <select name="kategori" id="marka_kategori">
                <?php
                  $sql1 = $db->query("SELECT * FROM urunler WHERE urun_id = '$_GET[id]'");
                  $row1 = $sql1->fetch(PDO::FETCH_ASSOC);

                  ?>
                  <option selected><?=$row1["kategori"]?></option>
                  <?php
                  
                ?>
                <optgroup label="Kategoriler" style="background-color: #141E30;">
                  <?php 
                  $sql = $db->query("SELECT * FROM marka");

                  while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <option value=""><?=$row["marka_ad"]?> - <?=$row["kategori"]?></option>
                        <?php
                      }
                  ?>
                </optgroup>
            </select>
        </div>
 
    <button type="submit">Güncelle</button>
  </form>
</div>
<?php
    }
}
?>