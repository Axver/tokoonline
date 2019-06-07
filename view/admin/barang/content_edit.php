<div class="panel panel-info">
    <div class="panel-head">Edit</div>
    <div class="panel-body">
        <input type="hidden" class="form form-control">
        <label>Kategori</label>
        <input type="text" class="form form-control">
        <label>Nama Barang</label>
        <input type="text" class="form form-control">
        <label>Harga</label>
        <input type="text" class="form form-control">
        <label>No HP</label>
        <input type="text" class="form form-control">
        <label>Pesan</label>
        <input type="text" class="form form-control">
        <label>Gambar</label>
        <input type="text" class="form form-control" disbaled>

        <br>
        <button class="btn btn-info">Edit</button>

        <h3><b>Upload Gambar Saja</b></h3>

        <form method="post" enctype="multipart/form-data" action="../../../controller/barang/upload_gambar.php">
    <input type="file" name="gambar">
    <input type="hidden" name='id' value='<?php echo $_GET['kode_barang'] ?>'>
    <input type="submit" value="Upload">
  </form>
    </div>
</div>