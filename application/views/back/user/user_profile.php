<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data User</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- .row -->
            <div class="card">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg" align="center"> <img width="20%"  alt="user" src="<?php echo base_url() ?>asset/back/baru/images/users/user.png"> </div>
                            <div class="user-btm-box">
                                <!-- .row -->
                                 <?php 
                                    foreach($data_user as $list) { ?>
                                     <label for="id_gejala" class="control-group"></label>
                                 <div class="control-group">
                                 <input type="hidden" name="id_user" class="form-control" value="<?php echo $list['id_user']; ?>" />
                                </div>
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>Kode Pendaftaran</strong>
                                        <p><?php echo $list['kode_pendaftaran']; ?></p>
                                    </div>
                                    <div class="col-md-6"><strong>Nama</strong>
                                        <p><?php echo $list['nama']; ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>Username</strong>
                                        <p><?php echo $list['username']; ?></p>
                                    </div>
                                    <div class="col-md-6"><strong>Password</strong>
                                        <p><?php echo $list['password']; ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                 <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Jenis Kelamin</strong>
                                        <p><?php $list['jenis_kelamin'];
                                        if ($list['jenis_kelamin']=="L") {
                                            echo "Laki-Laki";
                                         }
                                         else {
                                             echo "Perempuan";
                                         } ?></p>
                                    </div>
                                </div>
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Alamat</strong>
                                        <p><?php echo $list['alamat']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <!-- /.row -->
                                <div class="col-md-4 col-sm-4 text-center">
                                     <a href="<?php echo base_url() ?>back/user/edit" class="btn btn-success"> Edit User Profile </a> </div>
                            </div> <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
