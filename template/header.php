<?php include("extension.php");?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- other head content after these -->
	<title><?php echo $title; ?></title>

	<!-- Stylesheets -->
	<link href="css/styles.css" rel="stylesheet">

    <style>
body { padding-top: 70px; }
    </style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
		<!-- Brand and Mobile Toggle -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#web-navbar" aria-expanded="false">
		    <span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.<?php echo $extension;?>">jonprentice</a>
		</div>

        <!-- Nav Links for Toggling -->
		<div class="collapse navbar-collapse" id="web-navbar">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="index.<?php echo $extension;?>">Home</a></li>
			<li><a href="music.<?php echo $extension;?>">Music</a></li>
			<li><a href="programming.<?php echo $extension;?>">Programming</a></li>
			<li><a href="about.<?php echo $extension;?>">About</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
