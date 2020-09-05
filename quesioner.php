<?php
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
				<li class="active">Quesioner</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quesioner</h1>
			</div>
		</div><!--/.row-->
		
    <!-- Indikator -->
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

		<!-- Input Pertanyaan -->
		<div class="panel panel-default">
			<div class="panel-heading">Input Pertanyaan</div>
			<div class="panel-body">
				<div class="col-md-12">
					<form role="form" action="#">
						<div class="form-group">
							<textarea class="form-control" rows="3"></textarea>
						</div>
						<div>
							<button type="button" class="btn btn-sm btn-primary">Simpan Pertanyaan</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- List Pertanyaan -->
		<div class="panel panel-default">
			<div class="panel-heading">Data Pertanyaan</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div style="font-size: 20px;"><label>Pertanyaan ke 1<label></div>
					<div style="padding-bottom: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam voluptatem qui autem tempore voluptate, sed eius officiis saepe ipsum quibusdam ducimus excepturi minus, enim odit asperiores quo cum facilis impedit?
						<div style="padding-top: 5px;">
							<a href="#" class="btn btn-sm btn-info">Edit</a>
							<a href="#" class="btn btn-sm btn-danger">Hapus</a>
						</div>
					</div>
					<div style="font-size: 20px;"><label>Pertanyaan ke 1<label></div>
					<div style="padding-bottom: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam voluptatem qui autem tempore voluptate, sed eius officiis saepe ipsum quibusdam ducimus excepturi minus, enim odit asperiores quo cum facilis impedit?
						<div style="padding-top: 5px;">
							<a href="#" class="btn btn-sm btn-info">Edit</a>
							<a href="#" class="btn btn-sm btn-danger">Hapus</a>
						</div>
					</div>
					<div style="font-size: 20px;"><label>Pertanyaan ke 2<label></div>
					<div style="padding-bottom: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam voluptatem qui autem tempore voluptate, sed eius officiis saepe ipsum quibusdam ducimus excepturi minus, enim odit asperiores quo cum facilis impedit?
						<div style="padding-top: 5px;">
							<a href="#" class="btn btn-sm btn-info">Edit</a>
							<a href="#" class="btn btn-sm btn-danger">Hapus</a>
						</div>
					</div>
					<div style="font-size: 20px;"><label>Pertanyaan ke 3<label></div>
					<div style="padding-bottom: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam voluptatem qui autem tempore voluptate, sed eius officiis saepe ipsum quibusdam ducimus excepturi minus, enim odit asperiores quo cum facilis impedit?
						<div style="padding-top: 5px;">
							<a href="#" class="btn btn-sm btn-info">Edit</a>
							<a href="#" class="btn btn-sm btn-danger">Hapus</a>
						</div>
					</div>
					<div style="font-size: 20px;"><label>Pertanyaan ke 4<label></div>
					<div style="padding-bottom: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam voluptatem qui autem tempore voluptate, sed eius officiis saepe ipsum quibusdam ducimus excepturi minus, enim odit asperiores quo cum facilis impedit?
						<div style="padding-top: 5px;">
							<a href="#" class="btn btn-sm btn-info">Edit</a>
							<a href="#" class="btn btn-sm btn-danger">Hapus</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
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

	</script>
		
</body>
</html>