<?php 
if (isset($_GET['url'])) 
{
	$url = $_GET['url'];

	switch($url)
	{

        case 'masyarakat';
        include 'masyarakat.php';
        break;
        
		case 'laporan_menunggu';
		include 'laporan_menunggu.php';
		break;

		case 'laporan_diproses';
		include 'laporan_diterima.php';
		break;

        case 'edit_admin';
        include 'edit_admin.php';
        break;

        case 'detail_laporan_menunggu';
        include 'detail_laporan_menunggu.php';
        break;

        case 'tanggapan';
        include 'lihat_tanggapan.php';
        break;

        case 'halaman';
        include 'laporan_menunggu.php';
        break;

        case 'buat_laporan';
        include 'buatLaporan.php';
        break;

        case 'detail_proses';
        include 'detail_laporan_diterima.php';
        break;
	}
}

     else
    {
        ?>
        Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat yang dibuat untuk melaporkan pelanggaran atau penyimpangan kejadian-kejadian yang ada pada masyarakat<br><br>
        Anda Login Sebagai : <?php echo $_SESSION['nama']; 
        
        
    
?>
 <?php 
		
        require '../koneksi.php';
        $sql=mysqli_query($conn,"SELECT * FROM pengaduan WHERE status='proses'");
            if($cek=mysqli_num_rows($sql))
            {
            
            ?>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                             Laporan Yang Masuk</div>
                                            <div
                                                class="h5 mb-0 font-weight-bold text-gray-800 badge badge-success badge-counter">
                                                <?php echo $cek; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
     <?php           
     } 
?>
<?php 
		
        require '../koneksi.php';
            $sql=mysqli_query($conn,"SELECT * FROM pengaduan WHERE status='teruskan'");
            if($cek=mysqli_num_rows($sql))
            {
            
            ?>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                             Laporan Diteruskan</div>
                                            <div
                                                class="h5 mb-0 font-weight-bold text-gray-800 badge badge-success badge-counter">
                                                <?php echo $cek; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     <?php           
     } }
     ?>