<link rel="stylesheet" type="text/css" href="tabel/datatables.min.css"/>
 <script type="text/javascript" src="tabel/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#tabel').DataTable();
			} );
		</script>

<div class="container">
	<div class="row">
		<div class="col-md-5">
			<a href="eksport.php" class="btn btn-default">Ekspor Excel</a>
			<a href="?page=daftar&aksi=hapus_semua" class="btn btn-default" onclick="return confirm('Yakin ingin menghapus semua data? data yang hilang tidak bisa dikembalikan.');">Hapus Semua Data</a>
		</div>
		<br>
		<br>
		<br>
		<div class="col-md-12">
		<table id="tabel" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Lengkap</th>
					<th>Nilai Rata-rata</th>
					<th>Jenis Kelamin</th>
					<th>Pilihan Jurusan</th>
					<th>Sekolah Asal</th>
					<th>Rencana Tinggal</th>
					<th>Aksi</th>
				</tr>
			</thead>
				<tbody>
					<?php
					include "../koneksi.php"; 
					$no=1;
					$query=mysql_query("select * from ppdb");
					while($run=mysql_fetch_array($query)){
						?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $run['nama']; ?></td>
						<td><?php echo $run['rata']; ?></td>
						<td><?php echo $run['jenis_kelamin']; ?></td>
						<td><?php echo $run['jurusan']; ?></td>
						<td><?php echo $run['sekolah_asal']; ?></td>
						<td><?php echo $run['rencana']; ?></td>
						<td><a href="?page=daftar&aksi=hapus&id=<?php echo $run['id_ppdb']; ?>" onClick="return confirm('Apakah anda ingin menghapus data ini?');" class="btn btn-danger">Hapus</a></td>
					</tr>
						<?php
					}
					 ?>
				</tbody>
		</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#tabel')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>

<?php
	if($_GET['aksi']=="hapus"){
		$id=$_GET['id'];

		$hapus=mysql_query("delete from ppdb where id_ppdb='$id'");

		if($hapus){
			echo "<script>alert('Data telah dihapus');window.location.href='?page=daftar';</script>";
		}
	} else if($_GET['aksi']=="hapus_semua"){
		$hapus_semua=mysql_query("truncate table ppdb");

		if ($hapus_semua) {
			echo "<script>alert('Data telah dihapus');window.location.href='?page=daftar';</script>";
		}
	}
 ?>