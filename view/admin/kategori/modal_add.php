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
        
 
        <label for="kategori_barang">Kategori Barang</label>
        <input name='kategori_barang' id='kategori_barang' type="text" class="form form-control" placeholder="Kode Barang">
        
        <br>
        <button class="btn btn-info" onclick="tambahKategori()">Tambahkan</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>

function tambahKategori()
{
  kategori=document.getElementById('kategori_barang').value;
  $.ajax({url: "../../../controller/kategori/tambah.php?kategori="+kategori, success: function(result){
    alert(result);
    $("#data").load(location.href + " #data>*", "");
  }});
}
</script>