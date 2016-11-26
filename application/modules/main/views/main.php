<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php 
		$this->load->view('common_modules/script');
	?>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/modules/main.css'; ?>">

</head>
<body>


	<?php $this->load->view('modules/popup_event') ?>

	<?php  
		$this->load->view('common_modules/header');
	?>

	<div class="container-fluid main-content">
		
		<div class="row">
			
			<div class="col-md-12" style="padding: 0;">

				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">

						<?php for ($i=0; $i < $count_slideshow; $i++) { ?>
							
						<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) echo 'active'; ?>" ></li>
						<!-- <li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li> -->

						<?php } ?>

					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						
						<?php $scounter = 0; ?>
						<?php foreach ($slideshow as $skey => $sval): ?>
							
							<div class="item <?php if($scounter == 0) echo 'active'; ?>">
								<div class="banner-image" style="background:url(<?php echo base_url('files/slideshow/img/' . $sval->url) ?>) center center; background-size:cover; height:550px;"></div>
								<div class="carousel-caption">
									<h3>
										<?php echo $sval->title ?>
									</h3>
									<p>
										<?php echo $sval->description ?>
									</p>
								</div>
							</div>
						<?php $scounter++; ?>
						<?php endforeach ?>


					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				
				


			</div>


		</div>

		<!-- Bagian Visi -->

		<div class="row" style="background: #FFB03B; padding-top:30px; padding-bottom: 30px; color: white;">
			<div class="col-md-8 col-md-offset-2" style="text-align: center;">
				<h3 style="margin: 0; padding: 0;">
					<b>Visi</b>
				</h3>
				<span style="font-size: 18px; text-align: center;">
					Mewujudkan PPI Japang sebagai wadah pembelajaran, yang senantiasa progresif bergerak bersama mengoptimalkan segenap potensi menuju arah yang positif
				</span>
			</div>
		</div>

		<!-- Bagian Misi -->

		<div class="row m-misi">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 mk-title">
						<h3>
							<b>Misi</b>
						</h3>
					</div>
				</div>

				<div class="row mk-wrapper">
					<div class="col-md-2 col-md-offset-1">

						<div class="mk-item">
							
							<div class="mk-image">
								<!-- <img src=" <?php echo base_url() . 'files/pictures/apple.jpg' ?> "> -->

								<div style="font-size: 60px; text-align: center; padding-top:6px; text-align: center; height: 100%; width:100%; background: #B64926; color:white;">
									1
								</div>

							</div>

							<h3 class="mk-title">
								Konsolidasi, Pelayanan dan Komunikasi
							</h3>
							<p class="mk-desc">
								Memperkokoh konsolidasi, pelayanan, dan komunikasi antara PPI Pusat, Korda dan Komsat se-Jepang
							</p>

						</div>

					</div>	

					<div class="col-md-2 ">

						<div class="mk-item">
							
							<div class="mk-image">
								<!-- <img src=" <?php echo base_url() . 'files/pictures/apple.jpg' ?> "> -->

								<div style="font-size: 60px; text-align: center; padding-top:6px; text-align: center; height: 100%; width:100%; background: #B64926; color:white;">
									2
								</div>
							</div>

							<h3 class="mk-title">
								Sinergi karya, kreativitas dan keilmuan
							</h3>
							<p class="mk-desc">
								 Mensinergikan karya, keativitas dan keilmuan pelajar Indonesia dari seluruh penjuru Jepang secara Inklusif
							</p>

							<div class="mk-button" >
								
							</div>

						</div>

					</div>	

					<div class="col-md-2 ">

						<div class="mk-item">
							
							<div class="mk-image">
								<!-- <img src=" <?php echo base_url() . 'files/pictures/apple.jpg' ?> "> -->

								<div style="font-size: 60px; text-align: center; padding-top:6px; text-align: center; height: 100%; width:100%; background: #B64926; color:white;">
									3
								</div>

							</div>

							<h3 class="mk-title">
								Rasa kepedulian dan Kontribusi
							</h3>
							<p class="mk-desc">
								membangun rasa kepedulian dan kontribusi di kalangan pelajar Indonesia di Jepang nutum masyarakat di tanna air.
							</p>

							<div class="mk-button" >
								
							</div>

						</div>

					</div>	
					<div class="col-md-2">
						
						<div class="mk-item">
							
							<div class="mk-image">
								<!-- <img src=" <?php echo base_url() . 'files/pictures/apple.jpg' ?> "> -->

								<div style="font-size: 60px; text-align: center; padding-top:5px; text-align: center; height: 100%; width:100%; background: #B64926; color:white;">
									4
								</div>

							</div>

							<h3 class="mk-title">
								Kesadaran Bergerak
							</h3>
							<p class="mk-desc">
								Menumbuhkan kesadaran bergerak bagi masyarakat Indonesia di Jepang melalui kajian kajian diskusi yang bersifat ilmiah
							</p>

							<div class="mk-button" >

							</div>

						</div>

					</div>	
					<div class="col-md-2">
						
						<div class="mk-item">
							
							<div class="mk-image">
								<!-- <img src=" <?php echo base_url() . 'files/pictures/apple.jpg' ?> "> -->

								<div style="font-size: 60px; text-align: center; padding-top:6px; text-align: center; height: 100%; width:100%; background: #B64926; color:white;">
									5
								</div>

							</div>

							<h3 class="mk-title">
								Duta muda intelektual
							</h3>
							<p class="mk-desc">
								Mengoptimalkan pecan indonesia sebagai duta muda intelectual Indonesia di negeri sakura
							</p>

							<div class="mk-button" >
								
							</div>

						</div>

					</div>	
				</div>
			</div>
		</div>

		<!-- Berita Terbaru -->


		<div class="row m-berita-terbaru" >
			<div class="col-md-10 col-md-offset-1">
				
				<h1 class="mbt-title">Berita Terbaru</h1>

				<div class="row mbt-wrapper">

						<?php foreach ($data as $dkey => $dval): ?>

						<?php $date = date_parse($dval->created_at); ?>

						
							<div class="col-md-4 ">
								<div class="mbt-item">
									<div class="mbti-img">
										<span class="mbti-label" style=" ">
											<?php echo $dval->kategori ?>
										</span>
							
										<div class="mbti-image-content" style="background:url(<?php echo base_url('files/jurnal/thumbnail/' . $dval->thumbnail) ?>) center center; background-size:cover; "></div>

									</div>
									<h3 class="mbti-title">
										<?php echo $dval->title ?>
									</h3>
									<div class="mbti-info">
										<span class="info-module" style="text-align: left;">
											Category : <?php echo $dval->kategori ?>
										</span>
										<span class="info-module" style="text-align: right;">
											Written By : Admin
										</span>
									</div>
									<div class="mbti-desc">

										<?php
											$content = $dval->content;
											$content = preg_replace("/<img[^>]+\>/i", "", $content); 
					    					echo $content;
										?>
									</div>
									<div class="mbti-button">
										<a href=" <?php echo base_url() . '/index.php/jurnal/' . str_replace(' ', '_', $dval->kategori) . '/' . $date['year'] . '/' . $date['month'] . '/' . $date['day'] . '/' . $dval->id ?> " class="btn btn-success">
											LEBIH LANJUT
										</a>
									</div>
								</div>
							</div>
						
						<?php endforeach ?>
					</div>
			</div>

			<div class="col-md-10 col-md-offset-1" style="margin-top: 30px;">
				
				<a class="btn btn-success" href=" <?php echo base_url() . '/index.php/jurnal/' ?> " style="width: 80%; margin-left: 10%; float: left;">LIHAT SELENGKAPNYA</a>

			</div>

		</div>

	</div>

	<?php 
		$this->load->view('common_modules/footer');

		if (!empty($modal)) {
			echo $modal;
		}
		
	?>



	<script type="text/javascript">
		$('.carousel').carousel();
		$('#modal_event').modal('show') ;
	</script>

</body>
</html>