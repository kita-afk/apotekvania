<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Import CSS -->
		<link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/google-code-prettify/bin/prettify.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/select2/dist/css/select2.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/switchery/dist/switchery.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/starrr/dist/starrr.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') ?>" rel="stylesheet">


		<link href="<?php echo base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">

		<!-- PNotify -->
		<link href="<?php echo base_url('vendors/pnotify/dist/pnotify.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/pnotify/dist/pnotify.nonblock.css') ?>" rel="stylesheet">


		<!-- FullCalendar -->
		<link href="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.min.css') ?>" rel="stylesheet" >
		<link href="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.print.css') ?>" rel="stylesheet" media="print">
	    

			<!-- Datatables -->
		<link href="<?php echo base_url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">
			<!-- Custom Theme Style -->
		<!-- <link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet"> -->
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <h3 style="text-align: center">Login</h3>
<div class="login" style="display: flex;justify-content: center;margin-bottom: 100px !important">
    <form action="<?=  base_url("Example/login_masuk");  ?>" method="POST">
    <label for="">Username</label>
    <input type="text" name="username" required placeholder="Username" class="form-control" style="width: 400px">
    <br>
    <label for="">Password</label>
    <input type="password" name="password" required placeholder="Password" class="form-control">
    <br>
    <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
</div>
</body>
</html>