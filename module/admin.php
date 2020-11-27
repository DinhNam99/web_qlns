<?php include '../session.php'; ?>
<?php include '../header.php' ;?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Quản lý tài khoản Admin
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Admin</li>
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
								<a href="#addam" data-toggle = "modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Thêm admin</a>
							</div>
							<div class="box-body">
								<table id="example3" class="table table-bordered">
									<thead>
										<th>ID</th>
										<th>Tên đăng nhập</th>
										<th>Mật khẩu</th>
										<th>Họ Tên</th>
										<th>Photo</th>
										<th></th>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT * FROM admin a WHERE a.role = 0";
											$query = $con->query($sql);
											while ($row = $query->fetch_assoc()) {
										?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['username']; ?></td>
											<td><?php echo $row['password']; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td><img src="<?php echo (!empty($row['photo']))? '../images/'.$row['photo']:'../images/profile.jpg'; ?>" width="30px" height="30px"></td>
											<td>
												<button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> Sửa</button>
												<button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i> Xóa</button>
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
		<?php include 'admin_model.php'?>
	</div>
<?php include '../script.php'; ?>
<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'admin_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#ad_id').val(response.id);
      $('#edit_un').val(response.username);
      $('#edit_pw').val(response.password);
      $('#edit_name').val(response.name);
      $('#del_ad_id').val(response.id);
      $('#del_admin_name').html(response.name);
    }
  });
}
</script>
</body>
</html>