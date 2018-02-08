<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>Hello, world!</title>

	</head>
	<body>
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scaled=1, shrink-to-fit=no">
			<link rel="stylesheet" type="text/css" href="style/style.css">
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

			<title>Bootstrap Challenge</title>
		</head>
		<!--Navbar-->
		<body>
			<div class="container">
				<nav class="navbar navbar-expand-sm navbar-light bg-light">
					<a class="navbar-brand" href="index.html">Title</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="links">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="#">Link 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link 3</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link 4</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!--Jumbotron-->
			<div class="container">
				<div class="jumbotron py-2 my-5">
					<h1 class="display-3"><strong>Hello, world!</strong></h1>
					<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					<p class="lead">
						<a class="btn btn-primary btn-md" href="#" role="button">Learn more</a>
					</p>
				</div>
				<!--Image with text inline-->
			</div>
			<div class="container-fluid">
				<div class="media d-flex flex-column flex-sm-row">
					<img class="img-fluid align-self-center p-5" src="image/doggie2.jpg" alt="Dog 1">
					<div class="media-body py-5">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.".</p>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					</div>
				</div>
			</div>
			<!--4 images with text boxes underneath each image-->
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<figure class="figure m-4 d-flex-inline">
							<img src="image/dog3.jpg" class="figure-img img-fluid rounded-circle" alt="doggo">

							<figcaption class="figure-caption text-center d-sm-inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim tortor, rhoncus in porta vitae, luctus sit amet nisl.</figcaption>

						</figure>
					</div>
					<div class="col-sm-3">
						<figure class="figure m-4 d-flex-inline">
							<img src="image/dog3.jpg" class="figure-img img-fluid rounded-circle" alt="doggo">
							<figcaption class="figure-caption text-center d-sm-inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim tortor, rhoncus in porta vitae, luctus sit amet nisl.</figcaption>
						</figure>
					</div>
					<div class="col-sm-3">
						<figure class="figure m-4 d-flex-inline">
							<img src="image/dog3.jpg" class="figure-img img-fluid rounded-circle" alt="doggo">
							<figcaption class="figure-caption text-center d-sm-inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim tortor, rhoncus in porta vitae, luctus sit amet nisl. </figcaption>
						</figure>
					</div>
					<div class="col-sm-3">
						<figure class="figure m-4 d-flex-inline">
							<img src="image/dog3.jpg" class="figure-img img-fluid rounded-circle" alt="doggo">
							<figcaption class="figure-caption text-center d-sm-inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim tortor, rhoncus in porta vitae, luctus sit amet nisl. </figcaption>
						</figure>
					</div>
				</div>
			</div>
			<footer>
				<div class="card-footer bg-dark text-muted text-center p-4 mt-4">
					<p>blah blah blah</p>
				</div>
			</footer>

		</body>
</html>