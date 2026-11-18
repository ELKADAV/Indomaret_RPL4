<?php
// Mendefinisikan ROOTPATH sebagai path ke direktori root proyek
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/Indomaret_RPL4');
include ROOTPATH . '/includes/header.php';
?>
<center style="margin-top: 50px;">
    <h1>Tambah Data Kasir</h1>
    <form action="" method="post">
        <div class="input-group">
            <input type="text" name="nama_produk" id="username" class="custom-input" placeholder="Masukkan nama produk..."
                required>
            <input type="text" name="harga" id="harga" class="custom-input"
                placeholder="Masukkan harga..." required>
            <input type="text" name="diskon" id="diskon" class="custom-input" placeholder="Masukkan diskon..."
                required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kasir</button>
    </form>
</center>