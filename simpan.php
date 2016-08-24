<?php 
include "koneksi.php";

if(isset($_POST['simpan'])){

	$nama			=	$_POST['nama'];
	$jenis_kelamin	=	$_POST['jenis_kelamin'];
	$agama			=	$_POST['agama'];
	$tempat_lahir	=	$_POST['tempat_lahir'];
	$tgl_lahir		=	$_POST['tgl_lahir'];
	$alamat			=	$_POST['alamat'];
	$rt 			=	$_POST['rt'];
	$rw 			=	$_POST['rw'];
	$kd_pos			=	$_POST['kd_pos'];
	$telp			=	$_POST['telp'];
	$hp 			=	$_POST['hp'];
	$berat_badan	=	$_POST['berat_badan'];
	$tinggi_badan	=	$_POST['tinggi_badan'];
	$ortu 			=	$_POST['ortu'];
	$pekerjaan		=	$_POST['pekerjaan'];
	$penghasilan	=	$_POST['penghasilan'];
	$hp_ortu		=	$_POST['hp_ortu'];
	$jml_sdr		=	$_POST['jml_sdr'];
	$anak_ke		=	$_POST['anak_ke'];
	$jarak_sekolah	=	$_POST['jarak_sekolah'];
	$sekolah_asal	=	$_POST['sekolah_asal'];
	$nisn			=	$_POST['nisn'];
	$thn_lulus		=	$_POST['thn_lulus'];
	$prestasi		=	$_POST['prestasi'];
	$bhs			=	$_POST['bhs'];
	$mtk 			=	$_POST['mtk'];
	$ing			=	$_POST['ing'];
	$ipa 			=	$_POST['ipa'];
	$rata			=	$_POST['rata'];
	$jurusan		=	$_POST['jurusan'];
	$rencana		=	$_POST['rencana'];
	$transportasi	=	$_POST['transportasi'];

	if($rata<70){
		?>
		<div class="container">
		<div class="row">
			<h2>Pendaftaran Gagal</h2>
			<h4>Maaf nilai rata-rata anda tidak memenuhi kriteria.</h4>
		</div>
	</div>
		<?php		
	} else if($rata>=70){

	$sql_auto=mysql_query('SELECT RIGHT(id_ppdb,4) AS id_ppdb FROM ppdb ORDER BY id_ppdb DESC LIMIT 1');
		$num_auto=mysql_num_rows($sql_auto);
		
		if($num_auto<>0){
			$data = mysql_fetch_array($sql_auto);
			$id_p=$data['id_ppdb']+1;
		} else {
			$id_p=1;
		}

		$id_p_auto=str_pad($id_p,4,"0",STR_PAD_LEFT);
		$tanggal=getdate();
		$sekarang=date("d F Y");
		$tahun=$tanggal['year'];
		$id_ppdb="$tahun$id_p_auto";

	$query_simpan=mysql_query("insert into ppdb values 
		('$id_ppdb','$nama','$jenis_kelamin','$agama','$tempat_lahir','$tgl_lahir','$alamat',
			'$rt','$rw', '$kd_pos','$telp','$hp','$berat_badan','$tinggi_badan','$ortu','$pekerjaan','$penghasilan',
				'$hp_ortu','$jml_sdr','$anak_ke','$jarak_sekolah','$sekolah_asal','$nisn','$thn_lulus','$prestasi','$bhs',
					'$mtk','$ing','$ipa','$rata','$jurusan','$rencana','$transportasi')");
	if ($query_simpan){

?>
	<div class="container">
		<div class="row">
			<h2>Kode PPDB Anda : <?php echo $id_ppdb; ?></h2>
			<h4>Catat Kode jangan sampai hilang. Kode digunakan untuk mencetak Formulir</h4>
		</div>
	</div>
<?php
	} else {
		echo "<script> alert('Simpan Gagal!');window.location.href='?page=daftar'; </script>";
	}
	}
}
?>