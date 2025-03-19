<?php 
include 'include/database.php';
    if(!$_POST){
        include 'login/login_form.php';
    }else{
        session_start();
        ob_start();
        include 'login/login_form.php';
        include 'login/login_degisken.php';
    }


?>
