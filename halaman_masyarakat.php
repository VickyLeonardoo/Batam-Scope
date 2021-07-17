<?php 
if (isset($_GET['url'])) 
{
	$url = $_GET['url'];

	switch($url)
	{

        case 'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;
        
        case 'masyarakat';
        include 'masyarakat.php';
        break;

		case 'laporan_diproses';
		include 'laporan_diproses.php';
		break;

		case 'laporan_pending';
		include 'laporan_pending.php';
		break;


	}
}

     else
    {
        ?>
        Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat yang dibuat untuk melaporkan pelanggaran atau penyimpangan kejadian-kejadian yang ada pada masyarakat<br><br>
        Anda Login Sebagai : <?php echo $_SESSION['nama']; 
    }
?>