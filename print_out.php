<?php
    include "koneksi.php";
    $id=$_POST['cetak']; 
    $query=mysql_query("select * from ppdb where id_ppdb='$id'");
    $run=mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>PPDB SMK DUTA KARYA</title>

</head>

<body style="font-family:Times New Roman;font-size:12px" onLoad="print();">

           <table cellspasing=0 cellpadding=0>
                <tr>
                    <td><img src="img/SMK DUTA KARYA.jpg" height="80px"></td>
                    <td align="center" style="font-family:Arial;">
                        <strong>YAYASAN ISLAM PANCA PURNAMA<br>
                        <span style="font-size:28px;">SMK DUTA KARYA KUDUS</span>
                        <br>
                        <span style="font-size:9px;">
                        Jl.Sosrokartono Km 3 Panjang Bae Kudus 59326, Telp.(0291)4244320/3326320 Fax.(0291)4244320
                        <br>
                        Email : smkdutakarya_kudus@yahoo.com, web : www.smkdutakarya.sch.id
                        </span>
                        </strong>
                    </td>
                    <td><img src="img/logo iso.jpg" height="80px"></td>
                </tr>
                <tr>
                    <td colspan="3"><div style="width: 100%;border: 1px solid black;"></div></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><strong>FORMULIR PENDAFTARAN</strong>
                        <table align="right">
                            <tr>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></td>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></td>
                                <td>-</td>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></td>
                                <td>-</td>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></td>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></td>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></td>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table>
                            <tr>
                                <td colspan="8"><strong>I. DATA DIRI</strong></td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>NAMA LENGKAP</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>JENIS KELAMIN</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>AGAMA</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['agama']; ?></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>TEMPAT LAHIR</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['tempat_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>TANGGAL LAHIR</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['tgl_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>ALAMAT</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['alamat']." RT ".$run['rt']." RW ".$run['rw']; ?></td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>KODE POS</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['kd_pos']; ?></td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>TELEPON RUMAH</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['telp']; ?></td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>HP</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['hp']; ?></td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>TINGGI & BERAT BADAN</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['tinggi_badan']."cm ".$run['berat_badan']."kg"; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8"><strong>II. KELUARGA</strong></td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>NAMA AYAH/IBU/WALI</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['ortu']; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>PEKERJAAN</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['pekerjaan']; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>PENGHASILAN/BULAN</td>
                                <td>:</td>
                                <td colspan="4"><?php echo "Rp.".$run['penghasilan']; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>NOMOR HP</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['hp_ortu']; ?></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>JUMLAH SAUDARA</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['jml_sdr']." Orang Anak ke ".$run['anak_ke']; ?></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>JARAK DARI RUMAH KE SEKOLAH</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['jarak_sekolah']."km"; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8"> <strong>III. PENDIDIKAN</strong> </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>NAMA SEKOLAH ASAL</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['sekolah_asal']; ?></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>NISN</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['nisn']; ?></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>TAHUN LULUS</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['thn_lulus']; ?></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>PRESTASI</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['prestasi']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8"><strong>IV. PROGRAM KEAHLIAN YANG DIPILIH</strong></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>PROGRAM KEAHLIAN YANG DIPILIH</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['jurusan']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8"><strong>V. RENCANA HIDUP DI LOKASI PENDIDIKAN APABILA DITERIMA</strong></td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>RENCANA TEMPAT TINGGAL</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['rencana']; ?></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>TRANSPORTASI KE SEKOLAH</td>
                                <td>:</td>
                                <td colspan="4"><?php echo $run['transportasi']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8"><strong>VI. KELENGKAPAN PERSYARATAN</td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Biaya Pendaftaran</td>
                                <td colspan="2"><div style="width: 16px;height:16px;border: 1px solid black;"></div></td>
                                <td>4.</td>
                                <td>Fotokopi ijazah SMP/MTs legalisir 2 lembar</td>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></div></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Fotokopi Raport SMP/MTs/SKL legalisir</td>
                                <td colspan="2"><div style="width: 16px;height:16px;border: 1px solid black;"></div></td>
                                <td>5.</td>
                                <td>Fotokopi Daftar Nilai legalisir 2 lembar</td>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></div></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Pas foto hitam putih 3x4 = 4 lembar, 4x6 = 4 lembar</td>
                                <td colspan="2"><div style="width: 16px;height:16px;border: 1px solid black;"></div></td>
                                <td>6.</td>
                                <td>Surat Keterangan Sehat dari dokter</td>
                                <td><div style="width: 16px;height:16px;border: 1px solid black;"></div></td>
                            </tr>
                        </table>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3"><span style="font-size:11px;">Dengan ini saya menyatakan dengan penuh kesadaran bahwa segala informasi yang kami sampaikan dalam formulir tersebut diatas adalah benar sebagaimana adanya</span></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <table width="495">
                            <tr>
                              <td width="214" rowspan="3"><div style="width: 100px;height:120px;border: 1px solid black;"><center>PASFOTO TERBARU 3X4</center></div></td>
                                <td width="26"></td>
                                <td width="239"><div align="center">Kudus,.....................................................<br><br></div></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><div align="center"></div></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><div align="center">(...............................................................)<br>
                                  Nama lengkap pendaftar</div></td>
                            </tr>
                      </table>
                    </td>
                </tr>
           </table>
</body>

</html>
