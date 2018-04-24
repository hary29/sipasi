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
                  <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
                <?php $id=$this->session->userdata('id');?>
                  <div align="right">
                  <a href="<?php echo base_url(); ?>back/tmp_bobot" label class="btn btn-info">Tambah Data Banyak</a><br><br></div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div class="card">
                        <div class="white-box">
                             <form class="form-horizontal" action="<?php echo base_url(). 'back/bobot/tambah_aksi'; ?>" method="POST">

                              <div class="form-group">
                              <label for="" class="col-sm-4">Nama Penyakit</label>
                              <div class="col-sm-4">
                                  <select name="id_penyakit" id="" class="form-control">
                                  <option>--Pilih Penyakit--</option>
                                  <?php foreach($penyakit as $pny) { ?>
                                  <option value="<?php echo $pny->id_penyakit?>"><?php echo $pny->nama_penyakit?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                              </div>

                              <div class="form-group">
                              <label for="" class="col-sm-4">Nama Gejala</label>
                              <div class="col-sm-4">
                                  <select name="id_gejala" id="" class="form-control">
                                  <option>--Pilih Gejala--</option>
                                  <?php foreach($gejala as $gj) { ?>
                                  <option value="<?php echo $gj->id_gejala?>"><?php echo $gj->gejala?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                              </div>

                              <div class="form-group">
                              <label for="bobot" class="col-sm-4">Bobot</label>
                              <div class="col-sm-4 col-sm-offset-4">
                                  <input type="number" placeholder="1.0" step="0.01" min="0" max="1" name="bobot" class="form-control" />
                              </div>
                              </div>

                              </br>
                          
                              
                              <button type="submit" class="btn btn-primary">Simpan</button>&nbsp &nbsp
                              <a href="<?php echo base_url(); ?>back/bobot" label class="btn btn-primary">Kembali</a><br>
                              
                              </form>
                        </div>
                    </div>
                    </div>
                </div>

                
               </div>

                <!-- /.right-sidebar -->
            
