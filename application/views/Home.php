
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--Isi-->
<body>
<br><br>
	<div class="col-xs-6 col-sm-6 col-md-6 cil-lg-6">
		<div class="table-responsive">
			<h1>Biodata Saya dari Array</h1>
				<table class="table table-hover">
					<tbody>
						<?php foreach ($biodata_array as $key) {?>
						<tr>
							<td><?php echo $key['nama']?></td>
						</tr>
						<tr>
							<td><?php echo $key['nim']?></td>
						</tr>
						<tr>
							<td><?php echo $key['alamat']?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 cil-lg-6">
		<div class="table-responsive">
			<h1>Biodata Saya dari Object</h1>
				<table class="table table-hover">
					<tbody>
						<?php foreach ($biodata_object as $key) {?>
						<tr>
							<td><?php echo $key->nama?></td>
						</tr>
						<tr>
							<td><?php echo $key->nim?></td>
						</tr>
						<tr>
							<td><?php echo $key->alamat?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
		</div>
	</div>

</body>

