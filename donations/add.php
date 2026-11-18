<?php
// Mendefinisikan ROOTPATH sebagai path ke direktori root proyek
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/RPL4_Indomaret');
include ROOTPATH . '/includes/header.php';
?>
<center style="margin-top: 50px;">
    <h1>Tambah Data Donasi</h1>
    <form action="" method="post">
        <div class="input-group">
            <input type="text" name="id_donasi" id="id_donasi" class="custom-input" placeholder="Masukkan Nomor donasi..."
                required>
            <input type="text" name="nama_donasi" id="nama_donasi" class="custom-input"
                placeholder="Masukkan nama donasi..." required>
            <input type="text" name="harga_donasi" id="harga_donasi" class="custom-input" placeholder="Masukkan harga donasi..."
                required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Donasi</button>
    </form>
</center>