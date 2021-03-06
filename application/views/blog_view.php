<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!-- Begin page content -->
	<body>
		<br>
	<main role="main">
		<section class="">
			<div class="container">
				<div class="row">
					<h1 class="jumbotron-heading">Buat Artikel Baru</h1>
					&nbsp; &nbsp;
					<p>
						<a href="<?php echo base_url() ?>index.php/blog/create" class="btn btn-primary my-2">Tulis Artikel</a>
					</p>
			</div>
		</section>

		<?php if( !empty($all_artikel) ) : ?>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">

					<?php
						// Kita looping data dari controller
						foreach ($all_artikel as $key) :
					?>

					<div class="col-md-4">
						<!-- Kita format tampilan blog dalam bentuk card -->
						<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
						<div class="card mb-4 box-shadow border-0">
							
							<!-- Load thumbnail, jika ada -->
							<?php if( $key->post_thumbnail ) : ?>
							<img class="card-img-top" src="<?php echo base_url() .'uploads/'. $key->post_thumbnail ?>" alt="Card image cap" width="300">
							
							<!-- Jika tidak ada thumbnail, gunakan holder.js -->
							<?php ; else : ?>
							<img class="card-img-top" data-src="holder.js/100px190?theme=thumb&bg=eaeaea&fg=aaa&text=Thumbnail" alt="Card image cap" >
							<?php endif; ?>
							
							<div class="card-body">

								<!-- Batasi cuplikan konten dengan substr sederhana -->
								<h5><?php echo substr($key->post_title, 0, 40) ?></h5>
								<p class="card-text"><?php echo substr( $key->post_content , 0, 80)?>...</p>
								
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<!-- Untuk link detail -->
										<a href="<?php echo base_url(). 'index.php/blog/read/' . $key->post_slug ?>" class="btn btn-outline-secondary">Baca</a>
										<a href="<?php echo base_url(). 'index.php/blog/edit/' . $key->id ?>" class="btn btn-outline-secondary">Edit</a>
									</div>
									<small class="text-muted"><?php echo $key->post_date ?></small>
								</div>
							</div>
							
						</div>
					</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
		<?php else : ?>
		<p>Belum ada data.</p>
		<?php endif; ?>
		

		<?php 
		if (isset($links)) {
			echo $links;
		} 
		?> 
	</main>
</body>
	