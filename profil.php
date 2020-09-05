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
				<li class="active">Profil</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Profil User</h1>
			</div>
		</div><!--/.row-->
		
		<!-- Profil -->
        <div style="margin-bottom:20px;">
            <div align="center">
                <img src="http://placehold.it/150/30a5ff/fff" class="img-responsive" alt="" height="150" width="auto">
            </div>
        </div>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-12">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
                    <div>
                        <a href="ubahrs.php"><button type="button" class="btn btn-sm btn-primary">Ubah Profil</button></a>
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