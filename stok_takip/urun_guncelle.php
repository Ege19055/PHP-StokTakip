<?php 
    include 'include/database.php';

    if(!$_POST){
        include 'admin/urunler/urun_guncelle_form.php';
    }else{
        include 'admin/urunler/urun_guncelle_form.php';
        include 'admin/urunler/urun_guncelle_degisken.php';
    }
?>