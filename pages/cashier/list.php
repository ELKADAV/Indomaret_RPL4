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
        <th>No_kasir</th>
        <th>Nama_kasir</th>
        <th>No_Telp</th>
        <th>Alamat</th>
    </tr>
  </thead>
  <tbody>
    <?php
                include '../../config/config.php';
                $query = "SELECT * FROM tabel_kasir";
                $result = mysqli_query($connection, $query);
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama_kasir']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['no_telp']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                    echo "</tr>";
                }
                ?>
  </tbody>
  </table>
  </div>

</body>
</html>