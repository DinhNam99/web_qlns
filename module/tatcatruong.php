<?php include '../session.php'; ?>
<?php include '../header.php' ;?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Quản lý Trường
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Trường</li>
				</ol>
			</section>
			<section class="content">
				<?php
			        if(isset($_SESSION['error'])){
			          echo "
			            <div class='alert alert-danger alert-dismissible'>
			              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			              <h4><i class='icon fa fa-warning'></i> Error!</h4>
			              ".$_SESSION['error']."
			            </div>
			          ";
			          unset($_SESSION['error']);
			        }
			        if(isset($_SESSION['success'])){
			          echo "
			            <div class='alert alert-success alert-dismissible'>
			              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			              <h4><i class='icon fa fa-check'></i> Success!</h4>
			              ".$_SESSION['success']."
			            </div>
			          ";
			          unset($_SESSION['success']);
			        }
      			?>
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-body">
								<table id="example2" class="table table-bordered">
									<thead>
										<th>STT</th>
										<th>Tên trường</th>
										<th>Số lượng khoa</th>
										<th>Số lượng cán bộ</th>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT t.matruong, count(k.makhoa) as sl, t.tentruong FROM khoa k, truong t WHERE k.matruong = t.matruong GROUP BY k.matruong";
											$query = $con->query($sql);
											while ($row = $query->fetch_assoc()) {
										?>
										<tr>
											<td><?php echo $row['matruong']; ?></td>
											<td><?php echo $row['tentruong']; ?></td>
											<td><?php echo $row['sl']; ?></td>
											<td>
												<?php
													$sql = "SELECT COUNT(c.macb) as socb FROM canbo c, bomon b, khoa k, truong t WHERE c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong AND t.matruong = '".$row['matruong']."'";
         											$fire = mysqli_query($con,$sql);
         											$result = mysqli_fetch_assoc($fire);
         											echo $result['socb'];
												?>
											</td>
										</tr>
										<?php
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include 'footer.php'?>
	</div>
<?php include '../script.php'; ?>
</body>
</html>