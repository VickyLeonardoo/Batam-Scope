<div class="col-xl-10 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <?php 
                                require '../koneksi.php';
                                $sql=mysqli_query($conn,"SELECT * FROM pengaduan where no='$_GET[no]'");
                                $data=mysqli_fetch_array($sql);
                                if ($sql)
                                {

                                    ?>
                                    <form action="teruskan.php" method="POST">
                                    <div class="form-group">
                                            
                                            <input type="hidden" class="form-control form-control-user" id="judul"
                                                name="id_user" readonly value="<?php echo $data['id_user']; ?>">
                                        </div>
                                    <div class="form-group">
                                            <label for="">Nomor Pengaduan</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="no"  value="<?php echo $data['no']; ?>">
                                        </div>
                                     <div class="form-group">
                                            <label for="">Nama Pelapor:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="nama"  value="<?php echo $data['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">NIK Pelapor:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="nik"  value="<?php echo $data['nik']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Kejadian:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="tgl_kejadian"  value="<?php echo $data['tgl_kejadian']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Judul Laporan:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="judul"  value="<?php echo $data['judul']; ?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Lokasi Kejadian:</label>
                                           <input type="text" class="form-control form-control-user" id="lokasi" name="lokasi"
                                            value="<?php echo $data['lokasi']; ?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Isi Laporan:</label>
                                            <textarea class="form-control" rows="7" 
                                            name="isi" readonly><?php echo $data['isi']; ?></textarea>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Bukti Foto:</label><br>
                                        <img src="../foto/<?php echo $data['foto']; ?>" width="400">
                                        </div>
                                        <select class="form-control" name="unit">
                                        <option value="<?php echo $data['unit']; ?>"><?php echo $data['unit']; ?></option>
                                        <option disabled value="#">-Pilih-</option>
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
<br>
                                        <div style="justify-content: center; align-items: center;" class="text-center">
                                            <input type="submit" value="Teruskan" name="" class="btn-primary"
                                                style="border-radius: 6px; align-center">
                                        </div>
                                        <?php } ?>
                                        </form>         
                              
                                </div>
                            
                            </div>
                        </div>