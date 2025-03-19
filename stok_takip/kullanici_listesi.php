<?php include 'include/database.php'; ?>
<?php 
include 'sidebar.php';
  $sorgu = $db->prepare("SELECT * FROM kullanici");
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

    <title>kullanici Listesi</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">kullanici Listesi</h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">Id</th>
              <th scope="col">İsim</th>
              <th scope="col">Soyisim</th>
              <th scope="col">Email</th>
              <th scope="col">Şifre</th>
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
                      <td><?php echo $satir["isim"]; ?></td>
                      <td>
                        <?php echo $satir["soyisim"]; ?>
                      </td>
                      <td>
                        <?php echo $satir["email"]; ?>
                      </td>
                      <td>
                        <?php echo $satir["sifre"]; ?>
                      </td>
                    
                    
                      <td><a href="<?php echo "admin/kullanıcılar/kullanici_sil.php?id=".$satir["id"]; ?>" class="more"> Sil</a></td>
            
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