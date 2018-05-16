<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Register</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">Register Sapi</li>
                    </ol>
                </div>
            </div>
<link href="<?php echo base_url()?>asset/back/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

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
                            <h3 class="box-title m-b-0" align="center">Registrasi Sapi</h3>
                            <p class="text-muted m-b-30 font-13" align="center"> Form Registrasi </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>back/register/tambah_sapi">
                                         <div class="control-group">
                                    <label class="control-label">No Registrasi Sapi <i style="color:red">*</i></label>
                                    <div class="controls">
                                   
                                        <input type="text" class="form-control" name="kode_sapi" id="kode_sapi" readonly="readonly" value="<?php echo $kode; ?>"/>
                                        <small><?php echo form_error('kode') ?></small>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <label for="nama_sapi">nama sapi</label>
                                            <input type="text" class="form-control" name="nama_sapi" id="nama_sapi" placeholder="Enter Nama Sapi"> </div>
                                            <?php $level= $this->session->userdata('level'); 
                                if($level==1){?>
                                              <div class="form-group">
                                                        <label class="control-label">Pemilik</label>
                                                        <select class="form-control" name="id_user" >
                                                             <?php foreach($data_user as $row_nama_user) { ?>
                    <option value="<?php echo $row_nama_user->id_user?>"><?php echo $row_nama_user->nama?></option>
                    <?php } ?>
                                                        </select> <span class="help-block"> Select your user </span> </div>
                                                
                                       <?php } ?>
                                      <div class="form-group">
              <label for="Tanggal Lahir">Tanggal Lahir Sapi</label>
              

              <div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
         <input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="tanggal_lahir"  >
      </div>
        <input type="hidden" id="dtp_input2" value=""/>
  </div>


                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
 <script src="<?php echo base_url() ?>asset/back/jquery-1.11.0.js"></script>


<!--file include Bootstrap js dan datepickerbootstrap.js-->

<script src="<?php echo base_url(); ?>asset/back/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>asset/back/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>asset/back/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 
                    </div></div></div></div></div>