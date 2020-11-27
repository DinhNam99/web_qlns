<?php
	include '../session.php';

	if(isset($_POST['deletehd'])){
		$id = $_POST['id'];
		$macb = $_POST['macb'];
		$gethdbycb = "SELECT * FROM hopdong WHERE macb = '$macb'";
		$queryhd = $con->query($gethdbycb);
		if($queryhd->num_rows > 0){
			$_SESSION['error'] = "Không thể xóa do hiện tại thông tin cán bộ vẫn đang tồn tại trên hệ thống!";
		}else{
			$sql = "DELETE FROM hopdong WHERE mahopdong = '$id'";
			if($con->query($sql)){
				$_SESSION['success'] = 'Xóa Bộ môn thành công';
			}
			else{
				$_SESSION['error'] = "Hiện tại không thể xóa do đang có cán bộ làm việc tại bộ môn!";
			}
		}
	}
	else{
		$_SESSION['error'] = 'Chọn mục để xóa trước tiên';
	}

	header('location: hopdong.php');
	
?>