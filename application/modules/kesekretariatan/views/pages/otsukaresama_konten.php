<div class="container-fluid otsukaresama-konten-content">
	<div class="row otsukaresama-konten-wrapper">
		<div class="col-md-10 col-md-offset-1">
			<div class="otsukaresama-konten-item">
				
				<div class="item-title">
					<div class="logo">
						<img src=" <?php echo base_url() . 'assets/img/ppij-logo.svg' ?> " />
					</div>

					<h2>
						<b>
							Otsukaresama
						</b>
					</h2>	
					<h3>
						<?php echo $data_title->title ?>
					</h3>
				</div>
				
				<div class="item-content">
					
					

					 <?php foreach ($data as $dkey => $dval): ?>
					 	
					 	

					 	<img src="<?php echo base_url('/files/otsukaresama/') . $dval->url; ?>">

					 <?php endforeach ?>
					 
				</div>
			</div>
		</div>
	</div>
</div>