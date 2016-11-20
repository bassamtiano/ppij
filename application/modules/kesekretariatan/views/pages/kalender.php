<div class="container-fluid kalender-content">
	
	<div class="row kalender-wrapper">
		<div class="col-md-12" style="text-align: center;">
			<h1>
				KALENDER KEGIATAN
			</h1>
		</div>
	</div>

	<div class="row kalender-wrapper">

		<div class="col-md-10 col-md-offset-1 ">

			<div class="row">

			<?php 

			$counter = 0;

				foreach ($content as $ckey => $cval) { 
				$tanggal = date('d', strtotime($cval->tanggal));
				$bulan = date('m', strtotime($cval->tanggal));
				$tahun = date('Y', strtotime($cval->tanggal));

			?>

				

			

				<?php 
					if($bulan != $counter) {
						$counter = $bulan;
				?>
						<div class="col-md-12 kalender-bulan">
							<h1>
								<?php echo date('F', strtotime($cval->tanggal))?>
							</h1>
						</div>

						<div class="col-md-3">
							<div class="kalender-item">
								<div class="kalender-date">
									<?php echo $tanggal; ?>
								</div>

								<div class="kalender-description">
									<div class="desc-title">
										<?php echo $cval->nama; ?>
									</div>
									<div class="desc-time">
										<?php echo '<b>' . date('d F Y', strtotime($cval->tanggal)) . '</b>, ' . date('H:i', strtotime($cval->waktu_mulai)) . ' - ' . date('H:i', strtotime($cval->waktu_selesai)) ; ?>
									</div>
									<div class="desc-place">
										<?php echo $cval->tempat ?>
									</div>
									<div class="desc-content">
										<?php echo $cval->konten ?>
									</div>
									<div class="desc-button">
										<a class="btn btn-primary" href="">POSTER</a>
										<a class="btn btn-success" href=" <?php echo base_url() . '/index.php/kesekretariatan/kalender/' . $tahun . '/' . $bulan . '/' . $tanggal . '/' . $cval->id; ?> ">SELENGKAPNYA</a>
									</div>
								</div>
							</div>
						</div>

				

				<?php 
					}

					else {
				?>

						<div class="col-md-3">
							<div class="kalender-item">
								<div class="kalender-date">
									<?php echo $tanggal; ?>
								</div>

								<div class="kalender-description">
									<div class="desc-title">
										<?php echo $cval->nama; ?>
									</div>
									<div class="desc-time">
										<?php echo '<b>' . date('d F Y', strtotime($cval->tanggal)) . '</b>, ' . date('H:i', strtotime($cval->waktu_mulai)) . ' - ' . date('H:i', strtotime($cval->waktu_selesai)) ; ?>
									</div>
									<div class="desc-place">
										<?php echo $cval->tempat ?>
									</div>
									<div class="desc-content">
										<?php echo $cval->konten ?>
									</div>
									<div class="desc-button">
										<a class="btn btn-primary" href="">POSTER</a>
										<a class="btn btn-success" href=" <?php echo base_url() . '/index.php/kesekretariatan/kalender/' . $tahun . '/' . $bulan . '/' . $tanggal . '/' . $cval->id; ?> ">SELENGKAPNYA</a>
									</div>
								</div>
							</div>
						</div>

				<?php } ?>

			


			<?php } ?>

			</div>

		</div>
		
	</div>

</div>	