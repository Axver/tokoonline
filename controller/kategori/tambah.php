<?php

$kategori=$_GET['kategori'];
include "../connect.php";
$id='1';
$select_id=mysqli_query($con,"SELECT MAX(id_kategori) as max FROM kategori");
while($row = mysqli_fetch_assoc($select_id))
{
    $id = $row['max'];
}
$id=$id+1;
$result=mysqli_query($con,"INSERT INTO `kategori`(`id_kategori`, `nama_kategori`) VALUES ('$id','$kategori')");

if($result)
{
    echo "Data Berhasil Ditambahkan";
}
else
{
    echo "Data Gagal Ditambahkan";
}
?>