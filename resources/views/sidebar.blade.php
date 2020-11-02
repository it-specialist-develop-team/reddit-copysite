@extends('layouts.base')

@php
  $title="sidebar";
@endphp

@section('content')

	<div class=sub-header>
		<img src="{{ asset('img/sub-header-backimg.jpg') }}" id="sub-header-backimg">
		<div class="container">
			<div class="sub-header">
				<p><img src="{{ asset('img/sub-header-icon.jpg') }}" id="icon"> <a class="subreddit-title">SUBREDDIT</a> <input type="button" value="JOIN" class="btn btn-primary">
				</p>
				<div class="sub-header-menu">
					<ul>
						<li>Posts</li>
						<li>Subreddit</li>
						<li>Rules</li>
						<li>WebsiteOther</li>
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
					</ul>
				</div>
			</div>
		</div>
	</div>

	<br>

	<div class="container">
		<div class="row">
			<main class="col-md-8">
				<div class="block">
					<h2>UPDATES FROM REDDIT</h2>
					<div>
						<h3>Keep yourself safe and informed</h3>
						<p>Visit r/Coronavirus to talk about COVID-19, and visit www.who.int for more information.</p>
					</div>
				</div>



				<div id="newPost" class="block">
					<button type="button" class="btn btn-info" id="newPost-botton">CREATE POST</button>

					<div class="sortmenu">
						<ul>
							<!-- <li>Hot</li>
							<li>New</li>
							<li>Top</li>
							<li>Rising</li>


 -->
							<div class="btn-group" role="group" aria-label="Basic example">
								<button type="button" class="btn btn-outline-secondary">Hot</button>
								<button type="button" class="btn btn-outline-secondary">New</button>
								<button type="button" class="btn btn-outline-secondary">Top</button>
								<button type="button" class="btn btn-outline-secondary">Rising</button>
							</div>

						</ul>
					</div>

					<div id="newPost-dropdown">
						<button type="button" id="dropdown1" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							VIWE STYLE
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdown1">btn-outline-secondary
							<a class="dropdown-item" href="r.page.html">CARD</a>
							<a class="dropdown-item" href="r.page.classic.html">CLASSIC</a>
						</div>
					</div>

				</div>



				<div class="block post">
					<div class="post-rank">
						<p>↑</p>
						<p>000</p>
						<p>↓</p>
					</div>
					<div class="post-content">
						<header>
							<div class="post-header">
								<p class="posted-user">Posted by/</p>
								<p class="user">hogehoge   </p>
								<p class="date"> 100 hours ago</p>
							</div>
							<p class="title">titletitletitletitletitle</p>
						</header>
						<div>
							<p>content content content content content
							 content content content content content
							 content content content content content
							  content content content content content</p>
							<p>content content content content content
							  content content content content content</p>
							<p>content content content content content
							 content content content content content
							  content content content content content</p>
						</div>
					</div>
				</div>
			</main>
			<div id="sidebar" class="col-md-4">
			    @include('components.sidebar_trending')
			</div>
		</div><!-- .row -->
	</div><!-- .wrap -->

	<script type="text/javascript">
		$('textarea').maxlength({
			alwaysShow: true,
			threshold: 10,
			warningClass: "label label-success",
			limitReachedClass: "label label-danger",
			separator: ' out of ',
			preText: 'You write ',
			postText: ' chars.',
			validate: true
		});
	</script>
@endsection
