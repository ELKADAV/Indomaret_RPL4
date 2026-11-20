<?php
// Mendefinisikan ROOTPATH sebagai path ke direktori root proyek
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/Indomaret_RPL4');
include ROOTPATH . '/includes/header.php';

$id_donasi = $_GET['id'] ?? '';
$query = mysqli_query($connection, "SELECT * FROM tabel_kasir WHERE id_kasir = '$id_kasir'");
$row = mysqli_fetch_assoc($query);
?>

<center style="margin-top: 50px;">
    <h1>Tambah Data Kasir</h1>
    <form action="../../transactions/process/cashier_process.php" method="POST">
    <!-- Penanda aksi edit dan ID data yang akan diubah -->
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id_kasir" value="<?php echo htmlspecialchars($row['id_kasir']); ?>">

    <!-- Menampilkan data lama di dalam kotak input -->
    <label>Nama Kasir:</label>
    <input type="text" name="nama_kasir" value="<?php echo htmlspecialchars($row['nama_kasir']); ?>" required>

    <label>Nomor Telepon:</label>
    <input type="number" name="nomor_telepon" value="<?php echo htmlspecialchars($row['nomor_telepon']); ?>" required>

    <label>Alamat Kasir:</label>
    <input type="text" name="alamat_kasir" value="<?php echo htmlspecialchars($row['alamat']); ?>" required>

    <button type="submit">Update</button>
</form>
