<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php 
		$this->load->view('common_modules/script');
	?>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/modules/panduanstudi.css'; ?>">

</head>
<body>

	<?php  
		$this->load->view('common_modules/header');
	?>

	<?php echo $content; ?>

	<?php 
		$this->load->view('common_modules/footer');
	?>

</body>
</html>