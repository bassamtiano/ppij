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
				
				<!-- Slider -->
				<div class="carousel slide" data-ride="carousel" style="margin: 0; padding: 0; width: 100%; ">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox" style="width: 100%;  overflow: none;">

						<div class="item active">
							<div class="banner-image" style="background:url(<?php echo base_url('files/pictures/1.jpg') ?>) center center; background-size:cover; height:550px;"></div>
							<div class="carousel-caption" style="margin-bottom: 15px;">
								Gambar 1
							</div>
						</div>
						<div class="item">
							<!-- <img src=" <?php echo base_url() . 'files/pictures/2.jpg' ?> " alt="..." style="width: 100%; max-height: 600px;" > -->
							<div class="banner-image" style="background:url(<?php echo base_url('files/pictures/2.jpg') ?>) center center; background-size:cover; height:550px;"></div>
							<div class="carousel-caption" style="margin-bottom: 15px;">
								Gambar 2
							</div>
						</div>
						<div class="item">
							<!-- <img src=" <?php echo base_url() . 'files/pictures/3.jpg' ?> " alt="..." style="width: 100%; max-height: 600px;" > -->
							<div class="banner-image" style="background:url(<?php echo base_url('files/pictures/3.jpg') ?>) center center; background-size:cover; height:550px;"></div>
							<div class="carousel-caption" style="margin-bottom: 15px;">
								Gambar 3
							</div>
						</div>
						
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
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
					
					<div class="col-md-4 ">
						<div class="mbt-item">
							<div class="mbti-img">
								<span class="mbti-label" style=" ">
									Acara
								</span>
					
								<div class="mbti-image-content" style="background:url(<?php echo base_url('files/pictures/1.jpg') ?>) center center; background-size:cover; "></div>

							</div>
							<h3 class="mbti-title">
								Pengurus PPI Jepang 2016-2017 - Kominfo
							</h3>
							<div class="mbti-info">
								<span class="info-module" style="text-align: left;">
									Category : Jurnal
								</span>
								<span class="info-module" style="text-align: right;">
									Written By : Admin
								</span>
							</div>
							<div class="mbti-desc">
								Halo sahabat bangsa! Sesuai pepatah "tak kenal maka tak sayang" maka ijinkan kami memperkenalkan diri kami sebagai pengurus harian PPI Jepang 2016-2017. Perkenalan ini dibagi menjadi tiga bagian dan yang mendapat kesempatan di bagian pertama ini adalah Tim Kominfo. Yuk kita lihat siapa saja yang ada di tim yang berperan untuk menjalankan media komunikasi PPI Jepang!
							</div>
							<div class="mbti-button">
								<a href="#" class="btn btn-success">
									LEBIH LANJUT
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 ">
						<div class="mbt-item">
							<div class="mbti-img">
								<span class="mbti-label" style=" ">
									Acara
								</span>
					
								<div class="mbti-image-content" style="background:url(<?php echo base_url('files/pictures/2.jpg') ?>) center center; background-size:cover; "></div>

							</div>
							<h3 class="mbti-title">
								Pengurus PPI Jepang 2016-2017 - Kominfo
							</h3>
							<div class="mbti-info">
								<span class="info-module" style="text-align: left;">
									Category : Jurnal
								</span>
								<span class="info-module" style="text-align: right;">
									Written By : Admin
								</span>
							</div>
							<div class="mbti-desc">
								Halo sahabat bangsa! Sesuai pepatah "tak kenal maka tak sayang" maka ijinkan kami memperkenalkan diri kami sebagai pengurus harian PPI Jepang 2016-2017. Perkenalan ini dibagi menjadi tiga bagian dan yang mendapat kesempatan di bagian pertama ini adalah Tim Kominfo. Yuk kita lihat siapa saja yang ada di tim yang berperan untuk menjalankan media komunikasi PPI Jepang!
							</div>
							<div class="mbti-button">
								<a href="#" class="btn btn-success">
									LEBIH LANJUT
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-4 ">
						<div class="mbt-item">
							<div class="mbti-img">
								<span class="mbti-label" style=" ">
									Acara
								</span>
					
								<div class="mbti-image-content" style="background:url(<?php echo base_url('files/pictures/3.jpg') ?>) center center; background-size:cover; "></div>

							</div>
							<h3 class="mbti-title">
								Pengurus PPI Jepang 2016-2017 - Kominfo
							</h3>
							<div class="mbti-info">
								<span class="info-module" style="text-align: left;">
									Category : Jurnal
								</span>
								<span class="info-module" style="text-align: right;">
									Written By : Admin
								</span>
							</div>
							<div class="mbti-desc">
								Halo sahabat bangsa! Sesuai pepatah "tak kenal maka tak sayang" maka ijinkan kami memperkenalkan diri kami sebagai pengurus harian PPI Jepang 2016-2017. Perkenalan ini dibagi menjadi tiga bagian dan yang mendapat kesempatan di bagian pertama ini adalah Tim Kominfo. Yuk kita lihat siapa saja yang ada di tim yang berperan untuk menjalankan media komunikasi PPI Jepang!
							</div>
							<div class="mbti-button">
								<a href="#" class="btn btn-success">
									LEBIH LANJUT
								</a>
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="col-md-10 col-md-offset-1" style="margin-top: 30px;">
				
				<a class="btn btn-success" href="" style="width: 80%; margin-left: 10%; float: left;">LIHAT SELENGKAPNYA</a>

			</div>

		</div>

	</div>

	<?php 
		$this->load->view('common_modules/footer');
	?>

	<script type="text/javascript">
		$('.carousel').carousel()
	</script>

</body>
</html>