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
                <?php $id=$this->session->userdata('id');?>
                <?php 
                foreach($data_aturan as $list) { ?>
              <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                       <div class="card">
                        <div class="white-box">
                             <form class="form-horizontal" action="<?php echo base_url(). 'back/bayes/edit_aksi'; ?>" method="POST">

                              <input type="hidden" name="id_bayes" required="" value="<?php echo $list['id_bayes']; ?>" readonly="readonly" class="form-control" />

                              <div class="form-group">
                              <label for="kode_penyakit" class="col-sm-4">Teorema Bayes</label>
                              <div class="col-sm-4">
                              <input type="text" name="teorema_bayes" required="" value="<?php echo $list['teorema_bayes']; ?>" readonly="readonly" class="form-control" />
                              </div>
                              </div>
                              
                              <div class="form-group">
                              <label for="gejala" class="col-sm-4">Rentang Bawah</label>
                              <div class="col-sm-4">
                                  <input type="text" name="rentang_bawah" class="form-control" value="<?php echo $list['rentang_bawah']; ?>" />
                              </div>
                              </div>

                              <div class="form-group">
                              <label for="gejala" class="col-sm-4">Rentang Atas</label>
                              <div class="col-sm-4">
                                  <input type="text" name="rentang_atas" class="form-control" value="<?php echo $list['rentang_atas']; ?>" />
                              </div>
                              </div>


                              </br>
                              <?php } ?>
                              
                              <button type="submit" class="btn btn-primary">Simpan</button>&nbsp &nbsp
                              <a href="<?php echo base_url(); ?>back/bayes" label class="btn btn-primary">Kembali</a><br>
                              
                              </form>
                        </div>
                    </div>
                    </div>
                </div>

                
               </div>

                <!-- /.right-sidebar -->
            
