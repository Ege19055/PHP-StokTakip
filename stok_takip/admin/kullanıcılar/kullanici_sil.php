<?php 
include '../../include/database.php'; ?>
<?php
  $id = $_GET["id"];
  $sorgu = $db->prepare("DELETE FROM kullanici where id='$id'");  
  $sorgu->execute();
  header("location:../../kullanici_listesi.php");
?>