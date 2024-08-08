<?php
//Memanggil atau membutuhkan file function.php
require 'function.php';

//menampilkan semua data dari pemesan berdasarkan merk mobil secara descending
$mobil = query("SELECT * FROM pemesan ORDER BY mobil DESC");

// membuat nama file 
$filename = "Data rental-" . date('Ymd') . ".xls";

// Codingan untuk export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data rental.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($mobil as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                </tr>
        <?php endforeach; ?>
    </tbody>
</table>
 
