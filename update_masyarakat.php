<?php 
require 'koneksi.php';
$id=$_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];


$sql = mysqli_query($conn,"UPDATE user,pengaduan SET user.nama='$nama',user.email='$email',user.alamat='$alamat',
user.username='$username',user.password='$pass',user.no_hp='$no_hp',user.level='masyarakat',user.nik='$nik',pengaduan.nik='$nik' 
,pengaduan.nama='$nama' where user.id_user='$id' and pengaduan.id_user='$id'");

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan,Anda Hrus Login Ulang untuk Menyimpan Data');
	window.location='login.php';
</script>
<?php
}
?>