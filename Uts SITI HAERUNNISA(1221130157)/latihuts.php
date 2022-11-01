<?php
if (isset($_POST['Tambah'])){
    $Jumlah = $_POST['Jumlah'];
    $Tanggal = $_POST['Tanggal'];
    $Penghutang = $_POST['Penghutang'];
    $Alasan = $_POST['Alasan'];
        echo "<table width = 50% table border = 1>
        <tr>
    <th>Design Formulir</th>
    <td></td>
    <th>Tambah Hutang</th>
    </tr>
    <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td>$Jumlah</td>
    </tr>
    <tr>
    <td>Tanggal</td>
    <td>:</td>
    <td>$Tanggal</td>
    </tr>
    <tr>
    <td>Penghutang</td>
    <td>:</td>
    <td>$Penghutang</td>
    </tr>
    <tr>
    <td>Alasan</td>
    <td>:</td>
    <td>$Alasan</td>
    </tr>
    </table>";
}
?>