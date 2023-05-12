<?php
    $kode=$_GET['kode'];
    $judul=$_GET['judul'];
    $penerbit=$_GET['penerbit'];
    $pengarang=$_GET['pengarang'];
    $tahun=$_GET['tahun'];
    echo "<table width='200' border='0'>
        <tr>
            <td>Kode Buku</td>
            <td>:</td>
            <td>$kode</td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td>$judul</td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td>$penerbit</td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td>$pengarang</td>
        <tr>
            <td>Tahun Terbit</td>
            <td>:</td>
            <td>$tahun</td>
        </tr></table>";
?>