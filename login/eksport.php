<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=data_pendaftar.xls");


?>

<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Lengkap</th>
					<th>Agama</th>
					<th>Tempat, Tanggal lahir</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Hp</th>
					<th>Berat Badan</th>
					<th>Tinggi Badan</th>
					<th>Nama Ayah/Ibu/Wali</th>
					<th>Pekerjaan</th>
					<th>Penghasilan</th>
					<th>No. HP Orangtua/wali</th>
					<th>Jumlah Saudara</th>
					<th>Anak ke</th>
					<th>Jarak Sekolah dari rumah</th>
					<th>Sekolah Asal</th>
					<th>NISN</th>
					<th>Tahun lulus</th>
					<th>Prestasi</th>
					<th>Nilai Bahasa Indonesia</th>
					<th>Nilai Matematika</th>
					<th>Nilai Bahasa Inggris</th>
					<th>Nilai IPA</th>
					<th>Nilai Rata-rata</th>
					<th>Pilihan Kompetensi</th>
					<th>Rencana Tempat Tinggal</th>
					<th>Transportasi Ke Sekolah</th>
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
						<td><?php echo $run['agama']; ?></td>
						<td><?php echo $run['tempat_lahir'].", ".$run['tgl_lahir']; ?></td>
						<td><?php echo $run['alamat']." RT ".$run['rt']." RW ".$run['rw']; ?></td>
						<td><?php echo $run['telp']; ?></td>
						<td><?php echo $run['hp']; ?></td>
						<td><?php echo $run['berat_badan']; ?></td>
						<td><?php echo $run['tinggi_badan']; ?></td>
						<td><?php echo $run['ortu']; ?></td>
						<td><?php echo $run['pekerjaan']; ?></td>
						<td><?php echo $run['penghasilan']; ?></td>
						<td><?php echo $run['hp_ortu']; ?></td>
						<td><?php echo $run['jml_sdr']; ?></td>
						<td><?php echo $run['anak_ke']; ?></td>
						<td><?php echo $run['jarak_sekolah']; ?></td>
						<td><?php echo $run['sekolah_asal']; ?></td>
						<td><?php echo $run['nisn']; ?></td>
						<td><?php echo $run['thn_lulus']; ?></td>
						<td><?php echo $run['prestasi']; ?></td>
						<td><?php echo $run['bhs']; ?></td>
						<td><?php echo $run['mtk']; ?></td>
						<td><?php echo $run['ing']; ?></td>
						<td><?php echo $run['ipa']; ?></td>
						<td><?php echo $run['rata']; ?></td>
						<td><?php echo $run['jurusan']; ?></td>
						<td><?php echo $run['rencana']; ?></td>
						<td><?php echo $run['transportasi']; ?></td>
					</tr>
						<?php
					}
					 ?>
				</tbody>
		</table>
