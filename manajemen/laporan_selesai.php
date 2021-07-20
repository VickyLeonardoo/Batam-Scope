<div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <?php 
                                    require '../koneksi.php';
                                    $jumlahDataPerHalaman = 10;
                                    $hasil= mysqli_query($conn,"SELECT * from pengaduan where status='selesai'");
                                    $jumlahData = mysqli_num_rows($hasil);
                                    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                                    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1 ;
                                    $awalData = ($jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
                                    

                                    ?> 
                                <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th>No Aduan</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                        require '../koneksi.php';
                                        $sql = mysqli_query($conn,"SELECT * from pengaduan where status='selesai' limit $awalData,$jumlahDataPerHalaman");
                                        while($data=mysqli_fetch_array($sql)){

                                        
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $data['no']; ?></td>
                                                <td><?php echo $data['judul']; ?></td>
                                                <td><?php echo $data['isi'];?></td>
                                                <td>
                                                <a href="detail_laporan.php?no=<?php echo $data['no'] ?>" class="btn btn-info btn-icon-split">
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
                                                    
                                                    <a href="?url=tanggapan&no=<?php echo $data['no'] ?>" class="btn btn-success btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-comment"></i>
                                                        </span>
                                                        <span class="text">Tanggapan</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                       <?php  } ?>
                                    </table>
                                    <?php if ($halamanAktif > 1 ) : ?>      
                            <a href="?url=laporan_selesai&halaman=<?=$halamanAktif-1  ?>">&lt;</a>  
                         <?php endif ;?>  
                        <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                        <?php if( $i == $halamanAktif) : ?>
                        <a href="?url=laporan_selesai&halaman=<?= $i; ?>" style="font-weight: bold;"><?= $i;?></a>
                        <?php else : ?>
                        <a href="?url=laporan_selesai&halaman=<?= $i; ?>"><?= $i;?></a>
                        <?php endif;?>
                     <?php endfor ;?> 

                     <?php if ($halamanAktif < $jumlahHalaman ) : ?>      
                            <a href="?url=laporan_selesai&halaman=<?=$halamanAktif+1  ?>">&gt;</a>  
                         <?php endif ;?>
                                </div>
                            </div>
                        </div>