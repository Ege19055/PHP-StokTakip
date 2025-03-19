<?php 
include 'sidebar.php';
include 'include/database.php';
if(!$_POST){
    include 'admin/urunler/urun_ekle_form.php';
}else{
    include 'admin/urunler/urun_ekle_form.php';
    include 'admin/urunler/urun_ekle_degisken.php';
}
?>