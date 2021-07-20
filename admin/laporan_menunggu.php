
<input type="text" name="cari" placeholder="Cari Nomor Laporan" style="width: 280px; border-radius: 10px;">
<input type="submit" value="cari" style="border-radius: 10px;">

<div class="d-sm-flex align-items-center justify-content-between mb-6 container">

Selamat Datang
<?php echo $_SESSION['nama']; ?>,Berikut Daftar Laporan Yang Masuk
</div>
<div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <?php 
                                error_reporting(0);
                                    require '../koneksi.php';
                                    $jumlahDataPerHalaman = 10;
                                    $hasil= mysqli_query($conn,"SELECT * from pengaduan where status='Proses'");
                                    $jumlahData = mysqli_num_rows($hasil);
                                    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                                    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1 ;
                                    $awalData = ($jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
                                    

                                    ?> 
                                <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>No Aduan</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <?php 
                                        require '../koneksi.php';
                                        $no=1;
                                        $carii=$_POST['cari'];
                                        if($carii != ''){
                                            $sql = mysqli_query($conn,"SELECT * from pengaduan where status = 'Proses' and  judul like '".$carii."' limit $awalData,$jumlahDataPerHalaman");
                                        }else{
                                            $sql = mysqli_query($conn,"SELECT * from pengaduan WHERE status='Proses' limit $awalData,$jumlahDataPerHalaman");
                                        }
                                    
                                   
                                     while($data=mysqli_fetch_array($sql)){
                    
                  
                  ?>
                        <tbody>
                                            
                                                <td><?php echo $data['no']?></td>
                                                <td><?php echo $data['judul']; ?></td>
                                                <td><?php echo $data['isi'];?></td>
                                                <td>
                                                <a href="?url=detail_laporan_menunggu&no=<?php echo $data['no'] ?>" class="btn btn-info btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Detail</span>
                                                    </a>
                                                    <a href="hapus_laporan.php?no=<?php echo $data['no'] ?>" class="delete btn btn-danger btn-icon-split" 
                                                    onclick="return confirm(‘Yakin Hapus?’)">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                       <?php  } ?>
                                        </tfoot>
                                    </table>
                                    <?php if ($halamanAktif > 1 ) : ?>      
                            <a href="?url=laporan_menunggu&halaman=<?=$halamanAktif-1  ?>">&lt;</a>  
                         <?php endif ;?>  
                        <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                        <?php if( $i == $halamanAktif) : ?>
                        <a href="?url=laporan_menunggu&halaman=<?= $i; ?>" style="font-weight: bold;"><?= $i;?></a>
                        <?php else : ?>
                        <a href="?url=laporan_menunggu&halaman=<?= $i; ?>"><?= $i;?></a>
                        <?php endif;?>
                     <?php endfor ;?> 

                     <?php if ($halamanAktif < $jumlahHalaman ) : ?>      
                            <a href="?url=laporan_menunggu&halaman=<?=$halamanAktif+1  ?>">&gt;</a>  
                         <?php endif ;?>
                                </div>
                            </div>
                        </div>  