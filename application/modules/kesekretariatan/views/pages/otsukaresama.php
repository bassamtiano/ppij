<div class="container-fluid otsukaresama-list">
	
	<div class="row list-wrapper">
		<div class="col-md-10 col-md-offset-1 lw-container">
			<div class="row">
			
				<?php foreach ($data as $dkey => $dval): ?>
					
					<div class="col-md-4" style="">
						<div class="list-item">
							<div class="li-img">
								<div class="li-img-content" style="background:url(<?php echo base_url('files/otsukaresama/' . $dval->url) ?>) center center; background-size:cover; "></div>
							</div>
							<h3 class="li-title">
								<?php echo $dval->title ?>
							</h3>
							<div class="li-button">
								<a href="<?php echo base_url('index.php/kesekretariatan/otsukaresama/' . $dval->id) ?>" class="btn btn-success">
									LEBIH LANJUT
								</a>
							</div>
						</div>
					</div>

				<?php endforeach ?>

				
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