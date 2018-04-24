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
             <div class="container-fluid">
                <?php $id=$this->session->userdata('id');?>
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                       <div class="card">
                        <div class="white-box">
                             <form class="form-horizontal" action="<?php echo base_url(). 'back/gejala/tambah_aksi'; ?>" method="POST">

                              <div class="form-group">
                              <label for="kode_gejala" class="col-sm-4">Kode Gejala</label>
                              <div class="col-sm-4">
                              <input type="text" name="kode_gejala" required="" value="<?= $kode_gejala; ?>" readonly="readonly" class="form-control" />
                              </div>
                              </div>

                              
                              <input type="hidden" name="id_user" required="" value="<?php echo $id ?>" readonly="readonly" class="form-control" />

                              <div class="form-group">
                              <label for="gejala" class="col-sm-4">Nama Gejala</label>
                              <div class="col-sm-4">
                                  <input type="text" name="gejala" class="form-control" />
                              </div>
                              </div>

                              </br>
                          
                              
                              <button type="submit" class="btn btn-primary">Simpan</button>&nbsp &nbsp
                              <a href="<?php echo base_url(); ?>back/gejala" label class="btn btn-primary">Kembali</a><br>
                              
                              </form>
                        </div>
                    </div>
                    </div>
                </div>

                
               </div>

                <!-- /.right-sidebar -->
            
