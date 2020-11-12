<!DOCTYPE html>
<html lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Required meta tags -->

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS reset -->
	<link rel="stylesheet" href="{{ asset('css/ress.css') }}">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('css/trix.css') }}">
	<link rel="stylesheet" href="{{ asset('css/site.css') }}">

	<!-- maxlength -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-maxlength/1.7.0/bootstrap-maxlength.min.js"></script>

	<title>サンプル</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-dark bg-dark">
			<a href="#" class="navbar-brand">Copy_Reddit</a>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
			<div class="dropdown">
				<button type="button" id="dropdown1" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown button
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdown1">
					<a class="dropdown-item" href="#">Menu #1</a>
					<a class="dropdown-item" href="#">Menu #2</a>
					<a class="dropdown-item" href="#">Menu #3</a>
				</div>
			</div>
		</nav>
	</header>

    @yield('content')

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>
