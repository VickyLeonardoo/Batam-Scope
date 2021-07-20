<?php
require 'koneksi.php';

$nama=$_POST['nama'];
$nik=$_POST['nik'];
$judul=$_POST['judul'];
$lokasi=$_POST['lokasi'];
$isi=$_POST['isi'];
$unit=$_POST['unit'];
$status='proses';
$tgl=date('Y-m-d', strtotime($_POST['tgl_kejadian']));
$tgl2=$_POST['tgl_pengaduan'];
$id=$_POST['id'];
$foto=$_FILES["foto"]["name"];
$extension = pathinfo($foto,PATHINFO_EXTENSION);
$randomno=rand(0,10000);
$rename='foto'.date('Ymd').$randomno;
$newname=$rename.'.'.$extension;
$tmp_name=$_FILES["foto"]["tmp_name"];


$sql=mysqli_query($conn,"INSERT INTO pengaduan(nama,nik,judul,lokasi,isi,foto,status,tgl_kejadian,unit,id_user,tgl_pengaduan)values
('$nama','$nik','$judul','$lokasi','$isi','$newname',
'$status','$tgl','$unit','$id','$tgl2')");
move_uploaded_file($tmp_name, "foto/".$newname);

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan');
	window.location='page_masyarakat.php';
</script>
<?php
} else {
	echo 'eror';
}
?>

