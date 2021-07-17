<?php  
session_start();
if(!isset($_SESSION['nik']))
{
  die("Anda Belum Login");
}
if($_SESSION['level']!="Masyarakat")
{
  die('Akun Anda Tidak Valid <br> <a href="index.php">Kembali</a>');
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISLAP</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="masyarakat.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-database"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SISLAP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="masyarakat.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link" href="masyarakat.php">
                    <i class="fas fa-table"></i>
                    <span>Buat Laporan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="laporan_pending.php">
                    <i class="fas fa-table"></i>
                    <span>Laporan yang belum Diproses</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="laporan_diproses.php">
                    <i class="fas fa-edit"></i>
                    <span>Laporan sedang Diproses</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="laporan_selesai.php">
                    <i class="fas fa-edit"></i>
                    <span>Laporan Selesai</span></a>
            </li>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                       
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">

                        


                    </div>

                    <!-- Content Row -->
                    <div class="row">
 
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-10 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <form action="simpan_laporan.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group cols-sm-6">
                                        

                                    <div class="form-group cols-sm-6">
                                           
                                           <input type="hidden" class="form-control form-control-user" id="judul"
                                               name="id" value="<?php echo $_SESSION['id_user'];?>" readonly>
                                       </div>
                                   
                                       <div class="form-group cols-sm-6">
                                       
                                        <input type="hidden" class="form-control form-control-user" readonly value="<?php echo date('Y-m-d'); ?>" name="tgl_pengaduan">
                                        </div>

                                            <input type="hidden" class="form-control form-control-user" id="judul"
                                                name="nama" required value="<?php echo $_SESSION['nama'];?>" readonly>
                                      
                                        <div class="form-group cols-sm-6">
                                           
                                            <input type="hidden" class="form-control form-control-user" id="judul"
                                                name="nik" value="<?php echo $_SESSION['nik'];?>" readonly>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                        
                                        <input type="hidden" class="form-control form-control-user" readonly value="<?php echo date('Y-m-d'); ?>" name="tgl_tanggapan">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label for="">Judul Laporan:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="judul" required
                                                oninvalid="this.setCustomValidity('Masukkan Judul Laporan Anda')"
                                        oninput="this.setCustomValidity('')"/>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Lokasi Kejadian:</label>
                                            <select class="form-control" name="lokasi" required>
                                            <option value="" disabled>-Pilih-</option>
                                                <option value="Kampus">Kampus</option>
                                                <option value="Luar Kampus">Luar Kampus</option>
                                            </select>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Unit Tujuan:</label>
                                            <select class="form-control" name="unit" id="departemen">
                                                <option value="SBAK">SBAK</option>
                                                <option value="SBKK">SBKK</option>
                                                <option value="SBPK">SBPK</option>
                                                <option value="SBUM">SBUM</option>
                                                <option value="Jur Mesin">Jurusan Mesin</option>
                                                <option value="Jur Manajemen Bisnis">Jurusan Manajemen Bisnis</option>
                                                <option value="Jur Informatika">Jur Informatika</option>
                                                <option value="UPT PP">UPT-PP</option>
                                                <option value="UPT SI">UPT-SI</option>
                                                <option value="UPT Perpus">UPT-Perpus</option>
                                                <option value="UPT Pengadaan">UPT-Pengadaan</option>
                                                <option value="UPT PM">UPT-PM</option>
                                                <option value="P2M">P2M</option>
                                                <option value="SPI">SPI</option>
                                                <option value="MKU">MKU</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <div class="form-group cols-sm-6">
                                            <label>Isi Laporan:</label>
                                            <textarea class="form-control" rows="7" name="isi" required
                                            oninvalid="this.setCustomValidity('Masukkan Isi Laporan')"
                                        oninput="this.setCustomValidity('')"/></textarea>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Upload Foto</label>
                                            <input type="file" required name="foto" value="" class="form-control" id="files"
                                                accept=".jpg, .jpeg, .png, .gif" 
                                                oninvalid="this.setCustomValidity('Masukkan Bukti Foto')"
                                        oninput="this.setCustomValidity('')"/>
                                    
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Kejadian:</label>
                                            <input type="date" class="form-control form-control-user" id="tgl_kejadian"
                                                name="tgl_kejadian" placeholder="Judul Laporan" required 
                                                oninvalid="this.setCustomValidity('Masukkan Tanggal Kejadian')"
                                        oninput="this.setCustomValidity('')"/>
                                        </div>

                                        
                                        <div style="justify-content: center; align-items: center;" class="text-center">
                                            <input type="submit" value="Kirim" name="" class="btn-primary"
                                                style="border-radius: 6px; align-center">
                                        <input type="reset" value="Reset" name="" class="btn-danger"
                                                style="border-radius: 6px;">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="index.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>