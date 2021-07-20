<div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table">
                                    <?php 
                                    require 'koneksi.php';
                                    $jumlahDataPerHalaman = 10;
                                    $hasil= mysqli_query($conn,"SELECT * FROM pengaduan where id_user='$_SESSION[id_user]' and 
                                    status='teruskan' ");
                                    $jumlahData = mysqli_num_rows($hasil);
                                    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                                    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1 ;
                                    $awalData = ($jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
                                    

                                    ?>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Antri</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                        $no=1;
                                        require 'koneksi.php';
                                        $sql = mysqli_query($conn,"SELECT * from pengaduan where id_user='$_SESSION[id_user]' and 
                                        status='teruskan' order by no asc limit $awalData,$jumlahDataPerHalaman");
                                        while($data=mysqli_fetch_array($sql)){

                                        
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <td><?php echo $data['no']; ?></td>
                                                <td><?php echo $data['judul']; ?></td>
                                                <td><?php echo $data['isi'];?></td>
                                                <td>
                                                    <a href="?url=detail_pengaduan&no=<?php echo $data['no']; ?>" class="btn btn-info btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Detail</span>
                                                    </a>
                                                    <a href="?url=tanggapan&no=<?php echo $data['no']; ?>" class="btn btn-warning btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Tanggapan</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                       <?php  } ?>
                                    </table>
                                             
                         <?php if ($halamanAktif > 1 ) : ?>      
                            <a href="?url=laporan_diproses&halaman=<?=$halamanAktif-1  ?>">&lt;</a>  
                         <?php endif ;?>  
                        <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                        <?php if( $i == $halamanAktif) : ?>
                        <a href="?url=laporan_diproses&halaman=<?= $i; ?>" style="font-weight: bold;"><?= $i;?></a>
                        <?php else : ?>
                        <a href="?url=laporan_diproses&halaman=<?= $i; ?>"><?= $i;?></a>
                        <?php endif;?>
                     <?php endfor ;?> 

                     <?php if ($halamanAktif < $jumlahHalaman ) : ?>      
                            <a href="?url=laporan_diproses&halaman=<?=$halamanAktif+1  ?>">&gt;</a>  
                         <?php endif ;?> 
                                            </div>
                                </div>
                            </div>
                        </div>
