<div class="container-fluid kontak-content">
	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row kontak-item">
				<div class="col-md-6">
					<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBMZmGt66kMi7EkgbvE6U2CALzrTY2Pvow'></script><div style='overflow:hidden;height:500px;width:100%;'><div id='gmap_canvas' style='height:500px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embedmaps.net'>google maps embed</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=63d8dc4643d0f0e5918615d23b67ec7550d9846d'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(35.6324921954798,139.72133441349183),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(35.6324921954798,139.72133441349183)});infowindow = new google.maps.InfoWindow({content:'<strong>Persatuan Pelajar Indonesia Jepang</strong><br>Shinagawa-ku, Higashi-Gotanda 5-2-9<br>141-0022 Tokyo<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
				</div>
				<div class="col-md-6">
					<h2>Kontak</h2>
					<form method="post" action="<?php echo base_url() . 'index.php/kontak/send' ?>">
						<div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Nama">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Subjek</label>
							<input type="text" class="form-control" name="subject" id="exampleInputEmail1" placeholder="Subjek">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Pesan</label>
							<textarea class="form-control" rows="3" name="message"></textarea>
						</div>
						<div class="form-group">
							
							<button type="submit" class="btn btn-success">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

