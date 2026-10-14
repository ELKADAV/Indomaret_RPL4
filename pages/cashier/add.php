<?php
//medefinisikan ROOTHPATH sebagai path ke direktori root proyek
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/dete_maret');

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

<form action="" method="post"></form>
     <label for="">
     <input type="text" name="nama_kasir" placeholder="Nama Kasir" require>
     </label>
     <input type="text" name="no_telp" placeholder="No Telp" require>
     <input type="text" name="alamat" placeholder="Alamat" require>
     </body>
</html>