
<?
	$macb = "";
	if(isset($_GET['macb'])){
    	$macb = $_GET['macb'];
  	}

?>
<?php include '../session.php'; ?>
<?php include '../header.php' ;?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					<?php 
					$tencb = "SELECT cb.hoten FROM canbo cb WHERE cb.macb = '{$_GET['macb']}'";
					$querytencb = $con->query($tencb);
					$rowtencb = $querytencb->fetch_assoc();
					echo "Danh sách chuyên môn của cán bộ: " .$rowtencb['hoten'];?>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Chuyên môn</li>
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
								<a href="#addcm" data-id="<?php echo $_GET['macb']; ?>" data-toggle = "modal" class="btn btn-primary btn-sm btn-flat add"><i class="fa fa-plus"></i>Thêm chuyên môn</a>
							</div>
							<div class="box-body">
								<table id="example4" class="table table-bordered">
									<thead>
										<th>Mã chuyên môn</th>
										<th>Lĩnh vực</th>
										<th>Ngành đào tạo</th>
										<th></th>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT cm.id, cm.macb, lv.linhvuc, cm.nganhdaotao FROM chuyenmon cm, linhvuc lv WHERE cm.malinhvuc = lv.malinhvuc AND cm.macb = '{$_GET['macb']}'";
											$query = $con->query($sql);
											while ($row = $query->fetch_assoc()) {
										?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['linhvuc']; ?></td>
											<td><?php echo $row['nganhdaotao']?></td>
											<td>
												<a class="btn btn-success btn-sm edit btn-flat" href="#editcm" data-id="<?php echo $row['id']; ?>" data-toggle="modal"><i class="fa fa-edit"></i> Sửa</a>
												<a class="btn btn-danger btn-sm delete btn-flat" href="#deletecm" data-id="<?php echo $row['id']; ?>" data-toggle="modal"><i class="fa fa-trash"></i> Xóa</a>
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
		<?php include 'chuyenmon_model.php'?>
	</div>
<?php include '../script.php'; ?>
<script>
$(function(){
	$(document).on("click", ".add", function () {
    	$('#macb').val('<?php echo $_GET['macb']?>');
	});
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
    url: 'chuyenmon_json.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#id').val(response.id);
      // console.log(response.macb);
      $('#emacb').val(response.macb);
      $('#malinhvuc').val(response.malinhvuc);
      $('#del_macb').val(response.macb);
      $('#enganhdt').val(response.nganhdaotao).html(response.nganhdaotao);
          	console.log(response.id);
      $('#del_id').val(response.id);
      $('#del_nganhdt').html(response.nganhdaotao);
    }
  });
}
</script>
</body>
</html>