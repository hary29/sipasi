						<!-- === BEGIN CONTENT === -->
						<div id="content">
								<div class="container background-white">
									 <?php 
	if ($this->session->flashdata('sukses')) {
		echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
	}
	echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
	 ?>
										<div class="row margin-vert-30">
												<!-- Register Box -->
												<div class="col-md-6 col-md-offset-3 col-sm-offset-3">
														<form class="form-horizontal" method="post" action="<?php echo base_url() ?>front/register/tambah_aksi">
																			 <div class="control-group">
																<div class="signup-header">
																		<h2>Register a new account</h2>
																		<p>Already a member? Click
																				<a href="<?php echo base_url() ?>front/log"> HERE </a>to login to your account.</p>
																</div>
																<div class="row">
																<label>Kode registrasi
																		<span class="color-red">*</span>
																</label>
																<input type="text" class="form-control margin-bottom-20" name="kode_pendaftaran" id="kode_pendaftaran" readonly="readonly" value="<?php echo $kode; ?>"/>
															</div>
																<div class="row">
																<label>Nama</label>
																<input type="text" class="form-control margin-bottom-20" name="nama" id="nama" placeholder="nama">
																<label>Alamat</label>
																<input type="text" class="form-control margin-bottom-20" name="alamat" id="alamat" placeholder="Enter alamat">
																												<label class="control-label">Jenis Kelamin 	<span class="color-red">*</span></label>
																												<div class="radio-list">
																														<label class="radio-inline p-0">
																																<div class="radio radio-info">
																																		<input type="radio" name="jenis_kelamin" id="radio1" value="L">
																																		<label for="radio1">Laki-laki</label>
																																</div>
																														</label>
																														<label class="radio-inline">
																																<div class="radio radio-info">
																																		<input type="radio" name="jenis_kelamin" id="radio2" value="P">
																																		<label for="radio2">Perempuan </label>
																																</div>
																														</label>
																													</div>
																<label>Username
																		<span class="color-red">*</span>
																</label>
															 <input type="text" class="form-control margin-bottom-20" name="username" id="Username" placeholder="Username">
																
																				<label>Password
																						<span class="color-red">*</span>
																				</label>
																				<input type="password" class="form-control" name="password" id="password" placeholder="Enter pwd">
																
																<hr>
																<div class="row">
																		<div class="col-lg-8">
																				<label class="checkbox">
																						<input type="checkbox">I read the
																						<a href="#">Terms and Conditions</a>
																				</label>
																		</div>
																		<div class="col-lg-4 text-right">
																				<button class="btn btn-primary" type="submit">Register</button>
																		</div>
																</div>
														</form>
												</div>
												<!-- End Register Box -->
										</div>
								</div>
						</div>
				</div></div></div></div>
						<!-- === END CONTENT === -->