@extends('layouts.master')

@section('title')
Lori Contreras Marshall's Portfolio
@stop

@section('topscript')
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/ico/favicon.png">

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>   
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<script src="/js/Chart.js"></script>
	<script src="/js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

@stop



@section('content')
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">Onassis</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#home" class="smoothScroll">Home</a>
			<a href="#services" class="smoothScroll">Services</a>
			<a href="#portfolio" class="smoothScroll">Portfolio</a>
			<a href="#about" class="smoothScroll">About</a>
			<a href="#contact" class="smoothScroll">Contact</a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>	
	<!-- ========== HEADER SECTION ========== -->
	<div id="itemwrap">
		<div class="container">
			<br>
			<h1>Lori Contreras Marshall</h1>
			<h2>Web Developer</h2>
			<div class="row">
				<br>
				<br>
				<br>
				<div class="col-md-6 col-md-offset-3">
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<h3><bold>Welcome to  my portfolio</bold>! <br><bold>A place where you can learn a little more about me, and find links to the items that matter most to you as an employer.</bold><br/>
					<bold>Please feel free to look around my portfolio.</bold> 
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->
	
	<!-- ========== SERVICES - GREY SECTION ========== -->
	<div id="g">
		<div class="container">
			<div class="row">
				<h3>ABOUT ME</h3>
				<br>
				<br>
				<div class="col-md-8 desc">
					<h4>About Lori...</h4>
					<p>Various versions have evolved over the years. Many desktop publishing packages and web page editors now use Lorem Ipsum. A search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
				</div>
				
			</div>
		</div><!-- /container -->
	</div><!-- /g -->
	
	<!-- ========== CAROUSEL / DESCRIPTION - DARK GREY SECTION ========== -->
	<div id="dg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div id="carousel-example-generic" class="carousel slide">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					  </ol>
					
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="img/item-01.png" alt="">
					    </div>
					    <div class="item">
					      <img src="img/item-02.png" alt="">
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>	
		</div><!-- /container -->
		
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-4 desc desc-a">
					<h4><i class="icon-bullseye"></i> THE GOAL</h4>
					<p>Etiam dictum gravida nibh at accum san. Quisque aliquam risus bibendum diam elementum, et tempus enim suscipit. Duis sit amet euismod.</p>
					<br>
					<br>
					<h4><i class="icon-desktop"></i> THE RESULT</h4>
					<p>Etiam dictum gravida nibh at accum san. Quisque aliquam risus bibendum diam elementum, et tempus enim suscipit. Duis sit amet euismod.</p>
				</div>
				
				<div class="col-md-4 desc">
					<h4><i class="icon-bolt"></i> THE IDEA</h4>
					<p>Etiam dictum gravida nibh at accum san. Quisque aliquam risus bibendum diam elementum, et tempus enim suscipit. Duis sit amet euismod.</p>
					<br>
					<br>
					<h4><i class="icon-bar-chart"></i> THE STATICS</h4>
					<p>Etiam dictum gravida nibh at accum san. Quisque aliquam risus bibendum diam elementum, et tempus enim suscipit. Duis sit amet euismod.</p>
				</div>
				<div class="col-md-2"></div>
				
			</div>
			<div class="row">
			<br>
			<br>
				<div class="col-md-4 col-md-offset-4">
					<a href="resume" style="font-size:20px;">< <i class="icon-th-large"></i> > </a>
				</div>
			</div>
		</div>
	</div><!-- /dg -->
	
	
	
	
	<!-- ========== FOOTER SECTION ========== -->
	<div id="f">
		<div class="container">
			<div class="row">
					<h3><b>Hire ME!</b></h3>
					<br>
					<div class="col-md-4">
						<h3><a href="mailto:lorettamarshall123@yahoo.com?subject=Job Opportunity!">Click here to send an email to <br>Lori Contreras Marshall</a></h3>
      </div>
						<h3>mywebsitehere.com</h3>
						<br>
					</div>
					
					<div class="col-md-4">	
						<h3><b>Call Me:</b></h3>
						<h3>210-748-1095</h3>
						<br>
					</div>
					
					<div class="col-md-8">
						<h3><b>I Am Social</b></h3>
						<p>
							<a href="https://twitter.com/LCMarshall123"><i class="icon-twitter"></i></a>
							<a href="http://github.com/LCMarshall"><i class="icon-github"></i></a>
							<a href="http://www.linkedin.com/in/lorettamarshall123/"><i class="icon-linkedin"></i></a>
						</p>
						<br>
					</div>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /f -->
@stop

@section('bottomscript')
 <!-- Placed at the end of the document so the pages load faster -->

	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	
@stop