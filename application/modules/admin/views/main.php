<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin ~ Diaspora Indonesia Network</title>

    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/bootstrap.min.css') ?> ">
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/font-awesome.min.css') ?> ">

    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/AdminLTE.min.css') ?> ">
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/skins/_all-skins.min.css') ?> ">

</head>
<body class="hold-transition skin-blue sidebar-mini" style="margin:0; padding:0;">

	<div class="wrapper">

        <?php $this->load->view('modules/header') ?>

        <?php $this->load->view('modules/sidebar') ?>


        <div class="content-wrapper">


        </div>

        <?php $this->load->view('modules/footer') ?>      


    </div><!-- ./wrapper -->

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/adminlte.min.js'); ?>"></script>

</body>
</html>