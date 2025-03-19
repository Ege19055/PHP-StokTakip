

<?php 
ob_start();
    include 'include/database.php';
    $isim = strip_tags(trim($_POST["isim"]));
    $soyisim = strip_tags(trim($_POST["soyisim"]));
    $email = $_POST["email"];
    $sifre = strip_tags(trim($_POST["sifre"]));

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        ?>
            <script>alert("Email formatı hatalı");</script>
        <?php
      }else{
        if(strlen($sifre)<6 || strlen($sifre)>18){
            ?>
                <script>alert("Şifreniz 6 karakterden az 18 karakterden fazla olamaz");</script>
            <?php
          } else{
            $select = $db->prepare("SELECT email FROM kullanici");
            $select->execute();
            foreach($select as $d){
                $veriemail =  $d["email"];
              }
        
              if($veriemail==$email){
                ?>
                <script>alert("Böyle bir email sisteme kayıtlı!");</script>
                <?php
              }else{
                $tarih = date("Y.m.d H:i:s");
                $insert = $db->prepare("INSERT INTO kullanici set isim=?,soyisim=?,email=?,sifre=?,hesap_tarih=?,rol=?");
                $insert->execute([$isim,$soyisim,$email,$sifre,$tarih,"uye"]);
                header("refresh:1;url=login.php");
              }
          }
      }
?>