<?php 
session_start();
include 'koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$data= mysqli_query($conn,"SELECT * from user where username='$user' and password='$pass'");
if(mysqli_num_rows($data)>0){
    $row=mysqli_fetch_array($data);
    if ($row['level'] == "Admin") {


		$_SESSION['user'] = $user;
        $_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		

		header("location:admin/d_admin.php");
	} else if ($row['level'] == "SBAK") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/sbak.php");
	} else if ($row['level'] == "Masyarakat") {
		$_SESSION['user'] = $user;
		$_SESSION['id_user'] = $id_user;
		$_SESSION['nik'] = $nik;
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['no_hp'] = $row['no_hp'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['alamat'] = $row['alamat'];
		$_SESSION['id_user'] = $row['id_user'];
		header("location:masyarakat.php");
	}
    else if ($row['level'] == "SBKK") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/sbkk.php");
	}
    else if ($row['level'] == "SBPK") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/sbpk.php");
	}
    else if ($row['level'] == "SBUM") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/sbum.php");
	}
    else if ($row['level'] == "Jur Mesin") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/petugas_mesin.php");
	}
    else if ($row['level'] == "Jur Elektro") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];
		

		header("location:petugas/jur_elektro.php");
	}
    else if ($row['level'] == "Jur Manajemen Bisnis") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/jur_manajemen_bisnis.php");
	}
    else if ($row['level'] == "Jur Informatika") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/jur_informatika.php");
	}
    else if ($row['level'] == "UPT PP") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/upt_pp.php");
	}
    else if ($row['level'] == "UPT SI") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/upt_si.php");
	}
    else if ($row['level'] == "UPT PERPUS") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/upt_perpus.php");
	}
    else if ($row['level'] == "UPT PENGADAAN") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/upt_pengadaan.php");
	}
    else if ($row['level'] == "UPT PM") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/upt_pm.php");
	}
    else if ($row['level'] == "P2M") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/p2m.php");
	}
    else if ($row['level'] == "SPI") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/spi.php");
	}
    else if ($row['level'] == "MKU") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];

		header("location:petugas/mku.php");
	}
    else if ($row['level'] == "Other") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];
		
		header("location:masyarakat.php");
	}
	else if ($row['level'] == "Manajemen") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];
 
		header("location:manajemen/manajemen.php");
	}else if ($row['level'] == "Administrator") {
		$_SESSION['user'] = $user;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['nik'] = $row['nik'];
		$_SESSION['id_user'] = $row['id_user'];
 
		header("location:adminis/adminis.php");
	}

} else {
	echo 'Data Anda Tidak Valid <br> <a href="index.php">Kembali</a>';
}
?>