<?php
	include '../session.php';

	if(isset($_POST['deleteSj'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM bomon WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Xóa Bộ môn thành công';
		}
		else{
			$_SESSION['error'] = "Hiện tại không thể xóa do đang có cán bộ làm việc tại bộ môn!";
		}
	}
	else{
		$_SESSION['error'] = 'Chọn mục để xóa trước tiên';
	}

	header('location: tatcabomon.php');
	
?>