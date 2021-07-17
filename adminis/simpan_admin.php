<?php 
require '../koneksi.php';
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$alamat=$_POST['alamat'];
$username=$_POST['username'];
$password=$_POST['password'];
$level='Admin';

$sql=mysqli_query($conn,"INSERT into user(nama,nik,alamat,username,password,level) values 
('$nama','$nik','$alamat','$username','$password','$level')");

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan');
	window.location='adminis.php';
</script>
<?php
}
?>

