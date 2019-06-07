<?php

$id='1';
$select_id=mysqli_query($con,"SELECT * FROM kategori");

$hasil = array(
	'type'	=> 'Kategori',
	'results' => array()
    );
    
while($row = mysqli_fetch_assoc($select_id))
{
    $list = array(
        'id_kategori' => $row['id_kategori'],
        'nama_kategori' => $row['nama_kategori']
	);
   
    array_push($hasil['results'], $list);
}
?>