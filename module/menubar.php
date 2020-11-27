<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>"class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $user['name']; ?></p>
				<a><i class="fa fa-circle text-success"></i> Đang hoạt động</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="" id="admin"><a href="admin.php"><i class="fa fa-user"></i> <span> Admin</span></a></li>
			<li class="header">Báo cáo</li>
			<li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span> Trang chủ</span></a></li>
			<li class=""><a href="thongke.php"><i class="fa fa-graduation-cap"></i><span> Chức danh và Trình độ đào tạo</span></a></li>
			<li class="header">Quản lý</li>
			<li class=""><a href="tatcacanbo.php"><i class="fa fa-users"></i> <span> Cán bộ, giảng viên</span></a></li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-suitcase"></i>
	            <span>Đơn vị</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="tatcatruong.php"><i class="fa fa-circle-o"></i> Trường</a></li>
	            <li><a href="tatcakhoa.php"><i class="fa fa-circle-o"></i> Khoa</a></li>
	            <li><a href="tatcabomon.php"><i class="fa fa-circle-o"></i> Bộ môn</a></li>
	          </ul>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-bookmark"></i>
	            <span>Danh mục</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="dantoc.php"><i class="fa fa-circle-o"></i> Dân tộc</a></li>
	            <li><a href="tongiao.php"><i class="fa fa-circle-o"></i> Tôn giáo</a></li>
	            <li><a href="quequan.php"><i class="fa fa-circle-o"></i> Quê quán</a></li>
	            <li><a href="luong.php"><i class="fa fa-circle-o"></i> Lương</a></li>
	            <li><a href="linhvuc.php"><i class="fa fa-circle-o"></i> Lĩnh vực</a></li>
	          </ul>
	        </li>
	        <li class=""><a href="hopdong.php"><i class="fa fa-book"></i> <span> Hợp đồng</span></a></li>
		</ul>
	</section>
</aside>