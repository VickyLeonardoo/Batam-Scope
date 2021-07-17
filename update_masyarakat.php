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


$sql = mysqli_query($conn,"UPDATE user SET nama='$nama',email='$email',alamat='$alamat',
username='$username',password='$pass',no_hp='$no_hp',level='masyarakat',nik='$nik' where id_user='$id'");

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan');
	window.location='index.php';
</script>
<?php
}
?>