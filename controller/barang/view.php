<?php

$id='1';
$select_id=mysqli_query($con,"SELECT * FROM data_barang");

$hasil = array(
	'type'	=> 'Data Barang',
	'results' => array()
    );
    
while($row = mysqli_fetch_assoc($select_id))
{
    $list = array(
        'kode_barang' => $row['kode_barang'],
        'nama_barang' => $row['nama_barang'],
        'harga' => $row['harga'],
        'no_hp' => $row['no_hp'],
        'pesan' => $row['pesan']
	);
   
    array_push($hasil['results'], $list);
}
?>