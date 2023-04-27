<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Admin Panel</title>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
    <style>
    
    .last{
          background-color: black;
          width: 100%;
          height: 200px;
          margin-top: 100px;
          color: white;
          padding-top: 30px;
         
      }
      .last i{
          margin-left: 1100px;
          animation-name: icons;
          animation-duration: 3s;
          animation-delay: 3s;
          animation-iteration-count: infinite;
          
      
      }
/*
      @keyframes icons{
          0%{
              color: gold;
          }
          25%{
              color: wheat;
          }
          75%{
              color: gold;
          }
          100%{
              color: white;
          }
      }
*/
      .fa-facebook{
          
          transform:translate(15px,-30px);
          color: skyblue;
      }
      .fa-whatsapp{
          color: green;
          transform:translate(-20px,-0px);
      }
     .fa-instagram{
      
          transform:translate(40px,-60px);
         color: orange;
      }
      .fa-youtube-play{
          
          transform:translate(75px,-90px);
          color: red;
      }
      .fa-linkedin{
       
          transform:translate(115px,-120px);
          color: blue;
      }
    </style>
</head>

<body>
<?php include('includes/header.php');?>

	<div class="ts-main-content">
<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Admin Control Panel Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
<?php 
$sql ="SELECT id from tblusers ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$regusers=$query->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($regusers);?></div>
								<div class="stat-panel-title text-uppercase"> Registered Users  <i class="fa fa-user"></i></div>
												</div>
											</div>
											<a href="reg-users.php" class="block-anchor panel-footer">More Details <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
$sql1 ="SELECT id from tblvehicles ";
$query1 = $dbh -> prepare($sql1);;
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalvehicle=$query1->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($totalvehicle);?></div>
													<div class="stat-panel-title text-uppercase">Listed Vehicles  <i class="fa fa-car"></i></div>
												</div>
											</div>
											<a href="manage-vehicles.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php 
$sql2 ="SELECT id from tblbooking ";
$query2= $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$bookings=$query2->rowCount();
?>

													<div class="stat-panel-number h1 "><?php echo htmlentities($bookings);?></div>
													<div class="stat-panel-title text-uppercase">Total Bookings  <i class="fa fa-book"></i></div>
												</div>
											</div>
											<a href="manage-bookings.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
<?php 
$sql3 ="SELECT id from tblbrands ";
$query3= $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$brands=$query3->rowCount();
?>												
													<div class="stat-panel-number h1 "><?php echo htmlentities($brands);?></div>
													<div class="stat-panel-title text-uppercase">Listed Brands  <i class="fa fa-bank"></i></div>
												</div>
											</div>
											<a href="manage-brands.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



<div class="row">
					<div class="col-md-12">

						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
						<div class="col-md-3">
		<div class="panel panel-default">
		<div class="panel-body bk-primary text-light">
			<div class="stat-panel text-center">
<?php 
$sql4 ="SELECT id from tblsubscribers ";
$query4 = $dbh -> prepare($sql4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$subscribers=$query4->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($subscribers);?></div>
													<div class="stat-panel-title text-uppercase">Subscibers  <i class="fa fa-users"></i></div>
												</div>
											</div>
											<a href="manage-subscribers.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
$sql6 ="SELECT id from tblcontactusquery ";
$query6 = $dbh -> prepare($sql6);;
$query6->execute();
$results6=$query6->fetchAll(PDO::FETCH_OBJ);
$query=$query6->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($query);?></div>
													<div class="stat-panel-title text-uppercase">Queries  <i class="fa fa-question-circle"></i></div>
												</div>
											</div>
											<a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php 
$sql5 ="SELECT id from tbltestimonial ";
$query5= $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$testimonials=$query5->rowCount();
?>

													<div class="stat-panel-number h1 "><?php echo htmlentities($testimonials);?></div>
													<div class="stat-panel-title text-uppercase">Testimonials  <i class="fa fa-feed"></i></div>
												</div>
											</div>
											<a href="testimonials.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>









			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
     <div class="last">
    <h5 style="color: white; margin-left: 1080px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', 'monospace'; font-size: 20px;">Connect with Us </h5>    
        <a href="#"> <i class="fa fa-whatsapp fa-2x"></i></a>
    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
        <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
        <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
        
    </div>
</body>
</html>
<?php } ?>