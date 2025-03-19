<?php 
    include 'include/database.php';

    if(!$_POST){
        include 'admin/marka/marka_sil_form.php';
    }else{
        include 'admin/marka/marka_sil_form.php';
        include 'admin/marka/marka_sil_degisken.php';
    }
?>