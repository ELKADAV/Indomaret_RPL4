<?php

include 'config.php';

$nama_kasir = $_POST["nama_kasir"];
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];

 mysqli_query($connection, "INSERT INTO tabel_kasir VALUES (NULL, '$nama_kasir', '$no_telp', '$alamat')");

 if(!$hasil){
    echo "<script>alert('Gagal menambahkan data kasir:" . mysqli_error($connection) . "');
    </script>";
 } else {
    echo "<script>
    alert('Data kasir berhasil ditambahkan.');
    window.location.href='../pages/cashier/list.php';
    </script>"
 }