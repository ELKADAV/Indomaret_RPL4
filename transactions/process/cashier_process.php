<?php

$nama_kasir = $_POST["nama_kasir"];
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];

INSERT INTO tabel_kasir VALUES ('id_kasir', 'nama_kasir', 'no_telp', 'alamat');