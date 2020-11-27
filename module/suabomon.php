<?php
	include '../session.php';

	if(isset($_POST['uploadSj'])){
		$id = $_POST['id'];
		$truong = $_POST['school'];
		$khoa = $_POST['room'];
		$bomon = $_POST['subject'];	
		echo $truong;

		$sql = "UPDATE bomon SET tenbomon = '$bomon' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Cập nhập thông tin thành công';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}else{
		$_SESSION['error'] = 'Hãy điền đủ thông tin';
	}
	header('location: tatcabomon.php');
?>