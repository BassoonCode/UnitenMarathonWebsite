<!DOCTYPE html>
<?php
include("../config/config.php");
session_start();
error_reporting(0);
if(!isset($_SESSION['name'])){
  header("Location:login.php?err=expired");
}

$username = $_SESSION['name'];

$user = $_SESSION['username'];
$uid = $_SESSION['id'];

$sql = "SELECT * from participants where participantID = '$uid'";
$go = mysqli_query($con,$sql);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Uniten </span>Event Registration</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Howdy , <?php echo $username; ?> !</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Profile</a></li>
			<li><a href="userinfo.php"><em class="fa fa-clone">&nbsp;</em> Update Profile</a></li>
			
				</ul>
			</li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		<br></br>
		<br></br>

		<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Personal Info</div>
					<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
							<th>User ID</th>
							<th>Username</th>
							<th>Student ID</th>
							<th>Time Reregisterd</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php while($data = mysqli_fetch_array($go , MYSQL_BOTH)){ ?>
							<tr>
								<th><?php echo $data['participantID']; ?></th>
								<th><?php echo $data['username']; ?></th>
								<th><?php echo $data['studentID']; ?></th>
								<th><?php echo $data['time_registered']; ?>:01</th>
								<th><a href="userinfo.php"><button class="btn btn-primary">
								Update Profile</button></a></th>
							</tr>
						<?php } ?>
						</tbody>
					</table>
						
					</div>
				</div>
		
			
			
		
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>