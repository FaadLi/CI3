<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!-- Begin page content -->
	<body>
		<br>
	<main role="main">		
	</main>

		<h1 align="center">MY PROFIL</h1>
			<!-- <marquee>SMK Negeri 1 Cianjur. Teknik Komputer Jaringan. X-TKJ 2</marquee> -->
		<br>
		<hr align="nilai">
		<br>
		<?php   $a = $this->session->userdata('user/login');?>
		<h1 align="left">BIODATA DIRI</h1>
		<table width="745" border="1" cellspacing="0" cellpadding="5" align="left">
			<tr align="center" bgcolor="yellow">
				<td width="190">DATA DIRI</td>
				<td width="353">KETERANGAN</td>
				
			</tr>
			<tr>
				<!-- <td>Username</td> -->
				<td><label for="nama" class=" col-form-label">Username</label></td>
				<!-- <td> <?php echo $a['username']; ?></td> -->
				<td><input type="text" class="form-control" value="<?php echo $a['username']; ?>" readonly></td>
			</tr>
			<tr>
				<!-- <td>Nama Lengkap</td> -->
				<td><label for="nama" class=" col-form-label">Nama Lengkap</label></td>
				<!-- <td> <?php echo $a['nama']; ?></td> -->
				<td><input type="text" class="form-control" value="<?php echo $a['nama']; ?>" readonly></td>
			</tr>
			<tr>
				<!-- <td>Email</td> -->
				<td><label for="nama" class=" col-form-label">Email</label></td>
				<!-- <td> <?php echo $a['email']; ?></td> -->
				<td><input type="text" class="form-control" value="<?php echo $a['email']; ?>" readonly></td>
			</tr>
			<tr>
				<!-- <td>Kodepos</td> -->
				<td><label for="nama" class=" col-form-label">Kodepos</label></td>
				<!-- <td> <?php echo $a['kodepos']; ?></td> -->
				<td><input type="text" class="form-control" value="<?php echo $a['kodepos']; ?>" readonly></td>
			</tr>
			<tr>
				<!-- <td>Tanggal Registrasi</td> -->
				<td><label for="nama" class=" col-form-label">Tanggal Registrasi</label></td>
				<!-- <td> <?php echo $a['register_date']; ?></td> -->
				<td><input type="text" class="form-control" value="<?php echo $a['register_date']; ?>" readonly></td>
			</tr>
		</table>
		</body>
			