<?php include '../session.php'; ?>
<?php include '../header.php' ;?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Quản lý hợp đồng
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Hợp đồng</li>
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
								<a href="#addHD" data-toggle = "modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Thêm hợp đồng</a>
							</div>
							<div class="box-body">
								<table id="example1" class="table table-bordered">
									<thead>
										<th>Mã hợp đồng</th>
										<th>Họ tên cán bộ</th>
										<th>Đơn vị</th>
										<th>Tên hợp đồng</th>
										<th>Chức vụ</th>
										<th>Loại hợp đồng</th>
										<th>Ngày ký</th>
										<th>Từ ngày</th>
										<th>Đến ngày</th>
										<th>Trích nội dung</th>
										<th></th>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT hd.mahopdong, hd.macb, cb.hoten, hd.matruong, t.tentruong, hd.tenhopdong, hd.chucvu, hd.loaihopdong, hd.ngayky, hd.tungay, hd.denngay, hd.trichycnoidung  FROM hopdong hd, truong t, canbo cb WHERE hd.matruong = t.matruong AND hd.macb = cb.macb";
											$query = $con->query($sql);
											while ($row = $query->fetch_assoc()) {
										?>
										<tr>
											<td><?php echo $row['mahopdong']; ?></td>
											<td><?php echo $row['hoten'];?></td>
											<td><?php echo $row['tentruong'];?></td>
											<td><?php echo $row['tenhopdong'];?></td>
											<td><?php echo $row['chucvu'];?></td>
											<td><?php echo $row['loaihopdong'];?></td>
											<td><?php echo $row['ngayky'];?></td>
											<td><?php echo $row['tungay'];?></td>
											<td><?php echo $row['denngay'];?></td>
											<td><?php echo $row['trichycnoidung'];?></td>
											<td>
												<a class="btn btn-success btn-sm edit btn-flat" href="#editHD" data-id="<?php echo $row['mahopdong']; ?>" data-toggle="modal"><i class="fa fa-edit"></i> Sửa</a>
												<a class="btn btn-danger btn-sm delete btn-flat" href="#deleteHD" data-id="<?php echo $row['mahopdong']; ?>" data-toggle="modal"><i class="fa fa-trash"></i> Xóa</a>
												<a class="btn btn-primary btn-sm print btn-flat" href="xemhopdong.php?id=<?php echo $row['mahopdong']?>" ><i class="fa fa-eye"></i> Xem</a>
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
		<?php include 'hopdong_model.php'?>
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
    url: 'hopdong_json.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.emahd').val(response.mahopdong);
      $('#del_mahd').val(response.mahopdong);
      $('#del_ten').html(response.hoten);
      $('#school_id').val(response.matruong).html(response.tentruong);
      $('#ma_cb').val(response.macb).html(response.hoten);
      $('#del_macb').val(response.macb);
      $('#etenhd').val(response.tenhopdong);
      $('#echucvu').val(response.chucvu);
      $('#loai_hd').html(response.loaihopdong);
      $('#engayky').val(response.ngayky);
      $('#etungay').val(response.tungay);
      $('#edenngay').val(response.denngay);
      $('#etrichnd').val(response.trichycnoidung);
    }
  });
}
</script>
</body>
</html>