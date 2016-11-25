<div class="container-fluid kegiatan-content">
	<div class="row kegiatan-wrapper">
		<div class="col-md-10 col-md-offset-1">
			<div class="kc-item">
				<div class="item-poster">
					<img src=" <?php echo base_url() . 'files/pictures/visi-misi.jpg' ?> ">
				</div>
				
				<div class="item-title">
					<h3>
						<?php echo $data->nama; ?>
					</h3>	
					<div class="title-wrapper">
						<span class="tw-date">
							<?php echo date('d F Y', strtotime($data->created_at)) ?>
						</span>
						<span class="tw-author">
							Oleh <b>Admin</b>
						</span>
					</div>
				</div>
				
				<div class="item-content">
					<div class="content-description">
						<div class="desc-title">
							<h3>
								Deskripsi Kegiatan 
							</h3>
						</div>
						<div class="desc-datetiem">
							<b>Tanggal & Waktu : </b>
							<b><?php echo date('d F Y', strtotime($data->tanggal)) ?>,</b> <?php echo date('H:i', strtotime($data->waktu_mulai)) . ' - ' . date('H:i', strtotime($data->waktu_selesai)) ?>
						</div>
						<div class="desc-tempat">
							<b>Tempat : </b>
							<?php echo $data->tempat ?>
						</div>
						<div class="desc-button">
							<a class="btn btn-primary" href="">POSTER</a>
						</div>

					</div>
					
					<?php echo $data->content ?>

				</div>
			</div>
		</div>
	</div>
</div>