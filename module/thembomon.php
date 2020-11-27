<?php
	include '../session.php';

	if(isset($_POST['addSj'])){
		$truong = $_POST['school'];
		$khoa = $_POST['room'];	
		$bomon = $_POST['subject'];

			$getRoom = "SELECT * FROM khoa k WHERE k.tenkhoa = '$khoa' AND k.matruong = '$truong'";
			$queryRoom = $con->query($getRoom);
			if($queryRoom->num_rows > 0){
				$rowRoom = $queryRoom->fetch_assoc();
				$makhoa = $rowRoom['makhoa'];
				echo $makhoa;
				$getSubject = "SELECT * FROM bomon b WHERE b.tenbomon = '$bomon' AND b.matruong = '$truong' AND b.makhoa = '$makhoa'";
				$querySubject = $con->query($getSubject);
				if($querySubject->num_rows > 0){
					$_SESSION['success'] = "Đã tồn tại bộ môn!";
				}else{
					$thbomon = "INSERT INTO bomon(id, matruong, makhoa, tenbomon) VALUES (null,'$truong','$makhoa','$bomon')";
					if($con->query($thbomon)){
						$_SESSION['success'] = "Thêm thành công";
					}else{
						$_SESSION['error'] = $con->error;
					}
				}
			}else{
				$tkhoa = "INSERT INTO khoa(makhoa, matruong, tenkhoa) VALUES (null,'$truong','$khoa')";
				if($con->query($tkhoa)){
					$ro_id = $con->insert_id;
					$tbomon = "INSERT INTO bomon(id, matruong, makhoa, tenbomon) VALUES (null,'$truong','$ro_id','$bomon')";
					if($con->query($tbomon)){
						$_SESSION['success'] = "Thêm thành công";
					}else{
						$_SESSION['error'] = $con->error;
					}
				}else{
					$_SESSION['error'] = $con->error;
				}
			}
	header('location: tatcabomon.php');
}
?>