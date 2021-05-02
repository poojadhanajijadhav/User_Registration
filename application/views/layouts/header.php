<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$page_title?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url();?>assets/dist/css/AdminLTE.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/dist/css/skins/_all-skins.css">
	<!--<link href="<?=base_url();?>assets/dist/css/bootstrap-imageupload.css" rel="stylesheet">-->
	<meta charset="utf-8">
	
	<!-- Custom -->
	<script src="<?=base_url();?>assets/custom/js/validations.js"></script>
	<!-- /Custom -->
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- daterange picker -->
	<link rel="stylesheet" href="<?=base_url();?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="<?=base_url();?>assets/plugins/iCheck/all.css">
	<!-- Bootstrap Color Picker -->
	<link rel="stylesheet" href="<?=base_url();?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
	<!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="<?=base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?=base_url();?>assets/plugins/select2/select2.min.css">
	<style>
		.content-wrapper{
			min-height:700px !important;
		}
	</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<!-- POPUP -->
<div id="popupModal" class="modal" <?php if($this->session->flashdata('title') != null){echo 'style="display:block"';} ?> >
  <div class="modal-dialog">
	<!-- Modal content-->
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid <?=$this->session->flashdata('css_class');?>">
				<div class="box-header with-border">
					<h3 class="box-title">
						<?=$this->session->flashdata('title');?>
					</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" onclick="$('#popupModal').hide();"><i class="fa fa-times"></i></button>
					</div>
					<!-- /.box-tools -->
				</div>
				<!-- /.box-header -->
				<div class="box-body" id="popupBody">
					<?=$this->session->flashdata('message');?>
				</div>
				<!-- /.box-body -->
				<div class="box-footer" id="popupFooter" >
					<button class="btn btn-defaul" type="button" onclick="$('#popupModal').hide();">Ok</button>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>

  </div>
</div>
<!-- /POPUP -->

<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url();?>Home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>User</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">User Panel</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=$this->session->userdata('user_name');?>
                  <small>User Panel</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a onclick="return confirm('Are your sure you want to logout ?');" href="<?=site_url();?>Home/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
			  <img src="<?=base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
			  <p><?=$this->session->userdata('user_name');?></p>
			  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<li class="<?=$dashboard?>">
				<a href="<?=site_url();?>Home">
					<i class="fa fa-calendar"></i><span>Dashboard</span>
				</a>
			</li>
		</ul>
  </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->