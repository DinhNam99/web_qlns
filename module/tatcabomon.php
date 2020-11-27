<?php include '../session.php'; ?>
<?php include '../header.php' ;?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Quản lý Bộ môn
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Bộ môn</li>
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
							<div class="box-header with-border">
								<a href="#addSj" data-toggle = "modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Thêm Bộ môn</a>
							</div>
							<div class="box-body">
								<table id="example4" class="table table-bordered">
									<thead>
										<th>Mã bộ môn</th>
										<th>Tên bộ môn</th>
										<th>Số lượng cán bộ</th>
										<th></th>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT * FROM bomon b";
											$query = $con->query($sql);
											while ($row = $query->fetch_assoc()) {
										?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['tenbomon']; ?></td>
											<td>
												<?php
													$sql = "SELECT COUNT(c.macb) as socb FROM canbo c, bomon b, khoa k, truong t WHERE c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong AND b.id = '".$row['id']."'";
         											$fire = mysqli_query($con,$sql);
         											$result = mysqli_fetch_assoc($fire);
         											echo $result['socb'];
												?>
											</td>
											<td>
												<a class="btn btn-success btn-sm edit btn-flat" href="#editSj" data-id="<?php echo $row['id']; ?>" data-toggle = "modal"><i class="fa fa-edit"></i> Sửa</a>
												<a class="btn btn-danger btn-sm delete btn-flat" href="#deleteSj" data-id="<?php echo $row['id']; ?>" data-toggle = "modal"><i class="fa fa-trash"></i> Xóa</a>
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
		<?php include 'bomon.php'?>
	</div>
<?php include '../script.php'; ?>
<script>
$(function(){
	$(document).on("click", ".edit", function () {
    	var id = $(this).data('id');
    	getRow(id);
	});
	$(document).on("click", ".delete", function () {
    	var id = $(this).data('id');
    	getRow(id);
	});
  
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'bomon_json.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#sj_id').val(response.id);
      $('#esubject').val(response.tenbomon);
      $('#school_id').val(response.matruong).html(response.tentruong);
      $('#eroom').val(response.tenkhoa);
      $('#del_sj_id').val(response.id);
      $('#del_sj_name').html(response.tenbomon);
    }
  });
}
</script>
</body>
</html>