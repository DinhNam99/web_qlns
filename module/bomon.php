<!-- Thêm bộ môn -->
<div class="modal fade" id="addSj">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><b>Thêm Bộ môn</b></h4>
			</div>
			<div class="modal-body">
			<form class="form-horizontal" method="POST" action="thembomon.php" enctype="multipart/form-data">
				<div class="form-group">
                    <label for="school" class="col-sm-3 control-label">Trường</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="school" id="school" required>
                        <option value="" selected>- Lựa chọn -</option>
                        <?php
                          $sql = "SELECT * FROM truong";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['matruong']."'>".$prow['tentruong']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="room" class="col-sm-3 control-label">Khoa</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="room" name="room" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="col-sm-3 control-label">Bộ môn</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="subject" name="subject" required="">
                    </div>
                </div>
              </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-success btn-flat" name="addSj"><i class="fa fa-check-square-o"></i> Lưu</button>
            	</form>
            </div>
		</div>
	</div>
</div>

<!-- Sửa bộ môn -->
<div class="modal fade" id="editSj">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Cập nhập thông tin Bộ môn</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="suabomon.php" enctype="multipart/form-data">
            		<input type="hidden" id="sj_id" name="id">
                <div class="form-group">
                    <label for="eschool" class="col-sm-3 control-label">Trường</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="school" id="eschool" disabled="false">
                        <option selected id="school_id"></option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="eroom" class="col-sm-3 control-label">Khoa</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eroom" name="room" disabled="false">
                    </div>
                </div>
                <div class="form-group">
                    <label for="esubject" class="col-sm-3 control-label">Bộ môn</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="esubject" name="subject">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-success btn-flat" name="uploadSj"><i class="fa fa-check-square-o"></i> Cập nhập</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


<!-- Xóa bộ môn -->
<div class="modal fade" id="deleteSj">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Xóa Bộ môn</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="xoabomon.php">
            		<input type="hidden" id="del_sj_id" name="id">
            		<div class="text-center">
	                	<p>Xác nhận xóa bộ môn</p>
	                	<h2 id="del_sj_name" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="deleteSj"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

