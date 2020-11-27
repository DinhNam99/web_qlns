<!-- Thêm cán bộ -->
<div class="modal fade" id="addCB">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><b>Thêm Cán bộ</b></h4>
			</div>
			<div class="modal-body">
			<form class="form-horizontal" method="POST" action="themcanbo.php" enctype="multipart/form-data">
				<div class="form-group">
            <label for="macb" class="col-sm-3 control-label">Mã Cán bộ</label>

            <div class="col-sm-9">
                <input type="text" class="form-control" id="macb" name="macb" required>
            </div>
        </div>
                <div class="form-group">
                  	<label for="name" class="col-sm-3 control-label">Họ tên</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="name" name="name" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Ngày sinh</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="birthdate" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Giới tính</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="gender" id="gender" required>
                        <option value="" selected>- Lựa chọn -</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailother" class="col-sm-3 control-label">Email khác</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="emailother" name="emailother">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Di động</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="home" class="col-sm-3 control-label">Quê quán</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="home" id="home" required>
                        <option value="" selected>- Lựa chọn -</option>
                        <?php
                          $sql = "SELECT * FROM quequan";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['tinh']."'>".$prow['tinh']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Nơi ở hiện tại</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="address" id="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="religion" class="col-sm-3 control-label">Tôn giáo</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="religion" id="religion">
                        <option value="" selected>- Lựa chọn -</option>
                        <?php
                          $sql = "SELECT * FROM tongiao";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['tentongiao']."'>".$prow['tentongiao']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nation" class="col-sm-3 control-label">Dân tộc</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nation" name="nation" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="personId" class="col-sm-3 control-label">Chứng minh ND</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="personId" name="personId" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datePId" class="col-sm-3 control-label">Ngày cấp</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datePId" name="datePId" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="issuedBy" class="col-sm-3 control-label">Nơi cấp</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="issuedBy" id="issuedBy" required>
                        <option value="" selected>- Lựa chọn -</option>
                        <?php
                          $sql = "SELECT * FROM quequan";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['tinh']."'>".$prow['tinh']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="language" class="col-sm-3 control-label">Ngoại ngữ</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="language" name="language">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bonus" class="col-sm-3 control-label">Khen thưởng</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="bonus" name="bonus">
                    </div>
                </div>
                <div class="form-group">
                    <label for="discipline" class="col-sm-3 control-label">Kỉ luật</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="discipline" name="discipline">
                    </div>
                </div>
                <div class="form-group">
                    <label for="insurance" class="col-sm-3 control-label">Số bảo hiểm</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="insurance" name="insurance">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dateR" class="col-sm-3 control-label">Ngày tuyển dụng</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="dateR" name="dateR" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rank" class="col-sm-3 control-label">Học hàm</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="rank" id="rank">
                        <option value="" selected>- Lựa chọn -</option>
                        <option value="Không">Không</option>
                        <option value="Phó Giáo sư">Phó Giáo sư</option>
                        <option value="Giáo sư">Giáo sư</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="degree" class="col-sm-3 control-label">Học vị</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="degree" id="degree">
                        <option value="" selected>- Lựa chọn -</option>
                        <option value="Không">Không</option>
                        <option value="Tiến sĩ">Tiến sĩ</option>
                        <option value="Thạc sĩ">Thạc sĩ</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="salary" class="col-sm-3 control-label">Bậc lương</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="salary" id="salary" required>
                        <option value="" selected>- Lựa chọn -</option>
                        <?php
                          $sql = "SELECT * FROM bacluong";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['mabacluong']."'>".$prow['hesoluong']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
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
                <div class="form-group">
                    <label for="subject" class="col-sm-3 control-label">Lĩnh vực</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="field" name="field" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="techn" class="col-sm-3 control-label">Chuyên môn</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="techn" name="techn" required="">
                    </div>
                </div>
              </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i> Lưu</button>
            	</form>
            </div>
		</div>
	</div>
</div>

<!-- Sửa thông tin cán bộ -->
<div class="modal fade" id="editCB">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Cập nhập Cán bộ</b></h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="suacanbo.php">
        <input type="hidden" class="macb" name="id">
                <div class="form-group">
                    <label for="ename" class="col-sm-3 control-label">Họ tên</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ename" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Ngày sinh</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_edit" name="birthdate" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="egender" class="col-sm-3 control-label">Giới tính</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="gender" id="egender" required>
                        <option selected id="gender_id"></option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="eemail" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eemail" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="eemailother" class="col-sm-3 control-label">Email khác</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eemailother" name="emailother">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ephone" class="col-sm-3 control-label">Di động</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ephone" name="phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ehome" class="col-sm-3 control-label">Quê quán</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="home" id="ehome" required>
                        <option selected id="home_id"></option>
                        <?php
                          $sql = "SELECT * FROM quequan";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['tinh']."'>".$prow['tinh']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="eaddress" class="col-sm-3 control-label">Nơi ở hiện tại</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="address" id="eaddress"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ereligion" class="col-sm-3 control-label">Tôn giáo</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="religion" id="ereligion">
                        <option selected id="religion_id"></option>
                        <?php
                          $sql = "SELECT * FROM tongiao";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['tentongiao']."'>".$prow['tentongiao']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="enation" class="col-sm-3 control-label">Dân tộc</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="enation" name="nation" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="epersonId" class="col-sm-3 control-label">Chứng minh ND</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="epersonId" name="personId" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edatePId" class="col-sm-3 control-label">Ngày cấp</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edatePId" name="datePId" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="eissuedBy" class="col-sm-3 control-label">Nơi cấp</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="issuedBy" id="eissuedBy" required>
                        <option selected id="issueBy_id"></option>
                        <?php
                          $sql = "SELECT * FROM quequan";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['tinh']."'>".$prow['tinh']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="elanguage" class="col-sm-3 control-label">Ngoại ngữ</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="elanguage" name="language">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ebonus" class="col-sm-3 control-label">Khen thưởng</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ebonus" name="bonus">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ediscipline" class="col-sm-3 control-label">Kỉ luật</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ediscipline" name="discipline">
                    </div>
                </div>
                <div class="form-group">
                    <label for="einsurance" class="col-sm-3 control-label">Số bảo hiểm</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="einsurance" name="insurance">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edateR" class="col-sm-3 control-label">Ngày tuyển dụng</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edateR" name="dateR" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="erank" class="col-sm-3 control-label">Học hàm</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="rank" id="erank">
                        <option selected id="erank"></option>
                        <option value="Không">Không</option>
                        <option value="Phó Giáo sư">Phó Giáo sư</option>
                        <option value="Giáo sư">Giáo sư</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edegree" class="col-sm-3 control-label">Học vị</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="degree" id="edegree">
                        <option selected id="edegree"></option>
                        <option value="Không">Không</option>
                        <option value="Tiến sĩ">Tiến sĩ</option>
                        <option value="Thạc sĩ">Thạc sĩ</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="esalary" class="col-sm-3 control-label">Bậc lương</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="salary" id="esalary" required>
                        <option selected id="salary_id"></option>
                        <?php
                          $sql = "SELECT * FROM bacluong";
                          $query = $con->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['mabacluong']."'>".$prow['hesoluong']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="eschool" class="col-sm-3 control-label">Trường</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="school" id="eschool">
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
                    <label for="eroom" class="col-sm-3 control-label">Khoa</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eroom" name="room">
                    </div>
                </div>
                <div class="form-group">
                    <label for="esubject" class="col-sm-3 control-label">Bộ môn</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="esubject" name="subject">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="col-sm-3 control-label">Lĩnh vực</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="efield" name="field" required="">
                    </div>
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Cập nhập</button>
              </form>
            </div>
    </div>
  </div>
</div>

<!-- Xóa -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span>Xóa cán bộ</span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="xoacanbo.php">
                <input type="hidden" class="macb" name="id">
                <div class="text-center">
                    <p>Xác nhận xóa cán bộ</p>
                    <h2 class="bold de_name"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Xóa</button>
              </form>
            </div>
        </div>
    </div>
</div>
