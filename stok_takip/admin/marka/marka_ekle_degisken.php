    <style>
    .deneme{
       margin-bottom: 180px;
       margin-right: 200px;
       margin-left: 20px;
       font-size:small;
    }
    .cogin-box{
        justify-content: center;
        justify-items: center;
        align-items: center;
    }
</style>

    
</body>
</html>
<?php
include 'include/database.php';
    $kategori= strip_tags(trim(strtolower($_POST["kategori"])));
    $marka_isim = strip_tags(trim(strtolower($_POST["marka_ad"])));

    if(!$kategori || !$marka_isim){
        ?>
                <div class="cogin-box">
                <h4 class="deneme">Alanlar Boş Bırakılamaz</h4>
                </div>
        <?php
    }else{
            if(strlen($marka_isim)<3 || strlen($marka_isim)>60){
                    ?>
                     <div class="cogin-box">
                       <h2 class="deneme">Model İsmi Yanlış Girildi</h2>
                    </div>
                    <?php
            }else{
                $sorgu2 = $db->prepare("INSERT INTO marka set marka_ad=?,kategori=?");
                $sorgu2->execute([$marka_isim,$kategori]);
                
                ?>
                <div class="cogin-box">
                <h4 class="deneme">Başarılı</h4>
                </div>
                <?php
                header("refresh:2;url=marka.php");
            }
        }
?>
