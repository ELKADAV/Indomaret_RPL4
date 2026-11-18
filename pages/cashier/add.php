<?php
// Mendefinisikan ROOTPATH sebagai path ke direktori root proyek
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/RPL4_Indomaret');
include ROOTPATH . '/includes/header.php';
?>
<center style="margin-top: 50px;">
    <h1>Tambah Data Kasir</h1>
    <form action="" method="POST">
        <div class="input-group">

        <input type="hidden" name="action" value="add">

        <label for="nama_kasir">Nama Kasir</label>
        <input type="text" name="nama_kasir" id="nama_kasir" class="custom-input"
        placeholder="Masukkan nama kasir..." require>
        
        <label for="no_telp">Nomor Telepon</label>
            <input type="text" name="no_telp" id="no_telp" class="custom-input"
                placeholder="Masukkan nomor telepon Kasir..." required>

                <label for=""alamat></label>
            <input type="text" name="alamat" id="alamat" class="custom-input" placeholder="Masukkan alamat Kasir..."
                required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kasir</button>
    </form>
</center>