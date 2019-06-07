<!-- Modal -->
<div id="modalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Tambah Data</b></h4>
      </div>
      <div class="modal-body">
        
 
        <label for="kode_barang">Kode Barang</label>
        <input name='kode_barang' id='kode_barang' type="text" class="form form-control" placeholder="Kode Barang">
        <label for="nama_barang">Nama Barang</label>
        <input name='nama_barang' id='nama_barang' type="text" class="form form-control" placeholder="Nama Barang">
        <label for="no_hp">No HP</label>
        <input name='no_hp' id='no_hp' type="text" class="form form-control" placeholder="No HP">
        <label for="harga">Harga</label>
        <input name='harga' id='harga' type="text" class="form form-control" placeholder="Harga">
        <label for="pesan">Pesan</label>
        <input name='pesan' id='pesan' type="text" class="form form-control" placeholder="Pesan">
        <label for="kategori">Kategori</label>
        <?php 
            include "../../../controller/connect.php";
            include "../../../controller/kategori/view.php";
            // var_dump($hasil);?>
        <select name="kategori" id="kategori" class="form form-control">
           
            <option value="0">Pilih Kategori Barang</option>
            <?php 
            $jumlah=count($hasil['results']);
            $i=0;
            while ($i<$jumlah)
            {
              ?>
             <option value="<?php echo $hasil['results'][$i]['id_kategori']; ?>"><?php echo $hasil['results'][$i]['nama_kategori']; ?></option>
              <?php

              $i++;
            }
            ?>
        </select>
        
        <br>
        <button onclick="tambahBarang()" class="btn btn-info">Tambahkan</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>

function tambahBarang()
{
  kode_barang=document.getElementById("kode_barang").value;
  nama_barang=document.getElementById("nama_barang").value;
  no_hp=document.getElementById("no_hp").value;
  pesan=document.getElementById("pesan").value;
  kategori=document.getElementById("kategori").value;
  harga=document.getElementById("harga").value;

  $.ajax({url: "../../../controller/barang/tambah.php?kode_barang="+kode_barang+"&nama_barang="+nama_barang+"&no_hp="+no_hp+"&pesan="+pesan+"&kategori="+kategori+"&harga="+harga, 
    success: function(result){
      $("#data").load(location.href + " #data>*", "");
    alert(result);

  }});
}
</script>