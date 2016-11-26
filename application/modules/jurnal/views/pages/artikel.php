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

				<?php $date = date_parse($data->created_at); ?>

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

					<div style="width: 100%; float: left; padding: 10px;">
						<a href="http://www.facebook.com/share.php?u=<?php echo base_url('index.php/jurnal/') . str_replace('_', ' ', strtolower($data->kategori)) . '/' . $date['year'] . '/' . $date['month'] . '/' . $date['day'] . '/' . $data->id; ?>&title=[<?php echo $data->title; ?>]" onclick="window.open(this.href, 'newwindow', 'width=300, height=250'); return false;">
							<i class="fa fa-facebook" style="margin-right: 10px;"></i>Share on Facebook
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>