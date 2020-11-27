<?php
	include '../session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM admin WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Xóa Admin thành công';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Chọn mục để xóa trước tiên';
	}

	header('location: admin.php');
	
?>