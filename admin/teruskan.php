<?php 
require '../koneksi.php';
$no=$_POST['no'];
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$judul=$_POST['judul'];
$lokasi=$_POST['lokasi'];
$isi=$_POST['isi'];
$unit=$_POST['unit'];
$id=$_POST['id_user'];

$sql=mysqli_query($conn,"UPDATE pengaduan SET status='cc',unit='$unit' where no='$no'");

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan');
	window.location='page_admin.php?url=laporan_menunggu';
</script>
<?php
}
?>

