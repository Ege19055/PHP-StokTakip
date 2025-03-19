<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duyuru Gönder</title>
 <link rel="stylesheet" href="../css/uye/admin_duyuru.css">
 <link rel="stylesheet" href="../static/style.css">
</head>
<body>
    <div class="container">
        <div class="div">
            <h1>Duyuru Gönder</h1>
        </div>
        
        <form action="duyurugonder.php" method="post">
            <div class="form-group">
                <label for="duyuru_metni">Duyuru Metni:</label>
                <textarea id="duyuru_metni" name="duyuru" placeholder="Duyuru metnini buraya yazınız..." required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Duyuru Gönder</button>
            </div>
        </form>
        <?php
        include('../include/database.php');

        if(isset($_POST['duyuru'])) {
            $duyuru = $_POST['duyuru'];

            $sql = "INSERT INTO duyuru_tablosu (duyuru_metni) VALUES (:duyuru)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':duyuru', $duyuru);

            if ($stmt->execute()) {
                echo "<p class='success-message'>Duyuru başarıyla eklendi</p>";
            } else {
                echo "<p class='error-message'>Duyuru eklenirken bir hata oluştu</p>";
            }
        }
        
        ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../static/script.js"></script>
</body>
</html>

