<!-- Thêm hợp đồng -->
<div class="modal fade" id="addHD">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><b>Thêm hợp đồng</b></h4>
			</div>
			<div class="modal-body">
			<form class="form-horizontal" method="POST" action="themhopdong.php" enctype="multipart/form-data">
        <div class="form-group">
                    <label for="mahopdong" class="col-sm-3 control-label">Mã hợp đồng</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="mahopdong" name="id" required="">
                    </div>
                </div>
				<div class="form-group">
                    <label for="macb" class="col-sm-3 control-label">Cán bộ</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="macb" id="macb" required>
                        <option value="" selected>- Lựa chọn -</option>
                        <?php
                          $sql = "SELECT cb.macb, cb.hoten FROM canbo cb";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['macb']."'>".$prow['hoten']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tenhd" class="col-sm-3 control-label">Tên hợp đồng</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="tenhd" name="tenhd" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="chucvu" class="col-sm-3 control-label">Chức vụ</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="chucvu" name="chucvu" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="loaihd" class="col-sm-3 control-label">Loại hợp đồng</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="loaihd" id="loaihd" required>
                        <option value="" selected>- Lựa chọn -</option>
                        <?php
                          $sql = "SELECT * FROM loaihopdong";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['tenlhd']."'>".$prow['tenlhd']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ngayky" class="col-sm-3 control-label">Ngày ký</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="ngayky" name="ngayky" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tungay" class="col-sm-3 control-label">Từ ngày</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="tungay" name="tungay" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="denngay" class="col-sm-3 control-label">Đến ngày</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="denngay" name="denngay" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="trichnd" class="col-sm-3 control-label">Trích nội dung</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="trichnd" name="trichnd" required="">
                    </div>
                </div>
              </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-success btn-flat" name="addhd"><i class="fa fa-check-square-o"></i> Lưu</button>
            	</form>
            </div>
		</div>
	</div>
</div>

<!-- Sửa hợp đồng -->
<div class="modal fade" id="editHD">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Cập nhập hợp đồng</b></h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="suahopdong.php" enctype="multipart/form-data">
        <input type="hidden" class="emahd" name="id">
        <div class="form-group">
                    <label for="emacb" class="col-sm-3 control-label">Cán bộ</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="macb" id="emacb" disabled="true">
                        <option selected id="ma_cb"></option>
                        <?php
                          $sql = "SELECT cb.macb, cb.hoten FROM canbo cb";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['macb']."'>".$prow['hoten']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="eschool" class="col-sm-3 control-label">Đơn vị</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="school" id="eschool" disabled="true">
                        <option selected id="school_id"></option>
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
                    <label for="etenhd" class="col-sm-3 control-label">Tên hợp đồng</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="etenhd" name="tenhd" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="echucvu" class="col-sm-3 control-label">Chức vụ</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="echucvu" name="chucvu" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="eloaihd" class="col-sm-3 control-label">Loại hợp đồng</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="loaihd" id="eloaihd" required>
                        <option selected id="loai_hd"></option>
                        <?php
                          $sql = "SELECT * FROM loaihopdong";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['tenlhd']."'>".$prow['tenlhd']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="engayky" class="col-sm-3 control-label">Ngày ký</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="engayky" name="ngayky" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="etungay" class="col-sm-3 control-label">Từ ngày</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="etungay" name="tungay" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edenngay" class="col-sm-3 control-label">Đến ngày</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edenngay" name="denngay" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="etrichnd" class="col-sm-3 control-label">Trích nội dung</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="etrichnd" name="trichnd" required="">
                    </div>
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
              <button type="submit" class="btn btn-success btn-flat" name="edithd"><i class="fa fa-check-square-o"></i> Cập nhập</button>
              </form>
            </div>
    </div>
  </div>
</div>


<!-- Xóa hợp đồng -->
<div class="modal fade" id="deleteHD">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Xóa hợp đồng</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="xoahopdong.php">
            		<input type="hidden" id="del_mahd" name="id">
                <input type="hidden" id="del_macb" name="macb">
            		<div class="text-center">
	                	<p>Xác nhận xóa hợp đồng của cán bộ</p>
	                	<h2 id="del_ten" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="deletehd"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

