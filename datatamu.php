<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h3 {
            color: #333;
        }

        p {
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .tamu-entry {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 10px 0;
        }
    </style>
    <title>Data Tamu</title>
</head>
<body>
    <h3>Data Tamu</h3>

    <p>
        <a href="index.php">HOME</a>
    </p>

    <?php
        require 'connecttamu.php';

        $tampil = mysqli_query ($koneksi, "SELECT * FROM buku_tamu ORDER BY id_tamu ASC");

        while ($data = mysqli_fetch_array($tampil) ) {
            echo '<div class="tamu-entry">';
            echo "Nama : $data[namatamu] <br>";
            echo "Email : $data[emailtamu] <br>";
            echo "Number : $data[nomorhptamu] <br>";
            echo "Message : $data[pesan] <br>";
            echo '</div>';
        }
    ?>

</body>
</html>
