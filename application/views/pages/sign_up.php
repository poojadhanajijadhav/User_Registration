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
   
   <script src="<?=base_url();?>assets/website/js/validation.js"></script>
   
   <style>.error_msg{color:red;}</style>
	
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
    <p class="login-box-msg">Sign Up</p>

    <form action="<?=site_url();?>User/registerUser" method="post" onsubmit="on_form_submit();">
		<div class="form-group has-feedback">
			<?=form_input(array('name'=>'u_name', 'id'=>'u_name', 'value'=>set_value('u_name'), 'class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>'Enter your name', 'required' => 'required'))?>
			<?=form_error('u_name');?>
		</div>
		<div class="form-group has-feedback">
			<?=form_input(array('name'=>'mob_no', 'id'=>'mob_no', 'value'=>set_value('mob_no'), 'class'=>'form-control', 'maxlength'=>'10', 'placeholder'=>'Enter your mobile no', 'required' => 'required'))?>
			<?=form_error('mob_no');?>
		</div>
		<div class="form-group has-feedback">
			<?=form_input(array('name'=>'email_id', 'id'=>'email_id', 'value'=>set_value('email_id'), 'class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>'Enter your email_id', 'required' => 'required'))?>
			<?=form_error('email_id');?>
		</div>
		<div class="form-group has-feedback">
			<?=form_input(array('type'=>'password', 'name'=>'password', 'id'=>'password','maxlength'=>'15', 'minlength'=>'6', 'min'=>'6', 'value'=>set_value('password'), 'class'=>'form-control', 'maxlength'=>'100', 'placeholder'=>'Enter your password', 'required' => 'required', 'onblur'=>'validate_pass();'))?>
			<?=form_error('password');?>
			<p class="error_msg" id="p1"></p>
		</div>
		<div class="form-group has-feedback">
			<?=form_input(array('type'=>'password', 'name'=>'conpass', 'id'=>'conpass', 'maxlength'=>'15', 'minlength'=>'6', 'min'=>'6','value'=>set_value('conpass'), 'class'=>'form-control', 'maxlength'=>'100', 'placeholder'=>'Enter your confim password', 'required' => 'required', 'onblur'=>'validate_conpass();'))?>
			<?=form_error('conpass');?>
			<p class="error_msg" id="p2"></p>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-3">
				<button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
			</div>
			<div class="col-xs-offset-1 col-xs-3">
				<button type="reset" class="btn btn-primary btn-block btn-flat">Reset</button>
			</div>
			<div class="col-xs-offset-1 col-xs-3">
				<a href="<?=site_url();?>Login/" class="btn btn-primary btn-block btn-flat">Sign In</a>
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
</body>
</html>
