     <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Sapi</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">Data Sapi</li>
                    </ol>
                </div>
            </div>
                <!-- /row -->
                 <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
    <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                       <div class="card">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Sapi</h3>
                            <p class="text-muted m-b-30">Data Semua Sapi</p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th >No</th>
                                          <th >Kode Sapi</th>
                                          <th >Nama</th>
                                          <th >Nama Pemilik</th>
                                          <th >Tanggal Lahir Sapi</th>
                                          <th >Aksi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr class="odd gradeX">
                                          <?php 
                            $no = $offset;
                          foreach($data_sapi as $list) { 
                            if ($list['id_sapi'] == '') {?>
                            <div style="color:#0000FF"> <label for="aa" class="col-sm-4">
                                        <h3><b>Data Sapi Kosong</b></h3></label></div>
                             <?php }  else {?>
                          <tr>
                            <td><?php echo ++$no ?></a></td>
                            <td><?php echo $list['kode_sapi']; ?></td>
                            <td><?php echo $list['nama_sapi']; ?></td>
                            <td><?php echo $list['nama']; ?></td>
                            <td><?php echo $list['tanggal_lahir']; ?></td>
                            <td>
                            
                            <a href="<?php echo base_url() ?>back/sapi/edit/<?php echo $list['id_sapi'] ?>"> <label class="btn btn-info" >EDIT</a> &nbsp 
                            <?php
                        //$level=$this->session->userdata('level');
                        // if($level == 1){?>
                            <a href="<?php echo base_url() ?>back/sapi/delete/<?php echo $list['id_sapi'] ?>"onclick="return confirm ('Apakah Anda yakin akan menghapus data ini ?')"><label class="btn btn-danger" >DELETE</a><?php }} ?></td></label></a></label></a></td></tr>
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
