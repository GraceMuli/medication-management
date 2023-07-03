
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MediApp - Register</title>
	<?php echo link_tag('assets/css/bootstrap.min.css')?>
	<?php echo link_tag('assets/css/datepicker3.css')?>
	<?php echo link_tag('assets/css/styles.css')?>

<body>
	<div class="row">
			<h2 align="center">MediApp</h2>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Sign Up</div>
				<div class="panel-body">
<!--success message -->
<?php if($this->session->flashdata('success')){?>
<p style="color:red"><?php  echo $this->session->flashdata('success');?></p>	
<?php } ?>

<!--error message -->
<?php if($this->session->flashdata('error')){?>
<p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
<?php } ?>


					<form role="form" action="" method="post" id="" name="signup">
<?php echo form_open('signup',['name'=>'signup']);?>


						<fieldset>
							<div class="form-group">
				
<?php echo form_input(['name'=>'firstname','id'=>'firstname','class'=>'form-control','placeholder'=>'Enter your First Name','value'=>set_value('firstname')]);?>
<?php echo form_error('firstname','<div style="color:red">','<div>')?>

							</div>
							<div class="form-group">
				
<?php echo form_input(['name'=>'lastname','id'=>'lastname','class'=>'form-control','placeholder'=>'Enter your Surname','value'=>set_value('lastname')]);?>
<?php echo form_error('lastname','<div style="color:red">','<div>')?>

							</div>
							<div class="form-group">

<?php echo form_input(['name'=>'email','id'=>'email','class'=>'form-control','placeholder'=>'Enter your Email address','value'=>set_value('email')]);?>
<?php echo form_error('email','<div style="color:red">','<div>')?>								
							</div>
							<div class="form-group">

<?php echo form_input(['name'=>'mobileno','id'=>'mobileno','class'=>'form-control','placeholder'=>'Enter your mobile number','value'=>set_value('mobileno')]);?>
<?php echo form_error('mobileno','<div style="color:red">','<div>')?>		
							</div>
							<div class="form-group">

<?php echo form_password(['name'=>'newpassword','id'=>'newpassword','class'=>'form-control','placeholder'=>'Enter Password','value'=>set_value('newpassword')]);?>	
<?php echo form_error('newpassword','<div style="color:red">','<div>')?>

							</div>
							<div class="form-group">

<?php echo form_password(['name'=>'repeatpassword','id'=>'repeatpassword','class'=>'form-control','placeholder'=>'Confirm Password','value'=>set_value('repeatpassword')]);?>	
<?php echo form_error('repeatpassword','<div style="color:red">','<div>')?>
							</div>
							<div class="checkbox">
					

<?php echo form_submit(['name'=>'submit','id'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);?>
<br>
								<hr>
<p style="color:blue"> Have an account? <a href="<?php echo site_url('Login');?>">Login Here</a></p>
								
							</div>
							 </fieldset>
				<?php echo form_close();?>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>
