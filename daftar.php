<script>
function startCalculate(){
	interval=setInterval("Calculate()",10);
}
function Calculate(){
	var ipa=document.form_pendaftaran.ipa.value;
	var mtk=document.form_pendaftaran.mtk.value;
	var bhs=document.form_pendaftaran.bhs.value;
	var ing=document.form_pendaftaran.ing.value;
	var rata=document.form_pendaftaran.rata.value=(parseFloat(ipa)+parseFloat(mtk)+parseFloat(ing)+parseFloat(bhs))/4;

}
function stopCalc(){
	clearInterval(interval);
}
</script>
<div class="container">
	<div class="row">
	   		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	   			<h2>Formulir Pendaftaran PPDB Online</h2>
	   				<hr class="small">
	             	<div class="form">
							<form class="form-validate form-horizontal" id="form_pendaftaran" name="form_pendaftaran" method="post" autocomplete="off" action="?page=simpan">
								<div class="form-group ">
									<label class="control-label col-lg-4">Nama Lengkap <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="nama" name="nama" placeholder="Nama Lengkap" type="text" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Jenis Kelamin <span class="required">*</span></label>
										<div class="col-lg-5">
											<select name="jenis_kelamin" id="jenis_kelamin" class="form-control input-lg">
	          										<option value="">Pilih Jenis Kelamin</option>
	          										<option value="Laki-laki">Laki-laki</option>
	          										<option value="Perempuan">Perempuan</option>
	            							</select>
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Agama <span class="required">*</span></label>
										<div class="col-lg-5">
											<select name="agama" id="agama" class="form-control input-lg">
	          										<option value="">Pilih Agama</option>
	          										<option value="Islam">Islam</option>
	          										<option value="Protestan">Protestan</option>
	          										<option value="Katolik">Katolik</option>
	          										<option value="Hindu">Hindu</option>
	          										<option value="Budha">Budha</option>
	          										<option value="Konghucu">Konghucu</option>
	            							</select>
										</div>
								</div>
							
								<div class="form-group ">
									<label class="control-label col-lg-4">Tempat, Tanggal Lahir <span class="required">*</span></label>
										<div class="col-lg-3">
											<input class="form-control input-lg" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" type="text" required value="" />
										</div>
										<div class="col-lg-4">
											<input class="form-control input-lg" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" type="text" required value="" />
										</div>
								</div>
								
								<div class="form-group ">
									<label class="control-label col-lg-4">Alamat Lengkap <span class="required">*</span></label>
										<div class="col-lg-5">
											<textarea name="alamat" rows="5" class="form-control" id="alamat" placeholder="Alamat Lengkap" required ></textarea>
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">RT & RW <span class="required">*</span></label>
										<div class="col-lg-2">
											<input class="form-control input-lg" id="rt" name="rt" placeholder="RT" type="text" required value="" />
										</div>
										<div class="col-lg-2">
											<input class="form-control input-lg" id="rw" name="rw" placeholder="RW" type="text" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Kode Pos <span class="required"></span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="kd_pos" name="kd_pos" placeholder="Kode Pos" type="number" value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Telepon Rumah <span class="required"></span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="telp" name="telp" placeholder="No. Telepon" type="number" value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">HP <span class="required"></span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="hp" name="hp" placeholder="No. HP" type="number"  value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Berat & Tinggi Badan <span class="required">*</span></label>
										<div class="col-lg-3">
											<input class="form-control input-lg" id="berat_badan" name="berat_badan" type="number" required value="" placeholder="dalam Kg"/>
										</div>
										<div class="col-lg-3">
											<input class="form-control input-lg" id="tinggi_badan" name="tinggi_badan" type="number" required value="" placeholder="dalam cm"/>
										</div>
								</div>
								
								<div class="form-group ">
									<label class="control-label col-lg-4">Nama Orang Tua <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="ortu" name="ortu" placeholder="Nama Orang Tua" type="text" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Pekerjaan Orang Tua <span class="required">*</span></label>
										<div class="col-lg-5">
											<select name="pekerjaan" id="pekerjaan" class="form-control input-lg">
	          										<option value="">Pilih Pekerjaan Orang Tua</option>
	          										<option value="PNS Pemda">PNS Pemda</option>
	          										<option value="Guru PNS">Guru PNS</option>
	          										<option value="Guru Swasta">Guru Swasta</option>
	          										<option value="Pensiunan">Pensiunan</option>
	          										<option value="TNI">TNI</option>
	          										<option value="POLRI">POLRI</option>
	          										<option value="Petani">Petani</option>
	          										<option value="Pedagang">Pedagang</option>
	          										<option value="Karyawan Bank">Karyawan Bank</option>
	          										<option value="Karyawan Swasta">Karyawan Swasta</option>
	          										<option value="Buruh">Buruh</option>
	            							</select>
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Penghasilan/Bulan <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="penghasilan" name="penghasilan" placeholder="Penghasilan/Bulan" type="text" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">No. HP Orang Tua <span class="required"></span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="hp_ortu" name="hp_ortu" placeholder="No. HP Orang Tua" type="text" value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Jumlah Saudara <span class="required">*</span></label>
										<div class="col-lg-3">
											<input class="form-control input-lg" id="jml_sdr" name="jml_sdr" placeholder="Jumlah Saudara" type="number" required value="" />
										</div>
										<div class="col-lg-3">
											<input class="form-control input-lg" id="anak_ke" name="anak_ke" placeholder="Anak ke" type="number" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Jarak Rumah ke Sekolah <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="jarak_sekolah" name="jarak_sekolah" placeholder="dalam Km" type="number" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Sekolah Asal <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="sekolah_asal" name="sekolah_asal" placeholder="Sekolah Asal" type="text" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">NISN <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="nisn" name="nisn" placeholder="NISN" type="number" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Tahun Lulus <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="thn_lulus" name="thn_lulus" placeholder="Tahun Lulus" type="number" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Prestasi <span class="required"></span></label>
										<div class="col-lg-5">
											<textarea name="prestasi" rows="5" class="form-control" id="prestasi" placeholder="Prestasi" ></textarea>
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Nilai Bahasa Indonesia <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="bhs" name="bhs" onfocus="startCalculate()" onblur="stopCalc()" type="text" required value="0" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Nilai Matematika <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="mtk" name="mtk" onfocus="startCalculate()" onblur="stopCalc()" type="text" required value="0" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Nilai Bahasa Inggris <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="ing" name="ing" onfocus="startCalculate()" onblur="stopCalc()" type="text" required value="0" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Nilai IPA <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="ipa" name="ipa" onfocus="startCalculate()" onblur="stopCalc()" type="text" required value="0" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Rata-rata <span class="required">*</span></label>
										<div class="col-lg-5">
											<input class="form-control input-lg" id="rata" name="rata" onfocus="startCalculate()" onblur="stopCalc()" type="text" required value="" />
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Kompetensi <span class="required">*</span></label>
										<div class="col-lg-5">
											<select name="jurusan" id="jurusan" class="form-control input-lg">
	          										<option value="">Pilih Kompetensi</option>
	          										<option value="Farmasi">Farmasi</option>
	          										<option value="Kimia Industri">Kimia Industri</option>
	          										<option value="Analis Kesehatan">Analis Kesehatan</option>
	            							</select>
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Rencana Tempat Tinggal <span class="required">*</span></label>
										<div class="col-lg-5">
											<select name="rencana" id="rencana" class="form-control input-lg">
	          										<option value="">Pilih Rencana Tempat Tinggal</option>
	          										<option value="Bersama keluarga/kenalan">Bersama keluarga/kenalan</option>
	          										<option value="Kost/Sewa">Kost/Sewa</option>
	          										<option value="Pesantren">Pesantren</option>
	          										<option value="Belum ada">Belum ada</option>
	            							</select>
										</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-4">Transportasi ke Sekolah <span class="required">*</span></label>
										<div class="col-lg-5">
											<select name="transportasi" id="transportasi" class="form-control input-lg">
	          										<option value="">Pilih Transportasi</option>
	          										<option value="Sepeda Motor">Sepeda Motor</option>
	          										<option value="Sepeda">Sepeda</option>
	          										<option value="Becak">Becak</option>
	          										<option value="Kendaraan Umum">Kendaraan Umum</option>
	          										<option value="Lainnya">Lainnya</option>
	            							</select>
										</div>
								</div>
								<div class="form-group">
	                                    <div class="col-lg-offset-4 col-lg-10">
	                                        <button class="btn btn-primary" name="simpan" id="simpan" type="submit">Daftar</button>
	                                        <a href="?page=daftar"><button class="btn btn-default" id="batal" type="button">Batal</button></a>
	                                    </div>
	                            </div>
							</form>
					</div>
		</div>
	</div>