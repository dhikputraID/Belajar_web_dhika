<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesin pencari RPL</title>
  </head>
  <body>
    <h2>Mesin pencari RPL</h2>
    <form action="" method="get">
        <input type="text" name="kata_kunci" id="kata_kunci" placeholder="Cari apa saja..."/>
        <button type="submit">Cari</button>
    </form>
    <hr>
    
    <?php
        if(isset($_GET['kata_kunci'])) {
            $cari = $_GET['kata_kunci'];
            echo "<p>Menampilkan hasil pencarian untuk: <b>$cari</b></p>";
        }
    ?>
  </body>
</html>