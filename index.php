<?php
include "backend/koneksi.php";
include "frontend/head.php";
include "frontend/nav.php";
include "frontend/sidebar.php";
?>


	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<!-- label atas -->
		<!-- <div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">120</div>
							<div class="text-muted">New Orders</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Comments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">Total</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sangat Puas</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="30" ><span class="percent">30%</span></div>
						<div class="center" style="padding-bottom:10px;">
							<a href="#">
								<button type="button" class="btn btn-sm btn-info">Lihat</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Puas</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
						<div class="center" style="padding-bottom:10px;">
							<a href="#">
								<button type="button" class="btn btn-sm bg-teal">Lihat</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Cukup</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
						<div class="center" style="padding-bottom:10px;">
							<a href="#">
								<button type="button" class="btn btn-sm bg-orange">Lihat</button>
							</a>
						</div>					
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Kecewa</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
						<div class="center" style="padding-bottom:10px;">
							<a href="#">
								<button type="button" class="btn btn-sm btn-danger">Lihat</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Kepuasan Pasien
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li>
												<a href="#">
													<em class="fa fa-user" style="color: rgba(48, 164, 255);"></em> Sangat Puas
												</a>
											</li>
											<li>
												<a href="#">
													<em class="fa fa-user" style="color: rgb(127,255, 0);"></em> Puas
												</a>
											</li>
											<li>
												<a href="#">
													<em class="fa fa-user" style="color: rgb(255, 140, 0);"></em> Cukup
												</a>
											</li>
											<li>
												<a href="#">
													<em class="fa fa-user" style="color: rgb(255, 0, 0);"></em> Kecewa
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>	<!--/.main-->
	
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
		var lineChartData = {
		labels : ["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des"],
		datasets : [
			{
				label: "Sangat Puas",
				fillColor : "rgba(48, 164, 255, 0.2)",
				strokeColor : "rgba(48, 164, 255, 1)",
				pointColor : "rgba(48, 164, 255, 1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(48, 164, 255, 1)",
				data : [ 100,50,3,10,20,50,80,0,0,0,0,0]
			},
			{
				label: "Puas",
				fillColor : "rgb(127,255, 0, 0.2)",
				strokeColor : "rgb(127,255, 0, 1)",
				pointColor : "rgb(127,255, 0, 1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgb(127,255, 0, 1)",
				data : [20,30,35,50,50,20,10,0,0,0,0,0]
			},
			{
				label: "Cukup",
				fillColor : "rgb(255, 140, 0, 0.2)",
				strokeColor : "rgb(255, 140, 0, 1)",
				pointColor : "rgb(255, 140, 0, 1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgb(255, 140, 0, 1)",
				data : [10,20,30,40,50,60,0,0,0,0,0,0]
			},
			{
				label: "Kecewa",
				fillColor : "rgb(255, 0, 0, 0.2)",
				strokeColor : "rgb(255, 0, 0, 1)",
				pointColor : "rgb(255, 0, 0, 1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgb(255, 0, 0, 1)",
				data : [20,30,0,0,0,0,0,2,2,0,0,0]
			}
		]

	}
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