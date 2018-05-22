<?php $this->load->view("templates/header"); ?>

<div class="row">
<div class="col-lg-12 ">
	<div class="card">
	<div style="width: 50%; margin-left: auto; margin-right: auto;">
		<div class="card-header">
			<strong><h1><center>Form Daftar</center></h1></strong>
		</div>
		<br><br>
		<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => ''));?>
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
		</div>
		<div class="form-group">
			<label>Kodepos</label>
			<input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<label>Konfirmasi Password</label>
			<input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password">
		</div>

	</div>
		<div class="row">
			<div style="margin-left: auto;margin-right: auto; width: 40%;">
			<div class="col-lg-3" ">
				<button type="submit" class="btn btn-primary btn-block">Daftar</button>
				<?php echo form_close(); ?>
			</div>
			<!-- <div class="col-lg-3">
				<button class="btn btn-block " style="background-color: red">Login</button>
			</div> -->
		</div>
		
			</div>
		</div>
	</div>
	</div>




<?php $this->load->view("templates/footer"); ?>
