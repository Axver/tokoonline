<?php
include "../../../controller/connect.php";
include "../../../controller/kategori/view.php";
?>

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="../../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../assets/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../../../assets/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="../../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../../../assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../../../assets/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">





<!-- Main content -->
<section id="data" class="content">
	<div class="row">
		<div class="col-xs-12">

			<div class="box">

				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Kategori Barang</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$panjang = count($hasil['results']);
							//  echo $panjang;
							$i = 0;
							while ($i < $panjang) {
								?>
								<tr>
									<td><?php echo $i + 1; ?></td>
									<td><?php echo $hasil['results'][$i]['nama_kategori'] ?></td>

									<td>
										<a href="edit.php?no_block=<?php echo $hasil['results'][$i]['id_kategori'] ?>"><i class="fa fa-edit"></i></a>
										<a onclick="deleteData(<?php echo $hasil['results'][$i]['id_kategori'] ?>)" href="#" style="color:red;"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?php
								$i++;
							}                      ?>


						</tbody>
					</table>
				</div>
			</div>

		</div>

	</div>

	</div>

</section>

<script src="../../../assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../../../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
	$(function() {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging': true,
			'lengthChange': false,
			'searching': false,
			'ordering': true,
			'info': true,
			'autoWidth': false
		})
	})
</script>