<?php 
require '../koneksi.php';
$id=$_GET['id']; 

$sql=mysqli_query($conn,"DELETE FROM user where id_user='$id' ");
if($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data berhasil dihapus');
		window.location='adminis.php';

	</script>

<?php }?>