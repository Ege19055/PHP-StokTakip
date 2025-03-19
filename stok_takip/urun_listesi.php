<?php include 'include/database.php'; ?>
<?php include 'sidebar.php'; ?>
<?php 
$sorgu = $db->prepare("SELECT * FROM urunler");
$sorgu->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürünler Listesi</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="content">
    <div class="container">
        <h2 class="mb-5">Ürünler Listesi</h2>

        <div class="table-responsive">
            <table class="table table-striped custom-table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Ürün Adı</th>
                        <th scope="col">Ürün Adet</th>
                        <th scope="col">Ürün Fiyat</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Ürün Resim</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($sorgu->rowCount() > 0): ?>
                        <?php foreach($sorgu as $satir): ?>
                            <tr>
                                <td><?php echo $satir["urun_id"]; ?></td>
                                <td><?php echo $satir["urun_ad"]; ?></td>
                                <td><?php echo $satir["urun_adet"]; ?></td>
                                <td><?php echo $satir["urun_fiyat"]; ?></td>
                                <td><?php echo $satir["kategori"]; ?></td>
                                <td><img src="assets/images/<?php echo $satir["img_url"]; ?>"width="80px" heigth="10px"></td>                                
                                <td>
                                    <a href="<?php echo "urun_guncelle.php?id=".$satir["urun_id"]; ?>" class="more">Güncelle</a> /
                                    <a href="<?php echo "admin/urunler/urun_sil.php?id=".$satir["urun_id"]; ?>" class="more">Sil</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">Ürün bulunamadı.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
