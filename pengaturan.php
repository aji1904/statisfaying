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
				<li class="active">Pengaturan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pengaturan</h1>
			</div>
		</div><!--/.row-->
		
		<!-- Profil -->
		<div class="panel panel-default">
			<div class="panel-heading">Profil</div>
			<div class="panel-body">
				<div class="col-md-6">
                    <div class="form-group">
                        <label>Nama RS</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
                    <div class="form-group">
                        <label>Kelas RS</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
                    <div class="form-group">
                        <label>Alamat RS</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
                    <div>
                        <a href="ubahrs.php"><button type="button" class="btn btn-sm btn-primary">Ubah Profil</button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kota</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
                    <div class="form-group">
                        <label>Kode RS</label>
                        <input class="form-control" rows="3" readonly>
                    </div>
				</div>
			</div>
        </div>
        
        <div class="panel panel-default">
			<div class="panel-heading">Ubah Password</div>
			<div class="panel-body">
				<div class="col-md-12">
                    <div class="form-group">
                        <label>Password Lama</label>
                        <input class="form-control" rows="3" type="password">
                    </div>
                    <div class="form-group">
                        <label>Password baru</label>
                        <input class="form-control" rows="3" type="password">
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi password baru</label>
                        <input class="form-control" rows="3" type="password">
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm btn-primary">Ubah Password</button>
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