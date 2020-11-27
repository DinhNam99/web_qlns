<!-- Thêm Admin -->
<div class="modal fade" id="addam">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><b>Thêm Admin</b></h4>
			</div>
			<div class="modal-body">
			<form class="form-horizontal" method="POST" action="admin_add.php" enctype="multipart/form-data">
				<div class="form-group">
            <label for="username" class="col-sm-3 control-label">Tên đăng nhập</label>

            <div class="col-sm-9">
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
        </div>
                <div class="form-group">
                  	<label for="password" class="col-sm-3 control-label">Mật khẩu</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="password" name="password" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="name" class="col-sm-3 control-label">Họ Tên</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="name" name="name" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" name="photo" id="photo">
                    </div>
                </div>
              </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-success btn-flat" name="addadmin"><i class="fa fa-check-square-o"></i> Lưu</button>
            	</form>
            </div>
		</div>
	</div>
</div>

<!-- Sửa admin -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Cập nhập thông tin Admin</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="admin_edit.php" enctype="multipart/form-data">
            		<input type="hidden" id="ad_id" name="id">
                <div class="form-group">
                    <label for="edit_un" class="col-sm-3 control-label">Tên đăng nhập</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_un" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_pw" class="col-sm-3 control-label">Mật khẩu</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_pw" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Họ tên</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Cập nhập</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


<!-- Xóa Admin -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Xóa Admin</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="admin_delete.php">
            		<input type="hidden" id="del_ad_id" name="id">
            		<div class="text-center">
	                	<p>Xác nhận xóa Admin</p>
	                	<h2 id="del_admin_name" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

