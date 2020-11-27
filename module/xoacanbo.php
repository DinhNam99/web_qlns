<?php
	include '../session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM canbo WHERE macb = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Xóa cán bộ thành công';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Làm ơn lựa chọn cán bộ';
	}

	header('location: tatcacanbo.php');
	
?>