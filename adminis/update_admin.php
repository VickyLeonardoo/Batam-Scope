<?php 
require '../koneksi.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$alamat=$_POST['alamat'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql=mysqli_query($conn,"UPDATE user SET nama='$nama',nik='$nik'
,alamat='$alamat',username='$username',password='$password' where id_user='$id'");

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

