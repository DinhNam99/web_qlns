<?php include '../session.php'; ?>
<?php include '../header.php' ;?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Danh sách cán bộ
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Cán bộ, giảng viên</li>
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
								<a href="#addCB" data-toggle = "modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Thêm cán bộ</a>
							</div>
							<div class="box-body">
								<table id="example1" class="table table-borderd">
									<thead>
										<th>Mã CB</th>
										<th>Họ tên</th>
										<th>Ngày sinh</th>
										<th>Giới tính</th>
										<th>Email</th>
										<th>Email khác</th>
										<th>Di động</th>
										<th>Dân tộc</th>
										<th>Tôn giáo</th>
										<th>Quê quán</th>
										<th>Nơi ở hiện tại</th>
										<th>Số CMND</th>
										<th>Ngoại ngữ</th>
										<th>Số bảo hiểm</th>
										<th>Ngày tuyển dụng</th>
										<th>Bộ môn</th>
										<th>Chuyên môn</th>
										<th>Lĩnh vực</th>
										<th>Học hàm</th>
										<th>Học vị</th>
										<th>Khen thưởng</th>
										<th>Kỉ luật</th>
										<th>Hệ số lương</th>
										<th></th>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT c.macb, c.hoten, c.ngaysinh, c.gioiTinh, c.email, c.emailkhac, c.didong, c.quequan, c.noiohientai, c.dantoc, c.tongiao, c.socmnd, c.ngaycapcmnd, c.noicapcmnd, c.ngoaingu, c.khenthuong, c.kiluat, c.sobhxh, c.ngaytuyendung, b.tenbomon, l.linhvuc, c.hocham, c.hocvi, bl.hesoluong FROM canbo c, bomon b, linhvuc l, bacluong bl WHERE c.mabomon = b.id AND c.malinhvuc = l.malinhvuc AND bl.mabacluong = c.mabacLuong ";
											$query = $con->query($sql);
											while ($row = $query->fetch_assoc()) {
										?>
										<tr>
											<td><?php echo $row['macb']; ?></td>
											<td><?php echo $row['hoten']; ?></td>
											<td><?php echo date('M d, Y', strtotime($row['ngaysinh'])); ?></td>
											<td><?php echo $row['gioiTinh']; ?></td>
											<td><?php if(!empty ($row['email'])) echo $row['email']; else echo 'Không'; ?></td>
											<td><?php if(!empty ($row['emailkhac'])) echo $row['emailkhac']; else echo 'Không'; ?></td>
											<td><?php echo $row['didong']; ?></td>
											<td><?php echo $row['dantoc']; ?></td>
											<td><?php echo $row['tongiao']; ?></td>
											<td><?php echo $row['quequan']; ?></td>
											<td><?php echo $row['noiohientai']; ?></td>
											<td><?php echo $row['socmnd']; ?></td>
											<td><?php if(!empty ($row['ngoaingu'])) echo $row['ngoaingu']; else echo 'Không'; ?></td>
											<td><?php if(!empty ($row['sobhxh'])) echo $row['sobhxh']; else echo 'Không'; ?></td>
											<td><?php echo date('M d, Y', strtotime($row['ngaytuyendung'])); ?></td>
											<td><?php echo $row['tenbomon']; ?></td>
											<td><?php
												$sqlcm = "SELECT cm.nganhdaotao FROM chuyenmon cm, canbo c WHERE cm.macb = c.macb AND cm.macb = '".$row['macb']."'";
												$querycm = $con->query($sqlcm);
												if($querycm->num_rows > 0){
													while ($rowcm=$querycm->fetch_assoc()) {
														echo $rowcm['nganhdaotao'] .", ";
													}
												}else{
													echo "Không";
												}
											?> <a href="chuyenmon.php?macb=<?php echo $row['macb']?>" class="pull-right"><span class="fa fa-eye"></span></a></td>
											<td><?php echo $row['linhvuc']; ?></td>
											<td><?php if(!empty ($row['hocham'])) echo $row['hocham']; else echo 'Không'; ?></td>
											<td><?php if(!empty ($row['hocvi'])) echo $row['hocvi']; else echo 'Không'; ?></td>
											<td><?php if(!empty ($row['khenthuong'])) echo $row['khenthuong']; else echo 'Không'; ?></td>
											<td><?php if(!empty ($row['kiluat'])) echo $row['kiluat']; else echo 'Không'; ?></td>
											<td><?php echo $row['hesoluong']; ?></td>
											<td>
												<a class="btn btn-success btn-sm edit btn-flat" href="#editCB" data-id="<?php echo $row['macb']; ?>" data-toggle="modal"><i class="fa fa-edit"></i> Sửa</a>
												<a class="btn btn-danger btn-sm delete btn-flat" href="#delete" data-id="<?php echo $row['macb']; ?>" data-toggle="modal"><i class="fa fa-trash"></i> Xóa</a>
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
		<?php include 'canbo.php'?>
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
    url: 'canbo_json.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.macb').val(response.macb);
      $('.cb_id').html(response.macb);
      $('.de_name').html(response.hoten);
      $('#datepicker_edit').val(response.ngaysinh);
      $('#ename').val(response.hoten);
      $('#gender_id').val(response.gioiTinh).html(response.gioiTinh);
      response.email != null ? $('#eemail').val(response.email) : $('#eemail').val('Không');
      // $('#eemail').val(response.email);
      // $('#eemailother').val(response.emailkhac);
      response.emailkhac != null ? $('#eemailother').val(response.emailkhac) : $('#eemailother').val('Không');
      $('#ephone').val(response.didong);
      $('#home_id').html(response.quequan);
      $('#eaddress').val(response.noiohientai);
      $('#religion_id').html(response.tongiao);
      // $('#enation').val(response.dantoc);
      response.dantoc != null ? $('#enation').val(response.dantoc) : $('#enation').val('Không');
      $('#epersonId').val(response.socmnd);
      $('#edatePId').val(response.ngaycapcmnd);
      $('#issueBy_id').html(response.noicapcmnd);
      // $('#elanguage').val(response.ngoaingu);
      response.ngoaingu != null ? $('#elanguage').val(response.ngoaingu) : $('#elanguage').val('Không');
      // $('#ebonus').val(response.khenthuong);
      response.khenthuong != null ? $('#ebonus').val(response.khenthuong) : $('#ebonus').val('Không');
      // $('#ediscipline').val(response.kiluat);
      response.kiluat != null ? $('#ediscipline').val(response.kiluat) : $('#ediscipline').val('Không');
      // $('#einsurance').val(response.sobhxh);
      response.sobhxh != null ? $('#einsurance').val(response.sobhxh) : $('#einsurance').val('Không');
      $('#edateR').val(response.ngaytuyendung);
      // $('#erank').val(response.hocham);
      response.hocham != null ? $('#erank').val(response.hocham) : $('#erank').html('Không');
      // $('#edegree').val(response.hocvi);
      response.hocvi != null ? $('#edegree').val(response.hocvi) : $('#edegree').html('Không');
      $('#salary_id').html(response.hesoluong);
      $('#school_id').val(response.matruong).html(response.tentruong);
      $('#eroom').val(response.tenkhoa);
      $('#esubject').val(response.tenbomon);
      $('#efield').val(response.linhvuc);
    }
  });
}
</script>
</body>
</html>