<?php include '../session.php'; ?>
<?php include '../header.php' ;?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Tôn giáo
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Tôn giáo</li>
				</ol>
			</section>
			<section class="content">
				
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-body">
								<table id="example5" class="table table-bordered">
									<thead>
										<th>STT</th>
										<th>Tôn giáo</th>
									</thead>
									<tbody>
										<?php
											$i = 1;
											$sql = "SELECT * FROM tongiao";
											$query = $con->query($sql);
											while ($row = $query->fetch_assoc()) {
										?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $row['tentongiao']; ?></td>
										</tr>
										<?php
										$i = $i+1;
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