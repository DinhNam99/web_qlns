<?php
	include '../session.php';

	if(isset($_POST['deletecm'])){
		$id = $_POST['id'];
		$macb = $_POST['macb'];
		$sql = "DELETE FROM chuyenmon WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Xóa chuyên môn thành công';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Chọn mục để xóa trước tiên';
	}

	header("location: chuyenmon.php?macb=$macb");
	
?>