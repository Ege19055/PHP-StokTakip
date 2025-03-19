<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Listesi</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="../../static/style.css">
</head>
<body>
  
<?php include "../../include/cart_db.php"; ?>

<?php 


$urunler = $db->query("SELECT * FROM urunler" ,PDO::FETCH_OBJ)->fetchAll();


?>


<?php include "navbar.php"; ?>
<?php include '../sidebar_uye.php'; ?>

  <div class="container">
    <h2 class="text-center">Ürün Listesi</h2>
    <hr>
    <div class="row">

      <?php foreach($urunler as $urun) { ?>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="../../assets/images/<?php echo $urun->img_url; ?>" alt="<?php echo $urun->urun_ad; ?>" width="300px">
            <div class="caption">
              <h3><?php echo $urun->urun_ad; ?></h3>
              <p><?php echo $urun->urun_adet." Adet"; ?></p>
              <p class="text-right price-container"><strong><?php echo $urun->urun_fiyat; ?> TL</strong></p>
              <p>
                <button urun-id="<?php echo $urun->urun_id; ?>" class="btn btn-primary btn-block addToCartBtn" role="button">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Sepete Ekle
                </button>
              </p>
            </div>
          </div>
        </div>

        <?php } ?>
       
      </div>
  </div>


 

<script src="../../assets/js/jquery-3.6.0.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/custom.js"></script>
<script src="../../static/script.js"></script>
<!-- <script>
$(document).ready(function(){
    $(".addToCartBtn").click(function(){
        var urunID = $(this).attr("urun-id"); 
        addToCart(urunID);
    });

    function addToCart(urunID) {

        $.ajax({
            type: "POST",
            url: "addToCart.php", 
            data: {urunID: urunID},
            success: function(response) {
                alert("Ürün sepete eklendi!");
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
});
</script> -->

</body>

</html>