<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ryan J.P. Whalen">

    <title>Ryan Whalen</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dist/css/custom.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="../galleria/galleria-1.3.5.min.js"></script>
  </head>

  <body>
  <center><h1 class="nametitle">Ryan J.P. Whalen</h1></center>
   <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="width:60%; margin-left:25%">
			<?php
				$action_list = array(
				"about"      => 'About Me',
				"experience" => 'Experience',
				"projects"   => 'Projects',
				"resume"     => 'Resume',
				"artwork"    => 'Artwork',
				"contact"    => 'Contact Me',
			    );
			    if ( isset($_GET['action'])&& $_GET['action']!=="")
			    {
				    $action=$_GET['action'];
			    }
			    else
			    {
				    $action='about';
			    }
			    foreach($action_list as $action_name=>$action_desc)
			    {
				    if($value == $action_name)
				    {
					    echo "<li class='active'><a href='?action=$action_name'>$action_desc</a></li>";
				    }
				    if($value != $action_name)
				    {
					    echo "<li class='notactive'><a href='?action=$action_name'>$action_desc</a></li>";
				    }
			    }
		     ?>

			  </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
  <div class="content">
