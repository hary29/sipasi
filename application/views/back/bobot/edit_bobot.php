
        <!-- Left navbar-header end -->
        <!-- Page Content -->
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
                foreach($bobot as $list) { ?>
                
                 <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="white-box">
                             <form class="form-horizontal" action="<?php echo base_url(). 'back/bobot/edit_aksi'; ?>" method="POST">

                              <input type="hidden" name="id_bobot" required="" value="<?php echo $list['id_bobot']; ?>" readonly="readonly" class="form-control" />

                              <div class="form-group">
                              <label for="gejala" class="col-sm-4">Nama Penyakit</label>
                              <div class="col-sm-4">
                                  <select name="id_penyakit" id="" class="form-control">
                                  <?php 
                                  foreach($penyakit as $pny) { ?>
                                  <option value="<?php echo $pny->id_penyakit?>"<?php if($list['id_penyakit'] == ($pny->id_penyakit)){ echo 'selected'; } ?>><?php echo $pny->nama_penyakit?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                              </div>

                              <div class="form-group">
                              <label for="gejala" class="col-sm-4">Nama Gejala</label>
                              <div class="col-sm-4">
                                  <select name="id_gejala" id="" class="form-control">
                                  <?php 
                                  foreach($gejala as $gj) { ?>
                                  <option value="<?php echo $gj->id_gejala?>"<?php if($list['id_gejala'] == ($gj->id_gejala)){ echo 'selected'; } ?>><?php echo $gj->gejala?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                              </div>

                              <div class="form-group">
                              <label for="" class="col-sm-4">Bobot</label>
                              <div class="col-sm-4">
                                  <input type="number" placeholder="1.0" step="0.1" min="0" max="1" name="bobot" class="form-control" value="<?php echo $list['bobot']; ?>" />
                              </div>
                              </div>

                              </br>
                              <?php } ?>
                              
                              <button type="submit" class="btn btn-primary">Simpan</button>&nbsp &nbsp
                              <a href="<?php echo base_url(); ?>back/bobot" label class="btn btn-primary">Kembali</a><br>
                              
                              </form>
                        </div>
                    </div>
                    </div>
                </div>

                
               </div>

                <!-- /.right-sidebar -->
            
