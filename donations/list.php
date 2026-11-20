<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Indomaret_RPL4/assets/css/indomaret.css">
</head>

<body>
    <?php
    // Mendefinisikan ROOTPATH sebagai path ke direktori root proyek
    define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/Indomaret_RPL4');
    include ROOTPATH . '/includes/header.php';
    include ROOTPATH . '/config/config.php';
    ?>

    <h2>Daftar Pengguna Sistem</h2>

    <a href="add.php" class="btn-add">+ Tambah Kasir</a>

    <!-- Pembungkus Tabel Berfungsi untuk Responsivitas Mobile -->
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>No Donasi</th>
                    <th>Nama Donasi</th>
                    <th>Harga Donasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM tabel_donasi"; //untuk select semua data dari form add.php
                $result = mysqli_query($connection, $query); //hasil eksekusi dari $query menggunakan $connection
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                 <tr>
                    <td><?php echo $no++ ?></td> //echo untuk menampilkan data ke web seperti echo $nama
                    <td><?php echo htmlspecialchars($row['nama_donasi']); ?></td> //$row untuk mengambil data yang ada di mysql sebelum echo menampilkannya
                    <td><?php echo htmlspecialchars($row['harga_donasi']); ?></td>
                    </tr>
                    <a href="edit.php?id=<?php echo $row['id_donasi']; ?>">Edit</a>

                    <form action="donations_process.php" method="POST" style="display:inline;">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id_kasir" value="<?php echo $row['id_donasi']; ?>">
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus data donasi ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>