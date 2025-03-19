<?php 
ob_start(); session_start(); 

    if(!$_SESSION){
        header("location:login.php");
    }
?>