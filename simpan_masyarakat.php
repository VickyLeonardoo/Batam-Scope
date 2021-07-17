<?php
require 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tgl = date('Y-m-d', strtotime($_POST['tgl_lahir']));
$username = $_POST['username'];
$email = $_POST['email'];
$telp = $_POST['no_telp'];
$password = $_POST['password'];
$level = 'masyarakat';
$alamat = $_POST['alamat'];


$cek = mysqli_query($conn, "SELECT nik from user where username = '$username' ");
if (mysqli_num_rows($cek) == 0) {
	$sql = mysqli_query($conn, "INSERT into user (nik,nama,tgl_lahir,username,email,no_hp,password,level,alamat)
	values ('$nik','$nama','$tgl','$username','$email','$telp','$password','$level','$alamat') ");


?><script type="text/javascript">
		alert('Data Berhasil Disimpan');
		window.location = 'index.php';
	</script>

<?php
} else if (mysqli_num_rows($cek) == 1) {
?>
	<script type="text/javascript">
		alert('Username Anda Sudah Ada');
		window.location = 'index.php';
	</script>
<?php
}

?>