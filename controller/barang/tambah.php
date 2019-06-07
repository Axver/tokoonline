<?php

$kode_barang=$_GET['kode_barang'];
$nama_barang=$_GET['nama_barang'];
$no_hp=$_GET['no_hp'];
$pesan=$_GET['pesan'];
$kategori=$_GET['kategori'];
$harga=$_GET['harga'];
include "../connect.php";
$id='1';
$select_id=mysqli_query($con,"SELECT MAX(id_kategori) as max FROM data_barang");
while($row = mysqli_fetch_assoc($select_id))
{
    $id = $row['max'];
}
$id=$id+1;
$result=mysqli_query($con,"INSERT INTO `data_barang`(`kode_barang`, `username`, `id_kategori`, `nama_barang`, `harga`,no_hp,pesan) VALUES ('$kode_barang','admin','$kategori','$nama_barang',$harga,'$no_hp','$pesan')");

if($result)
{
    echo "Data Berhasil Ditambahkan";
}
else
{
    echo "Data Gagal Ditambahkan";
}
?>