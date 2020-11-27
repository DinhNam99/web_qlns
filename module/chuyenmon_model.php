<!-- Thêm chuyên môn -->
<div class="modal fade" id="addcm">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><b>Thêm chuyên môn </b><b id="tencb"></b></h4>
			</div>
			<div class="modal-body">
			<form class="form-horizontal" method="POST" action="themchuyenmon.php" enctype="multipart/form-data">
        <input type="hidden" id="macb" name="macb">
                <div class="form-group">
                    <label for="room" class="col-sm-3 control-label">Ngành đào tạo</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nganhdt" name="nganhdt" required="">
                    </div>
                </div>
              </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-success btn-flat" name="addcm"><i class="fa fa-check-square-o"></i> Lưu</button>
            	</form>
            </div>
		</div>
	</div>
</div>

<!-- Sửa khoa -->
<div class="modal fade" id="editcm">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Cập nhập thông tin chuyên môn</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="suachuyenmon.php" enctype="multipart/form-data">
            		<input type="hidden" id="id" name="id">
                <input type="hidden" id="malinhvuc" name="linhvuc">
                <input type="hidden" id="emacb" name="macb">
                <div class="form-group">
                    <label for="enganhdt" class="col-sm-3 control-label">Ngành đào tạo</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="enganhdt" name="nganhdt">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-success btn-flat" name="uploadcm"><i class="fa fa-check-square-o"></i> Cập nhập</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


<!-- Xóa khoa -->
<div class="modal fade" id="deletecm">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Xóa chuyên môn</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="xoachuyenmon.php">
            		<input type="hidden" id="del_id" name="id">
                <input type="hidden" id="del_macb" name="macb">
            		<div class="text-center">
	                	<p>Xác nhận xóa chuyên môn</p>
	                	<h2 id="del_nganhdt" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="deletecm"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

