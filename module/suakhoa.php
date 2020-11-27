<?php
	include '../session.php';

	if(isset($_POST['uploadR'])){
		$id = $_POST['id'];
		$truong = $_POST['school'];
		$khoa = $_POST['room'];	
		echo $truong;

		$sql = "UPDATE khoa SET tenkhoa= '$khoa' WHERE makhoa = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Cập nhập thông tin thành công';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}else{
		$_SESSION['error'] = 'Hãy điền đủ thông tin';
	}
	header('location: tatcakhoa.php');
?>