<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
  <h1 style="align-text= center; text-transform= uppercase;">Tabel data kasir</h1>

  <div class="table-container">
<table class="styled-table">
  <thead>
    <tr>
        <th>No</th>
        <th>Nama_Donasi</th>
        <th>Harga_Donasi</th>
    </tr>
  </thead>
  <tbody>
    <?php
                include '../../config/config.php';
                $query = "SELECT * FROM tabel_donasi";
                $result = mysqli_query($connection, $query);
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama_donasi']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['harga_donasi']) . "</td>";
                    echo "</tr>";
                }
                ?>
  </tbody>
  </table>
  </div>

</body>
</html>