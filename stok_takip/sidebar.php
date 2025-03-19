<?php include 'include/giris_kontrol2.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="side_menu">
				  <div class="burger_box">
					<div class="menu-icon-container">
					  <a href="#" class="menu-icon js-menu_toggle closed">
						<span class="menu-icon_box ">
						  <span class="menu-icon_line menu-icon_line--1 bg-gray-500"></span>
						  <span class="menu-icon_line menu-icon_line--2 bg-gray-500"></span>
						  <span class="menu-icon_line menu-icon_line--3 bg-gray-500"></span>
						</span>
					  </a>
					</div>
				  </div>
	  
				  <div class="px-5">
					<h2 class="menu_title">Marka</h2>
					<ul class="list_load">
					  <li><a class="list_item" href="marka.php">Marka Ekleme</a></li>
					  <li><a class="list_item" href="marka_listesi.php">Marka Listele</a></li>
					</ul>
                    <h2 class="menu_title mt-3">Ürün</h2>
					<ul class="list_load">
					  <li><a class="list_item" href="urun.php">Ürün Ekleme</a></li>
					  <li><a class="list_item" href="urun_listesi.php">Ürün Listele</a></li>
					</ul>
					<h2 class="menu_title mt-3">kullanici</h2>
					<ul class="list_load">
					<li><a class="list_item" href="admin/duyurugonder.php">Duyuru Gonder</a></li>
                    <li><a class="list_item" href="kullanici_listesi.php">kullanici Listesi</a></li>
					</ul>
                    <h2 class="menu_title mt-3">Diğer</h2>
					<ul class="list_load">
					
                    <li><a class="list_item" href="admin/admin.php">Anasayfa</a></li>
                    <li><a class="list_item" href="cikis.php">Çıkış</a></li>
					  
					</ul>
					<div class="spacer_box"><p><hr></p></div>
				  </div>
				</div>
			  </div>
		</div>
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="static/script.js"></script>
</body>
</html>