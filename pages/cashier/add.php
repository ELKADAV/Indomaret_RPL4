<?php
//medefinisikan ROOTHPATH sebagai path ke direktori root proyek
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/Indomaret_RPL4');

include ROOTPATH . '/includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<center style="margin-top: 50px;">
<h1 style="color: black">Tambah Data Kasir</h1>

<form action="/Indomaret_RPL4/transactions/process/cashier_process.php" method="post"></form>
     <label for="">
     <input type="text" name="nama_kasir" placeholder="Nama Kasir" require>
     </label>
     <input type="text" name="no_telp" placeholder="No Telp" require>
     <input type="text" name="alamat" placeholder="Alamat" require>
     <input type="button" value="" name="Kirim">
     </body>
</html>