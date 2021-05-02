<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
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
<div class="login-box">
  <div class="login-logo">
	<center>
			<img alt="logo" src="<?php echo base_url(); ?>assets/custom/images/logo1.png" style="width: 270px;"/>   
	</center>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">User </p>

    <form action="<?=site_url();?>login/authenticate" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Enter email id..." name="u_id" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Enter password..." name="password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-offset-2 col-xs-4">
          <a href="<?=site_url();?>User/" class="btn btn-primary btn-block btn-flat">Sign up</a>
        </div>
		 <div class="col-xs-offset-2 col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="<?=base_url();?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
