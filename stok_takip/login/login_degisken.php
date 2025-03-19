<?php 
$email = $_POST["email"];
$sifre = $_POST["sifre"];

$hata = [];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Email formatı hatalı');</script>";
} elseif (strlen($sifre) < 6 || strlen($sifre) > 18) {
    echo "<script>alert('Şifreniz 6 karakterden az 18 karakterden fazla olamaz');</script>";
} else {
    $sorgu4 = $db->prepare("SELECT sifre FROM kullanici WHERE email=?");
    $sorgu4->execute([$email]);
    $verisifre = $sorgu4->fetchColumn();

    if (!$verisifre || password_verify($sifre, $verisifre)) {
        echo "<script>alert('Şifreler uyuşmuyor');</script>"; 
    } else {
        $sorgu = $db->prepare("SELECT * FROM kullanici WHERE email=?");
        $sorgu->execute([$email]);
        $a = $sorgu->fetch(PDO::FETCH_ASSOC);

        if ($a) {
            $_SESSION["email"] = $a["email"];
            $_SESSION["sifre"] = $a["sifre"];
            $isim = $a["isim"];

            $tabloAdi = ($a["rol"] == 'admin') ? 'admin' : 'uye';
            $yonlendirilecekSayfa = ($a["rol"] == 'admin') ? 'admin/admin.php' : 'uye/index.php';

            $giris = date('Y-m-d H:i:s');
          $sorgu3 = $db->prepare("INSERT INTO kullanici_log (email, isim, giris) VALUES (?, ?, ?)");
            $sorgu3->execute([$email, $isim, $giris]);
            header("location: $yonlendirilecekSayfa");
            exit();
        } else {
            echo "<script>alert('Giriş bilgileri hatalı');</script>";
        }
    }
}
?>
