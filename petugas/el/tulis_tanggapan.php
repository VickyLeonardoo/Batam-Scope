<div class="col-xl-10 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <?php 
                                require '../../koneksi.php';
                                $sql=mysqli_query($conn,"SELECT * FROM pengaduan where no='$_GET[no]'");
                                $data=mysqli_fetch_array($sql);
                                if ($data)
                                {

 
       
                                    ?>
                                    <form action="simpan_tanggapan.php" method="POST">
                                    <div class="form-group">
                                    <div class="form-group">
                                            <label for="">No Laporan</label>
                                            <input type="text" class="form-control form-conztrol-user" id="judul"
                                                name="no" readonly value="<?php echo $data['no']; ?>">
                                        </div>
                                            <label for="">Judul Laporan</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="judul" readonly value="<?php echo $data['judul']; ?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                        <label for="">Tanggal Pengaduan</label>
                                        <input type="text" class="form-control form-control-user" readonly value="<?php echo date('Y-m-d'); ?>" name="tgl_tanggapan">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Tulis Tanggapan:</label>
                                            <textarea class="form-control" rows="7" 
                                            name="tanggapan" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Petugas</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="id" readonly value="<?php echo $_SESSION['id_user']; ?>">
                                        </div>
                                        
<br>
                                        <div style="justify-content: center; align-items: center;" class="text-center">
                                            <input type="submit" value="Kirim" name="" class="btn-primary"
                                                style="border-radius: 6px; align-center">
                                        <input type="reset" value="Reset" name="" class="btn-danger"
                                                style="border-radius: 6px;">
                                        </div>
                                        <?php }?>
                                        </form>         
                              </div>
                                </div>
                            
                            </div>
                        </div>