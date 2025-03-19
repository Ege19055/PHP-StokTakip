<?php
    $marka_isim = strip_tags(trim(strtolower($_POST["kategori"])));
    $kategori = strip_tags(trim(strtolower($_POST["marka_ad"])));

    if(!$kategori || !$marka_isim){
        ?>
                <div class="cogin-box">
                <h2 class="deneme">Alanlar Boş Bırakılamaz</h2>
                </div>
        <?php
    }else{
        if(strlen($kategori)<3 || strlen($kategori)>60){
            ?>
             <div class="cogin-box">
               <h2 class="deneme">kategori İsmi Yanlış Girildi</h2>
            </div>
            <?php
        }else{
            if(strlen($marka_isim)<3 || strlen($marka_isim)>60){
                    ?>
                     <div class="cogin-box">
                       <h2 class="deneme">marka İsmi Yanlış Girildi</h2>
                    </div>
                    <?php
            }else{
                
                $sorgu = $db->prepare("UPDATE marka set marka_ad=?,kategori=? where id=?");
                $sorgu->execute([$kategori,$marka_isim,$id]);
                header("location:marka_listesi.php");
            }
        }
    }
?>
