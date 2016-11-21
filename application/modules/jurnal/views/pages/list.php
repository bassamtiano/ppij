<div class="container-fluid jurnal-list">
	<?php echo $menu ?>

	<div class="row list-wrapper">
		<div class="col-md-10 col-md-offset-1 lw-container">
			<div class="row">
				
			<?php if(!empty($data)) { foreach ($data as $dkey => $dval) { ?>
				
				<?php $date = date_parse($dval->created_at); ?>

				<div class="col-md-4" style="">

					<div class="list-item">
						<div class="li-img">
							<span class="li-clip">
								<?php echo $dval->kategori; ?>
							</span>
							
							<div class="li-img-content" style="background:url(<?php echo base_url('files/jurnal/thumbnail/' . $dval->thumbnail) ?>) center center; background-size:cover; "></div>

						</div>
						<h3 class="li-title">
							<?php echo $dval->title; ?>
						</h3>
						<div class="li-info">
							<span class="info-module" style="text-align: left;">
								Category : <?php echo $dval->kategori; ?>
							</span>
							<span class="info-module" style="text-align: right;">
								Written By : Admin
							</span>
						</div>
						<div class="li-desc">
							<?php 
								$content = $dval->content;
								$content = preg_replace("/<img[^>]+\>/i", "", $content); 
		    					echo $content;
							?>
						</div>
						<div class="li-button">
							<a href="<?php echo base_url() . '/index.php/jurnal/' . str_replace(' ', '_', $dval->kategori) . '/' . $date['year'] . '/' . $date['month'] . '/' . $date['day'] . '/' . $dval->id  ?>" class="btn btn-success">
								LEBIH LANJUT
							</a>
						</div>
					</div>

				</div>

			<?php }} ?>
				

			</div>
		</div>

		<div class="col-md-10 col-md-offset-1">
			<nav aria-label="Page navigation">
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

</div>