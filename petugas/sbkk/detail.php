<div class="col-xl-10 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <?php 
                                require '../../koneksi.php';
                                $sql=mysqli_query($conn,"SELECT * FROM pengaduan where no='$_GET[no]'");
                                $data=mysqli_fetch_array($sql);
                                if ($sql)
                                {


       
                                    ?>
                                    <form action="update_sbkk.php" method="POST">
                                    <div class="form-group">
                                            <label for="">Nomor Pengaduan</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="no" readonly value="<?php echo $data['no']; ?>">
                                        </div>
                                     <div class="form-group">
                                            <label for="">Nama Pelapor:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="nama" readonly value="<?php echo $data['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="hidden" class="form-control form-control-user" id="judul"
                                                name="nik" readonly value="<?php echo $data['nik']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Judul Laporan:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="judul" readonly  value="<?php echo $data['judul']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Pengaduan:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="nik" readonly value="<?php echo $data['tgl_pengaduan']; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Tanggal Kejadian:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="nik" readonly value="<?php echo $data['tgl_kejadian']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">Lokasi Kejadian:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="" readonly value="<?php echo $data['lokasi']; ?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Isi Laporan:</label>
                                            <textarea class="form-control" rows="7" 
                                            name="isi" readonly><?php echo $data['isi']; ?></textarea>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Bukti Foto:</label><br>
                                        <img src="../../foto/<?php echo $data['foto']; ?>" width="400">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                        
                                        <input type="hidden" class="form-control form-control-user" id="level" name="level" 
                                        readonly value="<?php echo $data['unit'];?>">
                                        </div>

                                        
<br>
                                        <div style="justify-content: center; align-items: center;" class="text-center">
                                            <input type="submit" value="Selesai" name="" class="btn-success"
                                                style="border-radius: 6px; align-center">
                                        </div>
                                        <?php } ?>
                                        </form>         
                              </div>
                                </div>
                            
                            </div>
                        </div>
