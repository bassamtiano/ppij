<div class="container-fluid beasiswa-content">
	
	<div class="row beasiswa-wrapper">
		<div class="col-md-10 col-md-offset-1 ">
			
			<div class="row">

			<?php foreach ($data as $dkey => $dval) {
				
			?>

				<div class="col-md-4" style="margin-bottom:20px;">
					
					<div class="beasiswa-item">
						<div class="bi-thumbnail" style="background:url(<?php echo base_url('files/beasiswa/pictures/' . $dval->thumbnail) ?>) center center; background-size:cover;">
							
						</div>
						<div class="bi-description">
							<span class="bid-title">
								<?php echo $dval->title ?>
							</span>
							<span class="bid-tanggal">
								<b>Deadline Aplikasi :</b> 

								<?php 
									if(empty($dval->deadline)) {
										echo 'Deadline tidak di tentukan';
									}
									else {
										echo $dval->deadline; 
									}
								?>
							</span>
							<div class="bid-persyaratan">
								<?php echo $dval->content; ?>
							</div>
							<div class="bid-button">
								<a class="btn btn-success" href=" <?php echo base_url() . 'index.php/panduanstudi/beasiswa/' . $dval->id ?> ">
									SELENGKAPNYA
								</a>
							</div>
						</div>
					</div>

				</div>
				
			<?php } ?>

			</div>


		</div>
	</div>

</div>