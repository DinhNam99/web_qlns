<?php include '../session.php'; ?>
<?php include '../header.php'?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		
		<?php include 'navbar.php'; ?>
		<?php include 'menubar.php'; ?>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>Chức danh và Trình độ Đào tạo</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Hus Staff</a></li>
					<li class="active">Chức danh và Trình độ Đào tạo</li>
				</ol>
			</section>

			<!-- Main -->
			<section class="content">
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-orange">
							<div class="inner">
					              <?php
					                $sql = "SELECT * FROM canbo WHERE hocham = 'Giáo sư'";
					                $query = $con->query($sql);

					                echo "<h3>".$query->num_rows."</h3>";
					              ?>
								<p>Giáo Sư</p>
							</div>
							 <div class="icon">
					              <i class="ion ion-trophy"></i> 
					         </div>
						</div>
					</div>

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
								<?php
									$sql = "SELECT * FROM canbo WHERE hocham = 'Phó Giáo sư'";
									$query = $con->query($sql);
									echo "<h3>".utf8_encode($query->num_rows)."</h3>"
								?>
								<p>Phó Giáo sư</p>
							</div>
							<div class="icon">
              					<i class="ion ion-star"></i>
            				</div>
						</div>
					</div>

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
								<?php
									$sql = "SELECT * FROM canbo WHERE hocvi = 'Tiến sĩ'";
									$query = $con->query($sql);
									echo "<h3>".$query->num_rows."</h3>";
								?>
								<p>Tiến sĩ</p>
							</div>
							<div class="icon">
								<i class="ion ion-ribbon-b"></i>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
								<?php
									$sql = "SELECT * FROM canbo WHERE hocvi = 'Thạc sĩ'";
									$query = $con->query($sql);
									echo "<h3>".$query->num_rows."</h3>";
								?>
								<p>Thạc sĩ</p>
							</div>
							<div class="icon">
								<i class="ion ion-university"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
			        <div class="col-xs-12">
			          <div class="box">
			            <div class="box-header with-border">
			              <h3 class="box-title">Số liệu thống kê cơ bản</h3>
			              
			            </div>
			            <div class="box-body">
							<div class="text-center">
								<div id="barchart" style="height: 500px;"></div>
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
	google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Trường', 'Thạc sĩ', 'Tiến sĩ', 'Phó Giáo sư', 'Giáo sư'],
          <?php
         $sql = "SELECT tr.tenviettat, (SELECT COUNT(c.hocvi) FROM canbo c, bomon b, khoa k, truong t WHERE c.hocvi = 'Thạc sĩ' AND c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong AND t.matruong = tr.matruong) as slthsi, (SELECT COUNT(c.hocvi) FROM canbo c, bomon b, khoa k, truong t WHERE c.hocvi = 'Tiến sĩ' AND c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong AND t.matruong = tr.matruong) as sltsi, (SELECT COUNT(c.hocvi) FROM canbo c, bomon b, khoa k, truong t WHERE c.hocham = 'Phó Giáo sư' AND c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong AND t.matruong = tr.matruong) as slpgs, (SELECT COUNT(c.hocvi) FROM canbo c, bomon b, khoa k, truong t WHERE c.hocham = 'Giáo sư' AND c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong AND t.matruong = tr.matruong) as slgs FROM truong tr";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['tenviettat']."',".$result['slthsi'].", ".$result['sltsi'].", ".$result['slpgs'].", ".$result['slgs']."],";
          }

         ?>
        ]);

        var options = {
          chart: {
            title: 'Chức danh và Trình độ đào tạo theo trường',
          },
          bars: 'vertical', // Required for Material Bar Charts.
          // vAxis: {format: 'none'},
          height: 400,
          colors: ['#1b9e77', '#d95f02', '#7570b3', 'gold']
        };

        var chart = new google.charts.Bar(document.getElementById('barchart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

      }
</script>
</body>
</html>