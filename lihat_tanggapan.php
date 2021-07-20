<div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                                <th>Judul</th>
                                                <th>Nomor Pengaduan</th>
                                                <th>Tanggal Ditanggapi</th>
                                                <th>Tanggapan</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <?php 
                                        $noo=1;
                                        require 'koneksi.php';
                                        $sql=mysqli_query($conn,"SELECT * FROM pengaduan, tanggapan where tanggapan.no='$_GET[no]' 
                                        and tanggapan.no=pengaduan.no");
                                        $cek = mysqli_num_rows($sql);
                                        if ($cek<1){
                                            echo "<font color='red'>Mohon bersabar, Pengaduan belum ditanggapi</font>";
                                        }
                                        else {
                                        while($data=mysqli_fetch_array($sql)){

                                        
                                        ?>
                                        <tbody>
                                        
                                            <tr>
                                            <td><?php echo $noo++ ?></td>
                                                <td><?php echo $data['judul'] ?></td>
                                                <td><?php echo $data['no'] ?></td>
                                                <td><?php echo $data['tgl_tanggapan']?></td>
                                                <td><?php echo $data['tanggapan'] ?></td>
                                               
                                                
                                        </tbody>
                                       <?php }}  ?>
                                    </table>
                                            </div>
                                </div>
                            </div>
                        </div>
