<?php include 'include/database.php'; ?>
<?php 
include 'sidebar.php';
  $sorgu = $db->prepare("SELECT * FROM marka");
  $sorgu->execute();
 
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Marka Listesi</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">Marka Listesi</h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">Id</th>
              <th scope="col">Marka İsim</th>
              <th scope="col">Kategori</th>
              <th scope="col">İşlemler</th>
            </tr>
          </thead>
          <tbody>
            <?php if($sorgu->rowCount()){ ?>
              <?php foreach($sorgu as $satir){ ?>
            <tr scope="row">

              
                      
                      <td>
                        <?php echo $satir["id"]; ?>
                      </td>
                      <td><?php echo $satir["marka_ad"]; ?></td>
                      <td>
                        <?php echo $satir["kategori"]; ?>
                      </td>
                    
                      <td><a href="<?php echo "marka_guncelle.php?id=".$satir["id"];?>"class="more">Güncelle /</a><a href="<?php echo "admin/marka/marka_sil_degisken.php?id=".$satir["id"]; ?>" class="more"> Sil</a></td>
            
            </tr>

            
            <?php } ?>
            <?php } ?>
          </tbody>
        </table>
      </div>


    </div>

  </div>
  </body>
</html>