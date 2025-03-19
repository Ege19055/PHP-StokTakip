<?php 
$id = $_GET["id"];
$sorgu = $db->prepare("SELECT * FROM marka where id=?");
$sorgu->execute([$id]);

if($sorgu->rowCount()){

    foreach($sorgu as $satir){
        ?>
<link rel="stylesheet" href="static/styles.css">
<div class="login-box">
  <h2>marka Güncelle</h2>
  <form action="" method="POST">
  <div class="user-box">
      <input type="text" name="marka_ad" value="<?php echo $satir["marka_ad"]; ?>" >
      <label>Marka Ad</label>
    </div>
    <div class="user-box">
      <input type="text" name="kategori" value="<?php echo $satir["kategori"]; ?>" >
      <label>marka Ad</label>
    </div>
  
    <button type="submit">Güncelle</button>
  </form>
</div>

<script src="static/script.js"></script>
        <?php
    }
}
?>
