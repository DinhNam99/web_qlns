<header class="main-header">
	<a href="home.php" class="logo">
		<span class="logo-mini"><b><img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image"></b></span>
		<span class="logo-lg"><b></b>Hus Staff</span>
	</a>    
	<nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
      	<ul class="nav navbar-nav">
      		<li class="dropdown user user-menu">
      			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
      				<img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>"class="user-image" alt="User image">
      				<span class="hidden-xs"><?php echo $user['name']; ?></span>
      			</a>
      			<ul class="dropdown-menu">

	              <li class="user-header">
	                <img src="../images/profile.jpg" class="img-circle" alt="User Image">

	                <p>
	                  <?php echo $user['name']; ?>
	                </p>
	              </li>
	              <li class="user-footer">
	                <div class="pull-right">
	                  <a href="../logout.php" class="btn btn-default btn-flat">Đăng xuất</a>
	                </div>
	              </li>
	      			</ul>
	      		</li>
      	</ul>
      </div>
	</nav>
</header>