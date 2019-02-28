<?php require_once( 'couch/cms.php' ); ?>
<!doctype html>
<html lang="en">
<head>
	<!-- 

	Website Author: Ryan J. Gordon
	Contact:		ryan@rjgordon.net
	Site:			www.rjgordon.net
	
	-->


	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="./css/main.css" type="text/css" >

	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="./js/animations.js"></script>

</head>

<body>

	<!-- Begin Navigation -->
	<nav class="navbar navbar-expand-md navbar-light">

		<!-- Mobile Logo -->
	    <a class="navbar-brand d-md-none" href="#">ARIZONA REFINING COMPANY</a>

	    <!-- Mobile Navigation Toggler / Hamburger -->
	    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	    </button>

	    <!-- nav-item links apply to both desktop & mobile -->
	    <div class="d-md-flex d-block w-100">
	        <div class="collapse navbar-collapse mx-auto w-auto justify-content-center" id="navbarNavAltMarkup">
	            <div class="navbar-nav">
	                <a class="nav-item nav-link" href="#">About Us</a>
	                <!-- Desktop Logo -->
	                <a class="navbar-brand mx-2 d-none d-md-inline" href="#">ARIZONA REFINING COMPANY</a>
	                <a class="nav-item nav-link" href="https://www.rjgordon.net/refinery/contact">Contact</a>
	            </div>
	        </div>
	    </div>
	</nav>
	<!-- End Navigation -->


	<!-- Page Image / Banner -->
	<div class="container-fluid" id="banner">

		<!-- Center Panel -->
		<div class="jumbotron text-panel">
			<h2 class="display-6"><cms:editable name='banner_description'>We process all forms of precious metals and materials</cms:editable></h2>
		</div>
		
	</div>
<body>
</html>
<?php COUCH::invoke(); ?>