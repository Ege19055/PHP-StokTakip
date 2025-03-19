<?php 
    include 'include/database.php';

    if(!$_POST){
        include 'admin/marka/marka_guncelle_form.php';
    }else{
        include 'admin/marka/marka_guncelle_form.php';
        include 'admin/marka/marka_guncelle_degisken.php';
    }
?>