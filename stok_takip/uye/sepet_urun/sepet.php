<?php
session_start();
include "navbar.php";
include "../../include/cart_db.php"; 


$stmt = $db->query("SELECT * FROM urunler");
$sepet_urun = $stmt->fetchAll(PDO::FETCH_OBJ);
$total_count = count($sepet_urun);



$total_price = 0;
foreach ($sepet_urun as $urun) {
    $total_price += $urun->urun_fiyat;
}

?>
 <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="../../css/uye/menu.css">
<div class="container">
    <?php if ($total_count > 0) { ?>
        <h2 class="text-center">Sepetinizde <strong class="color-danger"><?php echo $total_count; ?></strong> adet ürün bulunmaktadır</h2>
        <hr><?php include '../sidebar_uye.php'; ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-hover table-bordered table-striped">
                    <thead> 
                        <th class="text-center">ürün Resim</th>
                        <th class="text-center">Ürün Adı</th>
                        <th class="text-center">ürün adet</th>
                        <th class="text-center">Fiyatı</th>
                    </thead>
                    <tbody>
                        <?php foreach ($sepet_urun as $urun) { ?>
                            <tr>
                            <td><img src="../../assets/images/<?php echo $urun->img_url; ?>" width="80px" height="70px"></td>                                
                            <td class="text-center"><?php echo $urun->urun_ad; ?></td> 
                            <td class="text-center"><?php echo $urun->urun_adet; ?></td>
                            <td class="text-center"><strong><?php echo $urun->urun_fiyat; ?> TL</strong></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <th colspan="2" class="text-right">
                            Toplam Ürün : <span class="color-danger"><?php echo $total_count; ?> adet</span>
                        </th>
                        <th colspan="3" class="text-right">
                            Toplam Tutar : <span class="color-danger"><?php echo $total_price; ?> TL</span>
                        </th>
                        
                    </tfoot>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-info">
            <strong>Sepetinizde Henüz bir ürün bulunmamaktadır. Eklemek için <a href="index.php">Tıklayınız</a></strong>
        </div>
    <?php } ?>
</div>

<script src="../../assets/js/jquery-3.6.0.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/custom.js"></script>
</body>

</html>
