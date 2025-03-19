<?php 

if(isset($_SESSION["sepet"])){
// session_destroy();
    $sepet = $_SESSION["sepet"];
    $total_count = $sepet["summary"]["total_count"];
    $total_price = $sepet["summary"]["total_price"];
    $shopping_products = $sepet["urunler"];
}else{
    $total_count = 0;
    $total_price = 0.0;
}

?>

<link rel="stylesheet" href="../../css/uye/menu.css">

<nav class="navbar navbar-default" style="padding-left:30px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Stok Takip</a>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
          <a class=""  href="index.php">Ürünler <span class="sr-only">(current)</span> </a>
          
        </li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="sepet.php">
                <span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
                <span class="badge cart-count"><?php echo $total_count; ?></span>
        </a> 
    </li>
      </ul>
    </div>
  </div>
</nav>

 