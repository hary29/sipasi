   <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- /row -->
                 <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
              <div class="card">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data User</h3>
                            <p class="text-muted m-b-30">Data Semua User</p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th >No</th>
                                          <th >Kode Pendaftaran</th>
                                          <th >Nama</th>
                                          <th >Alamat</th>
                                          <th >Jenis Kelamin</th>
                                          <th >Username</th>
                                          <th >Password</th>
                                          <th >Level</th>
                                          <th >Aksi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr class="odd gradeX">
                                          <?php 
                            $no = $offset;
                          foreach($data_user as $list) { ?>
                          <tr>
                            <td><?php echo ++$no ?></a></td>
                            <td><?php echo $list['kode_pendaftaran']; ?></td>
                            <td><?php echo $list['nama']; ?></td>
                            <td><?php echo $list['alamat']; ?></td>
                            <td><?php echo $list['jenis_kelamin']; ?></td>
                            <td><?php echo $list['username']; ?></td>
                            <td><?php echo $list['password']; ?></td>
                            <td><?php echo $list['level']; ?></td>
                            <td>
                            <div align="center">
                            <a href="<?php echo base_url() ?>back/user/edit/<?php echo $list['id_user'] ?>"> <label class="btn btn-info" >EDIT</a> &nbsp 
                            <?php
                        //$level=$this->session->userdata('level');
                        // if($level == 1){?>
                            <a href="<?php echo base_url() ?>back/user/delete/<?php echo $list['id_user'] ?>"onclick="return confirm ('Apakah Anda yakin akan menghapus data ini ?')"><label class="btn btn-danger" >DELETE</a><?php } ?></td></label></a></label></a></div></td></tr>
                          </tr>

                          <?php echo $this->session->flashdata('pesan'); ?>
                                          
                                        </tr>
                                       
                                      </tbody>
                                    </table>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
