<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/bootstrap.min.js"></script>



	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>



</head>
<!-- Atas -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url('welcome')?>">WebSiteKu</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url('home')?>">Home</a></li>
			<li><a href="<?php echo site_url('home/news')?>">News</a></li>
      <li><a href="<?php echo site_url('home/contact')?>">Contact</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
			<form class="navbar-form navbar-left" action="/action_page.php">
      	<div class="form-group">
        	<input type="text" class="form-control" placeholder="Search">
      	</div>
      	<button type="submit" class="btn btn-default">Submit</button>
    	</form>

      <li><a href="<?php echo site_url('home/about')?>"></span> About</a></li>


			<li class="dropdown">
			 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="#">Menu 1</a></li>
				 <li><a href="#">Menu 2</a></li>
				 <li><a href="#">Menu 3</a></li>
				 <li role="separator" class="divider"></li>
				 <li><a href="#">Menu 4</a></li>
			 </ul>
		 </li>



    </ul>
  </div>
</nav>

<!--Isi-->
<body>
<br><br>
<div id="container">
	<h1><b><center>Welcome to my Profil</center></b></h1>

	<div id="body">
		<h4>
		Hi. Hello,, welcome <br>
		 <br>
		 <br>
		 Nama : Mokhammad Zainul Fadli <br>
		 Nim  : 1641720076 <br>
		</h4>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
