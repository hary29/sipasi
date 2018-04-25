<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Pemeriksaan</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">Pemeriksaan</li>
                    </ol>
                </div>
            </div>
             
                  <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
                <?php $id=$this->session->userdata('id');
                date_default_timezone_set("Asia/Jakarta");
                $date= date_default_timezone_get();
                $tgl= date('Y-m-d H:i:s', strtotime($date));
                ?>
              <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div class="card">
                        <div class="white-box"><?php $pny='';foreach($sapi->result() as $pny1) { $pny=$pny1;
                        
                        }if ($pny !='') { ?>
                             <form class="form-horizontal" action="<?php echo base_url(). 'back/pemeriksaan/simpantmp'; ?>" method="POST">

                                      <input type="hidden" name="id_user" required="" value="<?php echo $id ?>" readonly="readonly" class="form-control" />

                                      <div class="form-group">
                                      <label for="kode_gejala" class="col-sm-4">Tanggal Pemeriksaan</label>
                                      <div class="col-sm-4">
                                        <input type="text" name="tgl_diagnosa" required="" value="<?php echo $tgl; ?>" readonly="readonly" class="form-control" />
                                      </div>
                                      </div>

                                      <div class="form-group">
                                      <label for="" class="col-sm-4">Nama Sapi</label>
                                      <div class="col-sm-4">
                                          <select name="id_sapi" id="id_sapi" class="form-control">
                                          <option>--Pilih Nama Sapi--</option>
                                          <?php foreach($sapi->result() as $pny) { ?>
                                          <option value="<?php echo $pny->id_sapi?>"><?php echo $pny->nama_sapi?></option>
                                          <?php } ?>
                                          </select>
                                      </div>
                                      </div>

                                      </br>
                                    
                                      <h3>Pilih Gejala Yang Dialami</h3>

                                      <?php 
                                      foreach ($priksa->result() as $row){?>
                                          <div class="checkboxes">
                                              <label class="label_check" for="checkbox-01">
                                                  <input name="gejala[]" type="checkbox" value="<?php echo $row->id_gejala; ?>"><?php echo $row->gejala; ?>
                                              </label>
                                          </div>
                                      <?php } ?> 

                              </br>
                          
                              
                              <button type="submit" class="btn btn-primary">Proses</button>&nbsp &nbsp
                              <br>
                               <?php }else {
                                        ?>
                                        <div style="color:#0000FF"> <label for="aa" class="col-sm-4">
                                        <h3><b>SILAHKAN REGISTRASI SAPI ANDA TERLEBIH DAHULU</b></h3></label> <?php }  ?></div>
                              
                              </form>

                        </div>
                    </div>
                    </div>
                </div>

                
               </div>

                <!-- /.right-sidebar -->
            
