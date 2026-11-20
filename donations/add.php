<?php
// Mendefinisikan ROOTPATH sebagai path ke direktori root proyek
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/Indomaret_RPL4');
include ROOTPATH . '/includes/header.php';
?>
<center style="margin-top: 50px;">
    <h1>Tambah Data Kasir</h1>
    <form action="/Indomaret_RPL4/transactions/process/donations_process.php" method="POST">
        <div class="input-group">

        <input type="hidden" name="action" value="add">

        <label for="nama_donasi">Nama Donasi</label>
        <input type="text" name="nama_donasi" id="nama_donasi" class="custom-input"
        placeholder="Masukkan nama donasi..." require>

        <label for="harga_donasi">Harga Donasi</label>
            <input type="text" name="harga_donasi" id="harga_donasi" class="custom-input"
                placeholder="Masukkan harga donasi..." required>

        </div>
        <button type="submit" class="btn btn-primary">Tambah Donasi</button>
    </form>
</center>