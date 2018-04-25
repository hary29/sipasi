 <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Bayes</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">Data Bayes</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                       <div class="card">
                        <div class="white-box">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
                    
                    <tr class="active">
                      <th width="3%" scope="col">No</th>
                      <th width="5%" scope="col">Aturan</th>
                      <th width="5%" scope="col">Rentang Bawah</th>
                      <th width="5%" scope="col">Rentang Atas</th>
                      <th width="5%" scope="col">Aksi</th>
                    </tr>
                    <?php 
                      $no = 1;
                    foreach($aturan as $list) { ?>
                    <tr>
                      <td><?php echo $no++ ?></a></td>
                      <td><?php echo $list['teorema_bayes']; ?></td>
                      <td><?php echo $list['rentang_bawah']; ?></td>
                      <td><?php echo $list['rentang_atas']; ?></td>
                      <td>
                      <a href="<?php echo base_url() ?>back/bayes/edit/<?php echo $list['id_bayes'] ?>"><label class="btn btn-info btn-sm" >edit</a> &nbsp 
                      <a href="<?php echo base_url() ?>back/bayes/delete/<?php echo $list['id_bayes'] ?>"onclick="return confirm ('Apakah Anda yakin akan menghapus data ini ?')"><label class="btn btn-danger btn-sm delete" >delete</a> &nbsp
                      </td>
                    </tr>
                    <?php } ?>
                    <?php echo $this->session->flashdata('pesan'); ?>
                    
                    
                  </table>
                                  </div>
                                 
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
