<?php include '../session.php'; ?>
<?php include '../header.php' ;?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Danh mục lương
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Lương</li>
				</ol>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<!-- <div class="box-header with-border">
								<a href="#addR" data-toggle = "modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Thêm dân tộc</a>
							</div> -->
							<div class="box-body">
								<table id="example4" class="table table-bordered">
									<thead>
										<th>STT</th>
										<th>Hệ số lương</th>
										<th>Phụ cấp</th>
										<!-- <th></th> -->
									</thead>
									<tbody>
										<?php
											$sql = "SELECT * FROM bacluong";
											$query = $con->query($sql);
											$i = 1;
											while ($row = $query->fetch_assoc()) {
										?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $row['hesoluong']; ?></td>
											<td><?php echo $row['phucap']; ?></td>
										<!-- 	<td>
												<a class="btn btn-success btn-sm edit btn-flat" href="#editDt" data-id="<?php echo $row['id']; ?>" data-toggle="modal"><i class="fa fa-edit"></i> Sửa</a>
												<a class="btn btn-danger btn-sm delete btn-flat" href="#deleteDt" data-id="<?php echo $row['id']; ?>" data-toggle="modal"><i class="fa fa-trash"></i> Xóa</a>
											</td> -->
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