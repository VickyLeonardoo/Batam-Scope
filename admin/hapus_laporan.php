<?php 
require '../koneksi.php';
$no=$_GET['no']; 

$sql=mysqli_query($conn,"DELETE FROM pengaduan where no='$no' ");
if($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data berhasil dihapus');
		window.location='page_admin.php;

	</script>

<?php }?>