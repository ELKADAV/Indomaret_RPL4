<?php
// Mendefinisikan ROOTPATH sebagai path ke direktori root proyek
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/Indomaret_RPL4');
include ROOTPATH . '/includes/header.php';

$id_kasir = $_GET['id'] ?? '';
$query = mysqli_query($connection, "SELECT * FROM tabel_donasi WHERE id_donasi = '$id_donasi'");
$row = mysqli_fetch_assoc($query);
?>

<center style="margin-top: 50px;">
    <h1>Tambah Data Kasir</h1>
    <form action="/Indomaret_RPL4/transactions/process/cashier_process.php" method="POST">
    <!-- Penanda aksi edit dan ID data yang akan diubah -->
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id_donasi" value="<?php echo htmlspecialchars($row['id_donasi']); ?>">

    <!-- Menampilkan data lama di dalam kotak input -->
    <label>Nama Donasi:</label>
    <input type="text" name="nama_donasi" value="<?php echo htmlspecialchars($row['nama_donasi']); ?>" required>

    <label>Harga Donasi:</label>
    <input type="number" name="harga_donasi" value="<?php echo htmlspecialchars($row['harga_donasi']); ?>" required>

    <button type="submit">Update</button>
</form>
