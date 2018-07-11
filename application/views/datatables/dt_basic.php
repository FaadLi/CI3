<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
 

<main role="main" class="container">
  
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Basic DataTables</h1>
			
		</div>
    </section>


                <table class="table table-striped table-bordered" style="width:100%" cellspacing="0" id="data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?php echo $d->id ?></td>
                            <td><?php echo $d->post_date ?></td>
                            <td><?php echo $d->post_title ?></td>
                            <td><?php echo $d->cat_name ?></td>
                            <td><?php echo $d->post_status ?></td>
                            <td>
                                 
                                <a href="<?php echo base_url(). 'index.php/blog/edit/' . $d->id ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="<?php echo base_url(). 'index.php/blog/delete/'. $d->id ?>" class="btn btn-sm btn-outline-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
	
</main>

<script type="text/javascript">
    $(document).ready(function() {
        $('#data').DataTable();
    } );
</script>