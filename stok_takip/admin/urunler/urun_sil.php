<?php
include '../../include/database.php';
  $id = $_GET["id"];
  $sorgu = $db->prepare("DELETE FROM urunler where urun_id='$id'");  
  $sorgu->execute();
  header("location:../../urun_listesi.php");
?>