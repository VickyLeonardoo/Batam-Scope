<?php 
require '../../koneksi.php';
$no=$_POST['no'];
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$judul=$_POST['judul'];
$lokasi=$_POST['lokasi'];
$isi=$_POST['isi'];
$level=$_POST['level'];

 

$sql=mysqli_query($conn,"UPDATE pengaduan SET status='selesai' where no='$no'");

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan');
	window.location='../P2M.php';
</script>
<?php
}
?>

