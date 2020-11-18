<?php
set_time_limit(1800);
$namaFile = "anggota_excel(".date('d-m-Y').").xls";
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$namaFile");
header("Content-Transfer-Encoding: binary ");

?>

<h2>Laporan Anggota</h2>

<table border="1">
	<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Prodi</th>
    </tr>

    <?php

    $mysqli = mysqli_connect("127.0.0.1", "root", "", "rpl");

    $no = 1;

    $query = "SELECT * FROM members";
    $result = $mysqli->query($query);

    // $sql = mysqli_query($link, "SELECT * FROM tanggota");
    while ($data = $result->fetch_array()) {

    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['tempat_lahir']; ?></td>
        <td><?php echo $data['tempat_lahir']; ?></td>
        <td><?php echo $data['jenis_kelamin']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
    </tr>

    <?php

        }

    ?>

</table>
