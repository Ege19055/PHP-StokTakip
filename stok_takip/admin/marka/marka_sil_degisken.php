<?php 
include '../../include/database.php'; ?>
<?php
  $id = $_GET["id"];
  $sorgu = $db->prepare("DELETE FROM marka where id='$id'");  
  $sorgu->execute();
  header("location:../../marka_listesi.php");
?>