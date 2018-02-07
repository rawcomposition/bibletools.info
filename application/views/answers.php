<!DOCTYPE html>
<html lang="en" manifest="cache.manifest">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="BibleTools.info is a web app designed to enhance your Bible study experience by providing powerful resources for almost every verse.">
	<meta name="author" content="Adam Jackson">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
	<link rel="icon" href="favicon.png"> 
	<link rel="apple-touch-icon" href="/assets/img/icons/Icon-60@2x.png" />
  	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icons/Icon-60@3x.png" />
  	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/icons/Icon-76.png" />
  	<link rel="apple-touch-icon" sizes="152x152" href="/assets/img/icons/Icon-76@2x.png" />
  	<link rel="apple-touch-icon" sizes="58x58" href="/assets/img/icons/Icon-Small@2x.png" />
	
	<title>Answers to Difficult Bible Questions</title>
	
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<?php if( ENVIRONMENT == "production" ) { ?>
		<link href="assets/app.min.css?v=1.6" rel="stylesheet">
		<script type="text/javascript" src="/assets/app.min.js?v=1.5"></script>
	<?php } else { ?>
		<link href="/assets/css/answers.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/lib.js"></script>
	<?php } ?>
</head>
<body data-spy="scroll" data-offset="0" data-target="#navigation">
	<nav class="navbar nav-main navbar-expand-lg navbar-dark">
		<div class="container">
			<div class="collapse navbar-collapse">
				<a class="navbar-brand mr-auto" href="#">BibleTools.info</a>
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Questions</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Verses</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">How it Works</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section id="menu">
		<header><h3><b>BibleTools</b>.info</h3></header>
		<ul class="main">
			<li><i class="fa fa-home"></i><a class="home">Home</a></li>
			<li><i class="fa fa-smile-o"></i><a class="donate" target="_blank" href="http://www.gofundme.com/bibletools">Donate</a></li>
			<li>
				<i class="fa fa-history"></i><a class="history">History</a>
				<ul id="history_list"></ul>
			</li>
			<!--<li><i class="fa fa-heart"></i><a>Favorites</a></li>-->
		</ul>
		<hr/>
		<ul class="sub">
			<li><a class="feedback">Send Feedback</a></li>
		</ul>
	</section>
	<div id="headerwrap">
	    <div class="container">
	    	<div class="row centered">
	    		<div class="col-lg-12">
					<h1><b>BibleTools</b>.info</h1>
					<h3>Bible Verse Explanations and Resources</h3>	
					<form action="." id="search_form">			
						<input id="search" autocomplete="off" placeholder="Search for a verse or question..."/>
						<a class="fa fa-times-circle" id="clear"></a>
					</form>
					<br>
	    		</div>
	    	</div>
	    </div> <!--/ .container -->
	</div><!--/ #headerwrap -->
	<section id="lexicon" class="col-sm-5">
		<div class="content">
			<span class="arrow"></span>
			<span class="close"><i class="fa fa-close"></i></span>
			<div class="definition">Loading...</div>
		</div>
	</div>
	</section>
	<div class="container main">
		<h2><?php echo $title; ?></h2>
		<div class="question-verses">
			<a>Zechariah 5:1</a>
			<a>Zechariah 5:3</a>
			<a>John 4:3</a>
		</div>
		<div id="resource_list" class="row">
			<div class="col-sm-8">
				<?php foreach( $resources as $resource ) { ?>
		    		<div class="panel panel-modern">
						<div class="panel-heading">
							<img src="/assets/img/authors/egw.png"/>
							<div class="resource-info">
								<strong><?php echo $resource["name"]; ?></strong><br/>
								<small>Desire of Ages, p.55</small>
							</div>
						</div>
						<div class="panel-body"><?php echo $resource["content"]; ?></div>
					</div><!--/ .panel -->
				<?php } ?>
	    	</div>
	    	<div class="col-sm-4" id="verse">
	    		<div class="panel panel-modern">
					<div class="panel-heading">
						<h3>Related Questions</h3>
					</div>
					<div class="panel-body">
						<ul>
							<li><a>A related question</a></li>
							<li><a>Question about Matthew 1</a></li>
							<li><a>A related question</a></li>
							<li><a>Question about Matthew 1</a></li>
							<li><a>A related question</a></li>
							<li><a>Question about Matthew 1</a></li>
						</ul>
					</div>
				</div><!--/ .panel -->
	    	</div>
		</div><!--/ .row -->
		<!--<div class="alert alert-warning" role="alert"><strong>Where are the SDA Bible Commentary and EGW comments gone?</strong>  Don't worry, we're working to bring you the best Bible study experience through a new official partnership.  More to come...</div>-->
		<div id="c">
			<div class="container">
				<p>Created by <a href="http://rawcomposition.com">Adam Jackson</a> • <a href="/about" id="feedback">Feedback</a> • <a href="https://www.gofundme.com/bibletools" target="_blank">Donate</a></p>
			</div>
		</div>
	</div>
</body>
</html>
