<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.png">

	<title>CNY</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo URL::to("js/bootstrap/dist/css/bootstrap.css");?>" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo  URL::to("fonts/font-awesome-4/css/font-awesome.min.css");?>">

	<!-- Custom styles for this template -->
	<link href="<?php echo  URL::to("css/style.css");?>" rel="stylesheet" />	

</head>
<body  class="texture">
<div id="head-nav" class="navbar navbar-default ">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-gear"></span>
        </button>
        <a class="navbar-brand" href="#"><span>CNY</span></a>
      </div>
      <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right" >
      <li class="">
        <a href="<?php echo URL::to("auth/register")?>" class="">Register</a>
      </li>
	  <li class="">
        <a href="<?php echo URL::to("auth/login")?>" class="">Login</a>
      </li>
    </ul>

	</div><!--/.nav-collapse animate-collapse -->
    </div>
  </div>

  
@yield('content')
  <script src="<?php echo URL::to("js/jquery.js");?>"></script>
  <script src="<?php echo URL::to("js/jquery.parsley/parsley.js");?>" type="text/javascript"></script>
  <script src="<?php echo URL::to("js/behaviour/general.js");?>" type="text/javascript"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo URL::to("js/behaviour/voice-commands.js");?>"></script>
<script src="<?php echo URL::to("js/bootstrap/dist/js/bootstrap.min.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.flot/jquery.flot.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.flot/jquery.flot.pie.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.flot/jquery.flot.resize.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.flot/jquery.flot.labels.js");?>"></script>
</body>
</html>