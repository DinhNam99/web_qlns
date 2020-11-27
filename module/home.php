<?php include '../session.php'; ?>
<?php include '../header.php'?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>Trang chủ</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Trang chủ</li>
				</ol>
			</section>

			<!-- Main -->
			<section class="content">
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-orange">
							<div class="inner">
					              <?php
					                $sql = "SELECT * FROM canbo";
					                $query = $con->query($sql);

					                echo "<h3>".$query->num_rows."</h3>";
					              ?>
								<p>Cán bộ, giảng viên</p>
							</div>
							 <div class="icon">
					              <i class="ion ion-person-stalker"></i> 
					            </div>
					            <a href="tatcacanbo.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
								<?php
									$sql = "SELECT * FROM truong";
									$query = $con->query($sql);
									echo "<h3>".utf8_encode($query->num_rows)."</h3>"
								?>
								<p>Trường</p>
							</div>
							<div class="icon">
              					<i class="ion ion-university"></i>
            				</div>
            				<a href="tatcatruong.php" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
								<?php
									$sql = "SELECT * FROM khoa";
									$query = $con->query($sql);
									echo "<h3>".$query->num_rows."</h3>";
								?>
								<p>Khoa</p>
							</div>
							<div class="icon">
								<i class="ion ion-android-list"></i>
							</div>
							<a href="tatcakhoa.php" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
								<?php
									$sql = "SELECT * FROM bomon";
									$query = $con->query($sql);
									echo "<h3>".$query->num_rows."</h3>";
								?>
								<p>Bộ môn</p>
							</div>
							<div class="icon">
								<i class="ion ion-ios-briefcase"></i>
							</div>
							<a href="tatcabomon.php" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
			        <div class="col-xs-12">
			          <div class="box">
			            <div class="box-header with-border">
			              <h3 class="box-title"></h3>
			              <div class="box-tools pull-right">
			                <form class="form-inline">
			                  <div class="form-group">
			                    <label>Thống kê: </label>
			                    <select class="form-control input-sm" id="select_option">
                  					<?php
                  						$options = ["Số cán bộ theo Trường", "Số cán bộ theo Khoa", "Số cán bộ theo Bộ môn"]; 
                        				foreach ($options as $k => $option){
                        					$selected = ($k==$op)?'selected':'';
        									echo "<option value='".$k."'>".$option."</option>";
    									}
                      				?>
                				</select>
			                  </div>
			                </form>
			              </div>
			            </div>
			            <div class="box-body">
							<div class="text-center">
								<div id="piechart" style="height: 500px;"></div>
							</div>
					</div>
			          </div>
			        </div>
			    </div>
			</section>
		</div>
		<?php include 'footer.php'?>
	</div>
	
<?php include '../script.php'; ?>	
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var dataT = google.visualization.arrayToDataTable([
          ['Trường', 'Số cán bộ'],
         <?php
         $sql = "SELECT COUNT(c.macb) as socb, t.tentruong FROM canbo c, bomon b, khoa k, truong t WHERE c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong GROUP BY t.matruong";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['tentruong']."',".$result['socb']."],";
          }

         ?>
        ]);
        var optionT = {
          title: 'Thống kê số cán bộ theo Trường'
        };

        var dataK = google.visualization.arrayToDataTable([
          ['Khoa', 'Số cán bộ'],
         <?php
         $sql = "SELECT COUNT(c.macb) as socb,k.tenkhoa FROM canbo c, bomon b, khoa k, truong t WHERE c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong GROUP BY k.makhoa";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['tenkhoa']."',".$result['socb']."],";
          }

         ?>
        ]);
        var optionK = {
          title: 'Thống kê số cán bộ theo Khoa'
        };
        var dataB = google.visualization.arrayToDataTable([
          ['Bộ môn', 'Số cán bộ'],
         <?php
         $sql = "SELECT COUNT(c.macb) as socb,b.tenbomon FROM canbo c, bomon b, khoa k, truong t WHERE c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong GROUP BY b.id";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['tenbomon']."',".$result['socb']."],";
          }

         ?>
        ]);
        var optionB = {
          title: 'Thống kê số cán bộ theo Bộ môn'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(dataT, optionT);
        $('#select_option').change(function(){
    		// window.location.href = 'home.php?option='+$(this).val();
    		console.log("option"+$(this).val())
    		if($(this).val() == 0){
    			chart.draw(dataT, optionT);
    		}else if($(this).val() == 1){
    			chart.draw(dataK, optionK);
    		}else{
    			chart.draw(dataB, optionB);
    		}
  		});
        
      }
      if(<?php echo $user['role'];?> == 1){
		document.getElementById("admin").style.display = 'block';
      }else{
      	document.getElementById("admin").style.display = 'none';
      }
      
      
    </script>
</body>
</html>