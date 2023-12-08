<?php

require 'connecttamu.php';

$namatamu = $_POST['name'];
$emailtamu = $_POST['email'];
$numbertamu = $_POST['number'];
$pesantamu = $_POST['msg'];


$input = mysqli_query($koneksi, "INSERT INTO buku_tamu (namatamu, emailtamu, nomorhptamu, pesan) VALUES ('$namatamu','$emailtamu','$numbertamu','$pesantamu')");

header ('location:datatamu.php');

?>