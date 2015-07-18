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
	<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
  

	<!-- Bootstrap core CSS -->
	<link href="<?php echo URL::to("js/bootstrap/dist/css/bootstrap.css");?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo URL::to("fonts/font-awesome-4/css/font-awesome.min.css");?>">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL::to("js/jquery.gritter/css/jquery.gritter.css");?>" />

	<link rel="stylesheet" type="text/css" href="<?php echo URL::to("js/jquery.nanoscroller/nanoscroller.css");?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL::to("js/jquery.easypiechart/jquery.easy-pie-chart.css");?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL::to("js/bootstrap.switch/bootstrap-switch.css");?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL::to("js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css");?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL::to("js/jquery.select2/select2.css");?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL::to("js/bootstrap.slider/css/slider.css");?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL::to("js/intro.js/introjs.css");?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL::to("js/jquery.datatables/bootstrap-adapter/css/datatables.css");?>" />
	<!-- Custom styles for this template -->
	<link href="<?php echo URL::to("css/style.css");?>" rel="stylesheet" />
	@yield('style')

</head>
<body  class="texture">
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-gear"></span>
        </button>
        <a class="navbar-brand" href="<?php echo URL::to("dashboard")?>"><span>CNY</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo URL::to("dashboard")?>">Dashboard</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo URL::to("dashboard/patient");?>">Patient List</a></li>
              <li><a href="<?php echo URL::to("dashboard/patient/add");?>">Add Patient</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clinic <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo URL::to("dashboard/clinic");?>">Clinic List</a></li>
              <li><a href="<?php echo URL::to("dashboard/clinic/add");?>">Add clinic</a></li>
            </ul>
          </li>
        </ul>
    <ul class="nav navbar-nav navbar-right user-nav">
      <li class="dropdown profile_menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="images/avatar2.jpg" /><span>Jeff Hanneman</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo URL::to("dashboard/profile")?>">Profile</a></li>
          <li><a href="<?php echo URL::to("dashboard/profile/preference")?>">Preference</a></li>
          <li><a href="<?php echo URL::to("dashboard/message")?>">Messages</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo URL::to("auth/logout")?>">Sign Out</a></li>
        </ul>
      </li>
    </ul>			
    <ul class="nav navbar-nav navbar-right not-nav" >
      <li class="button dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="bubble">2</span></a>
        <ul class="dropdown-menu">
          <li>
            <div class="nano nscroller">
              <div class="content">
                <ul>
                  <li><a href="#"><i class="fa fa-cloud-upload info"></i><b>Daniel</b> is now following you <span class="date">2 minutes ago.</span></a></li>
                  <li><a href="#"><i class="fa fa-male success"></i> <b>Michael</b> is now following you <span class="date">15 minutes ago.</span></a></li>
                  <li><a href="#"><i class="fa fa-bug warning"></i> <b>Mia</b> commented on post <span class="date">30 minutes ago.</span></a></li>
                  <li><a href="#"><i class="fa fa-credit-card danger"></i> <b>Andrew</b> killed someone <span class="date">1 hour ago.</span></a></li>
                </ul>
              </div>
            </div>
            <ul class="foot"><li><a href="#">View all activity </a></li></ul>           
          </li>
        </ul>
      </li>
      		
    </ul>

      </div><!--/.nav-collapse animate-collapse -->
    </div>
  </div>


<div id="cl-wrapper">
    <div class="cl-mcont">
        @yield('content')
    </div>
</div>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.gritter/js/jquery.gritter.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.nanoscroller/jquery.nanoscroller.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/behaviour/general.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.nestable/jquery.nestable.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.ui/jquery-ui.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/bootstrap.switch/bootstrap-switch.min.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.sparkline/jquery.sparkline.min.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.easypiechart/jquery.easy-pie-chart.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.select2/select2.min.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/skycons/skycons.js");?>" ></script>
<script type="text/javascript" src="<?php echo URL::to("js/bootstrap.slider/js/bootstrap-slider.js");?>" ></script>
<script type="text/javascript" src="<?php echo URL::to("js/intro.js/intro.js");?>" ></script>
<!-- script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
  $(document).ready(function(){
	//initialize the javascript
	App.init();
	App.dashBoard();        
	
	  introJs().setOption('showBullets', false).start();
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
    $('.dataTables_length select').addClass('form-control');

  });
</script>
<script src="<?php echo URL::to("js/bootstrap/dist/js/bootstrap.min.js");?>"></script>
@yield('script')
</body>
</html>