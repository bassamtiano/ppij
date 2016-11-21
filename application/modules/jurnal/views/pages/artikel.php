<div class="container-fluid jurnal-content">
	
	<?php echo $menu; ?>

	<div class="row">
		
		<div class="col-md-12 jurnal-thumbnail">
			
			<div class="" style="background:url(<?php echo base_url('files/jurnal/thumbnail/' . $data->thumbnail ) ?>) center center; background-size:cover; height:500px;"></div>
		</div>

	</div>

	<div class="row jurnal-wrapper">
		<div class="col-md-10 col-md-offset-1">
			<div class="jw-item">
				<div class="jwi-category" >
					<span class="category-title ">
						<?php echo $data->kategori ?>


					</span>	
				</div>
				<div class="jwi-title">
					<h3>
						<?php echo $data->title ?>
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
				
				<div class="jwi-content">
					<?php
						echo $data->content;
					?>
				</div>
			</div>
		</div>
	</div>
</div>