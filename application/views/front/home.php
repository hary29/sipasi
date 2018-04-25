
			<!-- === BEGIN CONTENT === -->
			<div id="slideshow" class="bottom-border-shadow">
				<div class="container no-padding background-white bottom-border">
					<div class="row">
						<!-- Carousel Slideshow -->
						<div id="carousel-example" class="carousel slide" data-ride="carousel">
							<!-- Carousel Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example" data-slide-to="1"></li>
								<li data-target="#carousel-example" data-slide-to="2"></li>
							</ol>
							<div class="clearfix"></div>
							<!-- End Carousel Indicators -->
							<!-- Carousel Images -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url() ?>asset/front/img/slideshow/slide1.jpg">
								</div>
								<div class="item">
									<img src="<?php echo base_url() ?>asset/front/img/slideshow/slide2.jpg">
								</div>
								<div class="item">
									<img src="<?php echo base_url() ?>asset/front/img/slideshow/slide3.jpg">
								</div>
								<div class="item">
									<img src="<?php echo base_url() ?>asset/front/img/slideshow/slide4.jpg">
								</div>
							</div>
							<!-- End Carousel Images -->
							<!-- Carousel Controls -->
							<a class="left carousel-control" href="#carousel-example" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
							<!-- End Carousel Controls -->
						</div>
						<!-- End Carousel Slideshow -->
					</div>
				</div>
			</div>
			<div id="icons" class="bottom-border-shadow">
				<div class="container background-grey bottom-border">
					<div class="row padding-vert-60">
						<!-- Icons -->
						<div class="col-md-4 text-center">
							<i class="fa-cogs fa-4x color-primary animate fadeIn"></i>
							<h2 class="padding-top-10 animate fadeIn">Penyakit Zoonosis Sapi</h2>
							<p class="animate fadeIn">Penyakit zoonosis adalah penyakit yang dapat menular dari hewan ke manusia. Ada banyak penyakit yang termasuk dalam kelompok penyakit zoonosis ini.</p>
						</div>
						<div class="col-md-4 text-center">
							<i class="fa-cloud-download fa-4x color-primary animate fadeIn"></i>
							<h2 class="padding-top-10 animate fadeIn">Teorema Bayes</h2>
							<p class="animate fadeIn">teorema Bayes adalah sebuah teorema dengan dua penafsiran berbeda. Dalam penafsiran Bayes, teorema ini menyatakan seberapa jauh derajat kepercayaan subjektif harus berubah secara rasional ketika ada petunjuk baru. Dalam penafsiran frekuentis teorema ini menjelaskan representasi invers probabilitas dua kejadian(<a href="https://id.wikipedia.org/wiki/Teorema_Bayes">https://id.wikipedia.org/wiki/Teorema_Bayes</a>).</p>
						</div>
						<div class="col-md-4 text-center">
							<i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
							<h2 class="padding-top-10 animate fadeIn">Diagnosa</h2>
							<p class="animate fadeIn">aplikasi ini digunakan untuk membantu diagnosa penyakit zoonosis</p>
						</div>
						<!-- End Icons -->
					</div>
				</div>
			</div>
			<div id="content" class="bottom-border-shadow">
				<div class="container background-white bottom-border">
					<div class="row margin-vert-30">
						<!-- Main Text -->
						<div class="col-md-6">
							<h2>Selamat Datang</h2>
							<p>Selamat datang di aplikasi sitem pakar penyakit zooosis sapi dengan metode teorema bayes dan forward chaining</p>
							<p>Semoga kami dapat membantu anda</p>
						</div>
						<!-- End Main Text -->
						<div class="col-md-6">
							<h3 class="padding-vert-10">Daftar Penyakit</h3>
							<p>berikut daftar penyakit yang dapat di diagnosa dengan aplikasi ini</p>
							<ul class="tick animate fadeInRight"><?php 
                    foreach($penyakit as $list) { ?>
								<li><?php echo $list['nama_penyakit']; ?></li>
								<?php } ?>
							</ul>

						</div>
					</div>
				</div>
			</div>
			<!-- Portfolio -->
			<div id="portfolio" class="bottom-border-shadow">
				<div class="container bottom-border">
					<div class="row padding-top-40">
						<ul class="portfolio-group">
							<!-- Portfolio Item -->
							<li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
								<a href="#">
									<figure class="animate fadeInLeft">
										<img alt="image1" src="<?php echo base_url() ?>asset/front/img/frontpage/image1.jpg">
										<figcaption>
											<h3>Velit esse molestie</h3>
											<span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
										</figcaption>
									</figure>
								</a>
							</li>
							<!-- //Portfolio Item// -->
							<!-- Portfolio Item -->
							<li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
								<a href="#">
									<figure class="animate fadeIn">
										<img alt="image2" src="<?php echo base_url() ?>asset/front/img/frontpage/image2.jpg">
										<figcaption>
											<h3>Quam nunc putamus</h3>
											<span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
										</figcaption>
									</figure>
								</a>
							</li>
							<!-- //Portfolio Item// -->
							<!-- Portfolio Item -->
							<li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
								<a href="#">
									<figure class="animate fadeInRight">
										<img alt="image3" src="<?php echo base_url() ?>asset/front/img/frontpage/image3.jpg">
										<figcaption>
											<h3>Placerat facer possim</h3>
											<span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
										</figcaption>
									</figure>
								</a>
							</li>
							<!-- //Portfolio Item// -->
							<!-- Portfolio Item -->
							<li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
								<a href="#">
									<figure class="animate fadeInLeft">
										<img alt="image4" src="<?php echo base_url() ?>asset/front/img/frontpage/image4.jpg">
										<figcaption>
											<h3>Nam liber tempor</h3>
											<span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
										</figcaption>
									</figure>
								</a>
							</li>
							<!-- //Portfolio Item// -->
							<!-- Portfolio Item -->
							<li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
								<a href="#">
									<figure class="animate fadeIn">
										<img alt="image5" src="<?php echo base_url() ?>asset/front/img/frontpage/image5.jpg">
										<figcaption>
											<h3>Donec non urna</h3>
											<span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
										</figcaption>
									</figure>
								</a>
							</li>
							<!-- //Portfolio Item// -->
							<!-- Portfolio Item -->
							<li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
								<a href="#">
									<figure class="animate fadeInRight">
										<img alt="image6" src="<?php echo base_url() ?>asset/front/img/frontpage/image6.jpg">
										<figcaption>
											<h3>Nullam consectetur</h3>
											<span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
										</figcaption>
									</figure>
								</a>
							</li>
							<!-- //Portfolio Item// -->
						</ul>
					</div>
				</div>
			</div>
			<!-- End Portfolio -->
			<!-- === END CONTENT === -->
			