<div class="row jurnal-menu">
	<div class="col-md-10 col-md-offset-1" style="">
		<div class="jurnal-menu-wrapper">
			<div class="jm-item <?php if(strcasecmp($selected, 'All') == 0) echo 'active'; ?>">
				<a href="<?php echo base_url() . '/index.php/jurnal/' ?>">
					All
				</a>
			</div>

			<?php foreach ($content as $ckey => $cvalue) { ?>

					<div class="jm-item <?php if(strcasecmp($selected, $cvalue->kategori) == 0) echo 'active'; ?>" >
						<a style="font-style: none; " href="<?php echo base_url() . '/index.php/jurnal/' . str_replace(' ', '_', $cvalue->kategori); ?>">
							<?php echo $cvalue->kategori; ?>
						</a>
					</div>
				
			<?php } ?>

		</div>
	</div>
</div>