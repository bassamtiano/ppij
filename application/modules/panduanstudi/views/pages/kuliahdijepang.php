<div class="container-fluid panduanstudi-content">
	<div class="row">
		
		<div class="col-md-10 col-md-offset-1">
			


			<div class="psc-item">
				<div class="psci-content">

					<div class="content-title">
						<div class="logo">
							<img src=" <?php echo base_url() . 'assets/img/ppij-logo.svg' ?> " />
						</div>

						<h2>
							<b>
								Panduan Studi di Jepang
							</b>
						</h2>	

						<h3>Apakah Kamu ingin Kuliah di Jepang, Berikut ini panduannya.</h3>

						

					</div>

					<div class="content-item">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">

							<?php foreach ($data as $dkey => $dval) { ?>
									
								<li role="presentation" class="<?php if ($dval->step == 1) echo 'active'; ?>">
									<a href="#<?php echo str_replace(' ', '_', strtolower($dval->title)); ?>" aria-controls="<?php echo str_replace(' ', '_', strtolower($dval->title)); ?>" role="tab" data-toggle="tab">
										<?php echo $dval->title ?>
									</a>
								</li>
							
							<?php } ?>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<?php foreach ($data as $dkey => $dval) { ?>

								<div role="tabpanel" class="tab-pane <?php if ($dval->step == 1) echo 'active'; ?>" id="<?php echo str_replace(' ', '_', strtolower($dval->title)); ?>">
									<div style=" margin: 15px 0; padding: 0 15px;">
										<?php echo $dval->content ?>	
									</div>
								</div>
							
							<?php } ?>
						</div>

					</div>

					

				</div>
			</div>

		</div>

	</div>
</div>