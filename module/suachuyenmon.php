<?php
	include '../session.php';

	if(isset($_POST['uploadcm'])){
		$id = $_POST['id'];
		$malinhvuc = $_POST['linhvuc'];
		$macb = $_POST['macb'];
		$nganhdaotao = $_POST['nganhdt'];
		
		$sql = "UPDATE chuyenmon SET nganhdaotao='$nganhdaotao' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Cập nhập thông tin thành công';
		}
		else{
			$_SESSION['error'] = $con->error;
		}

	}
	else{
		$_SESSION['error'] = 'Hãy điền đủ thông tin';
	}

	header("location: chuyenmon.php?macb=$macb");
?>