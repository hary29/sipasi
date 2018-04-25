<div id="content">
				<div class="container background-white">
					<div class="row margin-vert-30">
						<!-- Main Column -->
						<div class="col-md-9">
							<!-- Blog Post -->
							<?php 
                     
                    foreach($penyakit as $list) { ?>
							<div class="blog-post padding-bottom-20">
								<!-- Blog Item Header -->
								<div class="blog-item-header">
									<!-- Title -->
									<h2>
										<a href="#">
											<?php echo $list['nama_penyakit']; ?></a>
									</h2>
									<div class="clearfix"></div>
									<!-- End Title -->
									<!-- Date -->
									<div class="blog-post-date">
										<a href="#">22nd Apr, 2014</a>
									</div>
									<!-- End Date -->
								</div>
								<!-- End Blog Item Header -->
								<!-- Blog Item Details -->
								<div class="blog-post-details">
									<!-- Author Name -->
									<div class="blog-post-details-item blog-post-details-item-left">
										<i class="fa fa-user color-gray-light"></i>
										<a href="#">Admin</a>
									</div>
									<!-- End Author Name -->
									<!-- Tags -->
									<div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
										<i class="fa fa-tag color-gray-light"></i>
										<a href="#">Sistem Pakar</a>,
										<a href="#">Sapi</a>,
										<a href="#">Teorema Bayes</a>
										<a href="#">forward Chaing</a>
									</div>
									<!-- End Tags -->
									<!-- # of Comments -->
									<!-- <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
										<a href="">
											<i class="fa fa-comments color-gray-light"></i>
											2 Comments
										</a>
									</div> -->
									<!-- End # of Comments -->
								</div>
								<!-- End Blog Item Details -->
								<!-- Blog Item Body -->
								<div class="blog">
									<div class="clearfix"></div>
									<div class="blog-post-body row margin-top-15">
										<div class="col-md-5">
											<img class="margin-bottom-20" src="assets/img/blog/image1.jpg" alt="thumb1">
										</div>
										<div class="col-md-7">
											<p><?php echo $list['definisi']; ?></p>
											<!-- Read More -->
											<a href="#" class="btn btn-primary">
												Read More
												<i class="icon-chevron-right readmore-icon"></i>
											</a>
											<!-- End Read More -->
										</div>
									</div>
								</div>
								<!-- End Blog Item Body -->
							</div><?php } ?>
						</div>
							<!-- End Blog Item -->
						<!-- End Main Column -->
						<!-- Side Column -->
						<div class="col-md-3">
							<!-- Blog Tags -->
							<div class="blog-tags">
								<h3>Tags</h3>
								<ul class="blog-tags">
									<li>
										<a href="#" class="blog-tag">Sistem Pakar</a>
									</li>
									<li>
										<a href="#" class="blog-tag">Penyakit</a>
									</li>
									<li>
										<a href="#" class="blog-tag">Sapi</a>
									</li>
									<li>
										<a href="#" class="blog-tag">Teorema Bayes</a>
									</li>
									<li>
										<a href="#" class="blog-tag">Forward chaining</a>
									</li>
								</ul>
							</div>
							<!-- End Blog Tags -->
							<!-- Recent Posts -->
							<div class="recent-posts">
								<h3>Daftar Penyakit</h3>
								<?php 
                    foreach($penyakit as $list) { ?>
								<ul class="posts-list margin-top-10">
									<li>
										<div class="recent-post">
											<!-- <a href="">
												<img class="pull-left" src="assets/img/blog/thumbs/thumb1.jpg" alt="thumb1">
											</a> -->
											<a href="#" class="posts-list-title"><?php echo $list['nama_penyakit']; ?></a>
											<br>
											<span class="recent-post-date">
												July 30, 2013
											</span>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
								<?php } ?>
							</div>

							<!-- End Recent Posts -->
						</div>
						<!-- End Side Column -->
					</div>
				</div>
			</div>
			<!-- === END CONTENT === -->