<?php

include '../config/config.php';

$nama_donasi    = $_POST["nama_donasi"];
$harga_donasi     = $_POST["harga_donasi"];

if($_POST["action"] == "add"){
    // menambahkan data kasir ke table_kasir di database indomaret_RPL4
    $hasil = mysqli_query($connection, "INSERT INTO tabel_donasi VALUES ( '$nama_donasi', '$harga_donasi')");

    if(!$hasil){
        echo "
        <script>
        alert('Gagal menambahkan data donasi: " . mysqli_error($connection) . "');
        </script>";
    } else {
        echo "<script>
        alert('Data kasir berhasil ditambahkan.');
        window.location.href='../donations/list.php';
        </script>";
    }
}else if($_POST["action"] == "edit"){
    $id_donasi = $_POST["id_donasi"];
    // mengupdate data kasir di table_kasir di database indomaret_RPL4
    $hasil = mysqli_query($connection, "UPDATE tabel_donasi SET nama_donasi='$nama_donasi', harga_donasi='$harga_donasi' WHERE id_donasi='$id_donasi'");

    if(!$hasil){
        echo "
        <script>
        alert('Gagal mengupdate data donasi: " . mysqli_error($connection) . "');
        </script>";
    } else {
        echo "<script>
        alert('Data kasir berhasil diupdate.');
        window.location.href='../donations/list.php';
        </script>";
    }

}else if($_POST["action"] == "delete"){
    $id_donasi = $_POST["id_donasi"];
    // menghapus data kasir di table_kasir di database indomaret_RPL4
    $hasil = mysqli_query($connection, "DELETE FROM tabel_donasi WHERE id_donasi='$id_donasi'");

    if(!$hasil){
        echo "
        <script>
        alert('Gagal menghapus data donasi: " . mysqli_error($connection) . "');
        </script>";
    } else {
        echo "<script>
        alert('Data kasir berhasil dihapus.');
        window.location.href='../donations/list.php';
        </script>";
    }
}