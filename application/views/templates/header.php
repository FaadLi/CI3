<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Website</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" >

	<link rel="stylesheet"  href="https://code.jquery.com/jquery-3.3.1.js">

	<link rel="stylesheet"  href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


	




<!--  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
 	<a class="navbar-brand" href="<?php echo site_url('welcome')?>">WebSiteKu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>

    <?php if ($this->session->userdata('user/login') != null): ?>

    		<!-- Punya User -->
    	<?php if($this->session->userdata('user/login')['username'] != 'admin'){ ?>
    		<div class="collapse navbar-collapse">
		    	<ul class="navbar-nav mr-auto">
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('home')?>">Home</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('news')?>">News</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('contact')?>">Contact</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('blog')?>">Blog</a>
			      	</li>

			      	<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Tabel</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="<?php echo site_url('Datatables') ?>">Basic</a>
          					<a class="dropdown-item" href="<?php echo site_url('Datatables/json') ?>">JSon</a>
          				<div class="dropdown-divider"></div>
          					<a class="dropdown-item" href="#">Something else here</a>
        				</div>
      				</li>

		    	</ul>


		    <ul class="nav navbar-nav navbar-right">
				<form class="form-inline my-2 my-lg-0">
      				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    			</form>

		    	<ul class="navbar-nav mr-auto">
		    		<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('about')?>">About</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('user/logout')?>">LogOut</a>
			      	</li>
			     </ul>
			</ul>
		</div>


		<!-- Punya Admin -->
    	<?php }else if($this->session->userdata('user/login')['username'] == 'admin'){ ?>
    		<div class="collapse navbar-collapse">
		    	<ul class="navbar-nav mr-auto">
			      	<li class="nav-item ">
			      		<a class="nav-link" href="<?php echo site_url('home')?>">Home</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('news')?>">News</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('contact')?>">Contact</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('blog')?>">Blog</a>
			      	</li>

			      	<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="#">Action</a>
          					<a class="dropdown-item" href="#">Another action</a>
          				<div class="dropdown-divider"></div>
          					<a class="dropdown-item" href="#">Something else here</a>
        				</div>
      				</li>

		    	</ul>


		    <ul class="nav navbar-nav navbar-right">
				<form class="form-inline my-2 my-lg-0">
      				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    			</form>

		    	<ul class="navbar-nav mr-auto">
		    		<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('about')?>">About</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('user/logout')?>">Logout</a>
			      	</li>
			     </ul>
			</ul>
		</div>
		<?php } ?>

    <?php else: ?>

	    <div class="collapse navbar-collapse">
		    	<ul class="navbar-nav mr-auto">
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('home')?>">Home</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('news')?>">News</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('contact')?>">Contact</a>
			      	</li>
			      	
			      	<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="#">Action</a>
          					<a class="dropdown-item" href="#">Another action</a>
          				<div class="dropdown-divider"></div>
          					<a class="dropdown-item" href="#">Something else here</a>
        				</div>
      				</li>

		    	</ul>


		    <ul class="nav navbar-nav navbar-right">

		    	<ul class="navbar-nav mr-auto">
		    		<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('about')?>">About</a>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="<?php echo site_url('user/login')?>">Login</a>
			      	</li>
			     </ul>
			</ul>
		</div>
	<?php endif ?>
  </div>
</nav>

<br><br><br>
<?php if($this->session->flashdata('user_registered')): ?> 
    	<?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>'.'</div>'; ?>
   	<?php endif; ?>

   	<?php if($this->session->flashdata('login_failed')): ?>
     	<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>'.'</p>'; ?>
   	<?php endif; ?>

   	<?php  if ($this->session->flashdata('user_loggedin')): ?>
   		<?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_loggedin').'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>'.
   		'</div>'; ?>
   	<?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
     	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>'.'</p>'; ?>
   <?php endif; ?>

<!-- Atas -->

