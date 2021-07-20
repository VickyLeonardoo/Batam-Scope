<div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID Admin</th>
                                                <th>Nama</th>
                                                <th>Level</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        
                                <tfoot>
                                        <?php 
                                    require '../koneksi.php';
                                    $sql = mysqli_query($conn,"SELECT * from user WHERE level='Admin'");
                                    while($data=mysqli_fetch_array($sql)){
                    
                  
                                    ?>
                                            <tbody>
                                            
                                                
                                                <td><?php echo $data ['id_user'] ?></td>
                                                <td><?php echo $data ['nama'] ?></td>
                                                <td><?php echo $data ['level']?></td>
                                                <td>
                                                    <a href="detail_admin.php?id=<?php echo $data['id_user'] ?>" class="btn btn-info btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Detail</span>
                                                    </a>

                                                    <a href="hapus_admin.php?id=<?php echo $data['id_user'] ?>" class="btn btn-danger btn-icon-split"
                                                    onclick="return confirm('Yakin Mau Menghapus Data?')">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                    
                                                </td>
                                
                                        </tbody>
                                        <?php }?>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>