<section class="content-header">
	<ol class="breadcrumb">
		<li><a href="<?=site_url();?>Home"><i class="fa fa-dashboard"></i> Home</a></li>
	</ol>
</section>
<hr />
<section class="content">
	<div class="col-xs-12 col-sm-12 col-md-12">                
		<div class="panel panel-primary">
			<div class="panel-heading uppercase"><strong>Welcome, </strong></div>
			<div class="panel-body">
			<div class="box-body table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td><b>User Name: </b></td>
							<td><?=$this->session->userdata('user_name');?></td>
						</tr>   
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
