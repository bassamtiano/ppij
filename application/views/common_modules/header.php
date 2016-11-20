<?php
	
	$header_url = base_url('index.php');

?>

<div class="container-fluid main-header" >

	<div class="row h-navbar" >
	
		<div class="col-md-10 col-md-offset-1 h-banner">

	        <div class="col-md-10 col-md-offset-1" >

	        	<div style="float:left; padding:3px;">
	        		<img src=" <?php echo base_url() . 'assets/img/ppij-logo.svg' ?> " style="float: left; width: 80px; margin: 5px;" />
	        		<div style="float: left; width: 250px; margin-left: 10px;">
	        			<b style="font-size: 22px; margin: 0; padding: 0;  float: left; width: 100%;">Persatuan Pelajar Indonesia</b>
	        			<span style="font-size: 17px; margin: 0; padding: 0; line-height: 80%; float: left; width: 100%;" >Jepang</span>	
	        		</div>
	        		
	        	</div>

	        	<ul class="subnavbar-wrapper">

	        		<div class="btn-subnavbar" data-sub="#submenu-belajar">
		                <li class="menu-item" style="">
		                	
		                	<span style="">
		                		<i class="icon fa fa-info-circle" style="margin-right: 10px;"></i>
		                		About
		                	</span>

		                	<ul class="submenu-wrapper">
		                	
	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/about/history' ?>" >
		                				<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
		                				History PPI Jepang
	                				</a>
	                			</li>

	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/about/pengurus' ?>" >
	                					<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
	                					Pengurus Aktif
	                				</a>
	                			</li>
	                		
	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/about/korda_komsat' ?>" >
	                					<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
	                					Daftar Korda-Komsat
	                				</a>
	                			</li>

	                		</ul>

		                </li>
		            </div>


	        		<div class="btn-subnavbar" data-sub="#submenu-belajar">
		                <li class="menu-item" style="">
		                	
		                	<span style="">
		                		<i class="icon fa fa-file-text-o" style="margin-right: 10px;"></i>
		                		Jurnal
		                	</span>

		                	<ul class="submenu-wrapper">
		                	
	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/jurnal/acara' ?>" >
		                				<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
		                				Acara
	                				</a>
	                			</li>

	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/jurnal/hidup_di_jepang' ?>" >
	                					<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
	                					Hidup di Jepang
	                				</a>
	                			</li>

	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/jurnal/pernyataan_sikap' ?>" >
	                					<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
	                					Pernyataan Sikap
	                				</a>
	                			</li>
	                		</ul>

		                </li>
		            </div>

		            <div class="btn-subnavbar" data-sub="#submenu-belajar">
		                <li class="menu-item">
		                	<i class="icon fa fa-map-marker" style="margin-right: 10px;"></i>
		                	<span style="">Panduan Studi</span>

		                	<ul class="submenu-wrapper">
		                	
	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/panduanstudi/kuliahdijepang' ?>" >
		                				<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
		                				Kuliah di Jepang
	                				</a>	
	                			</li>
	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/panduanstudi/beasiswa' ?>" >
	                					<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
	                					Beasiswa
	                				</a>
	                			</li>
	                		
	                		</ul>
		                </li>
		            </div>

		            <div class="btn-subnavbar" data-sub="#submenu-belajar">
		                <li class="menu-item">
		                	<i class="icon fa fa-users" style="margin-right: 10px;"></i>
		                	<span style="">Kesekretariatan</span>

		                	<ul class="submenu-wrapper">
		                	
	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/kesekretariatan/adart' ?>" >
		                				<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
		                				AD/ART
	                				</a>
	                			</li>
	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/kesekretariatan/kongres' ?>" >
		                				<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
		                				Kongres
	                				</a>
	                			</li>
	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/kesekretariatan/otsukaresama' ?>" >
		                				<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
		                				Otsukaresama
	                				</a>
	                			</li>
	                			<li class="submenu-wrapper-item">
	                				<a class="sw-link" href="<?php echo $header_url . '/kesekretariatan/kalender' ?>" >
	                					<i class="icon fa fa-circle-o" style="margin-right: 5px;"></i>
	                					Kalender Kegiatan
	                				</a>
	                			</li>
	                		
	                		</ul>
		                	
		                </li>
		            </div>

		            <a href="<?php echo $header_url . '/faq' ?>" class="btn-subnavbar" data-sub="#submenu-belajar">
		                <li class="menu-item">
		                	<i class="icon fa fa-question-circle" style="margin-right: 10px;"></i>
		                	<span style="">FAQ</span>
		                </li>
		            </a>

		            <a href="<?php echo $header_url . '/kontak' ?>" class="btn-subnavbar" data-sub="#submenu-belajar">
		                <li class="menu-item">
		                	<i class="icon fa fa-comments" style="margin-right: 10px;"></i>
		                	<span style="">Kontak</span>
		                </li>
		            </a>
		            
	        	</ul>
	            
	        </div>

		</div>

	</div>

</div>


