<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - Indomaret</title>
    <!-- Perbaikan nama folder proyek dari RPL4_Indomaret menjadi Indomaret_RPL4 -->
    <link rel="stylesheet" href="/Indomaret_RPL4/assets/css/indomaret.css">
</head>

<body>
    <?php
    // Mendefinisikan ROOTPATH sebagai path ke direktori root proyek
    define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/Indomaret_RPL4');
    include ROOTPATH . '/includes/header.php';
    
    // Memanggil config.php menggunakan ROOTPATH yang sudah didefinisikan di atas
    require_once ROOTPATH . '/config/config.php';
    ?>

    <h2>Daftar Produk</h2>

    <!-- Pembungkus Tabel Berfungsi untuk Responsivitas Mobile -->
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Diskon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM tabel_produk";
                $result = mysqli_query($connection, $query);
                if (!$result) {
    die("Query Error: " . mysqli_error($connection));
}
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    // Sesuaikan nama kolom di bawah ini dengan struktur di database Anda
                    echo "<td>" . htmlspecialchars($row['nama_produk']) . "</td>";
                    echo "<td>Rp " . number_format($row['harga_produk'], 0, ',', '.') . "</td>";
                    echo "<td>" . htmlspecialchars($row['diskon']) . "%</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
