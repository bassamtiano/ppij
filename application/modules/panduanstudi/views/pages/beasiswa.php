<div class="container-fluid beasiswa-item-content">
	<div class="row beasiswa-item-wrapper">
		<div class="col-md-10 col-md-offset-1">
			<div class="bic-item">
				<div class="item-poster" >
					<img style="width: 100%" src=" <?php echo base_url() . 'files/panduanstudi/thumbnail/' . $data->thumbnail ?> ">
				</div>
				
				<div class="item-title">
					<h3>
						<?php echo $data->title ?>
					</h3>	
					<div class="title-wrapper">
						<span class="tw-date">
							<?php
								echo date('d F Y', strtotime($data->created_at));
							?>
						</span>
						<span class="tw-author">
							Oleh <b>Admin</b>
						</span>
					</div>
				</div>
				
				<div class="item-content">
					
					<?php echo $data->content; ?>

				</div>
			</div>
		</div>
	</div>
</div>