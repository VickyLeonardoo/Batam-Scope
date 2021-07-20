<div class="col-xl-10 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <form action="update_masyarakat.php" method="POST">
                                    <div class="form-group cols-sm-6">
                                    
                                            <input type="hidden" class="form-control form-control-user" id="judul"
                                                name="id" value="<?php echo $_SESSION['id_user'];?>" readonly>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label for="">Nama:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="nama" value="<?php echo $_SESSION['nama'];?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label for="">NIK:</label>
                                            <input type="number" class="form-control form-control-user" id="judul"
                                                name="nik" value="<?php echo $_SESSION['nik'];?>">
                                        </div>
                                        
                                        <div class="form-group cols-sm-6">
                                            <label for="">No Hp:</label>
                                            <input type="number" class="form-control form-control-user" id="judul"
                                                name="no_hp" value="<?php echo $_SESSION['no_hp'];?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label for="">Alamat:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="alamat" value="<?php echo $_SESSION['alamat'];?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label for="">EMail:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="email" value="<?php echo $_SESSION['email'];?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label for="">Username:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="username" value="<?php echo $_SESSION['username'];?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label for="">Password:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="password" value="<?php echo $_SESSION['password'];?>">
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
