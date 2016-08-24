<?php
	session_start();
	include "../koneksi.php";
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$query=mysql_query("select * from admin where user='$username' and password=md5('$password')");
		$hasil=mysql_fetch_array($query);
		$ada=mysql_num_rows($query);

		if($ada){
			$_SESSION['user']=$hasil['user'];
			echo "<script>alert('Login berhasil')</script>";
			echo "<meta http-equiv='refresh' content='0; url=\"index.php?page=daftar\"'>";
		}else{
			echo "<script>alert('Login gagal')</script>";
			echo "<meta http-equiv='refresh' content='0;url=\"index.php\"'>";	
			$_SESSION['user'] = "";
		}
	}
 ?>