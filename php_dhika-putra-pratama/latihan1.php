<?php
    $nama = "Dhika Putra Pratama";
    $kelas = "XI RPL";
    $hobi = "Coding & Main game";
    $warna_latar = "#1a237e";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil diri</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial;
        }
        .kartu {
            background-color: <?php echo $warna_latar; ?>;
            color: white;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="kartu">
        <h2><?php echo $nama; ?></h2>
        <p><?php echo $kelas; ?></p>
        <hr>
        <p><?php echo $hobi; ?></p>
    </div>
</body>
</html>