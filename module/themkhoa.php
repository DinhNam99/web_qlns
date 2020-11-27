<?php
	include '../session.php';

	if(isset($_POST['addRoom'])){
		$truong = $_POST['school'];
		$khoa = $_POST['room'];	
		echo $truong;

		$getRoom = "SELECT * FROM khoa k WHERE k.tenkhoa = '$khoa' AND k.matruong = '$truong'";
		$queryRoom = $con->query($getRoom);
		if($queryRoom->num_rows > 0){
			$rowRoom = $queryRoom->fetch_assoc();
			$makhoa = $rowRoom['makhoa'];
			$_SESSION['error'] = "Đã tồn tại khoa!";
		}else{
			$tkhoa = "INSERT INTO khoa(makhoa, matruong, tenkhoa) VALUES (null,'$truong','$khoa')";
			if($con->query($tkhoa)){
				$_SESSION['success'] = "Thêm thành công";
			}else{
				$_SESSION['error'] = $con->error;
			}
		}
	}
	header('location: tatcakhoa.php');
?>