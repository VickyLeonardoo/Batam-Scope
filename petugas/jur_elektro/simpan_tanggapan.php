<?php 

require '../../koneksi.php';
$no=$_POST['no'];
$tgl=$_POST['tgl_tanggapan'];
$id=$_POST['id'];
$isi=$_POST['tanggapan'];

$sql = mysqli_query($conn,"INSERT into tanggapan(no,tgl_tanggapan,id_user,tanggapan)
values ('$no','$tgl','$id','$isi')");

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan');
	window.location='laporan_elektro.php';
</script>
<?php
}
?>
