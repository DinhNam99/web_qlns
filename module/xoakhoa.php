<?php
	include '../session.php';

	if(isset($_POST['deleteR'])){
		$id = $_POST['id'];
		$getSubject = "SELECT * FROM bomon b WHERE b.makhoa = '$id'";
		$querySubject = $con->query($getSubject);
		if($querySubject->num_rows > 0){
			$deleteSj = "DELETE FROM bomon WHERE makhoa = '$id'";
			if($con->query($deleteSj)){
				$deleteRoom = "DELETE FROM khoa WHERE makhoa = '$id'";
				if($con->query($deleteRoom)){
					$_SESSION['success'] = 'Xóa khoa thành công';
				}
				else{
					$_SESSION['error'] = $con->error;
				}
			}else{
				$_SESSION['error'] = $con->error;
			}
		}else{
			$deleteSj = "DELETE FROM bomon WHERE makhoa = '$id'";
			if($con->query($deleteSj)){
				$deleteRoom = "DELETE FROM khoa WHERE makhoa = '$id'";
				if($con->query($deleteRoom)){
					$_SESSION['success'] = 'Xóa khoa thành công';
				}
				else{
					$_SESSION['error'] = $con->error;
				}
			}else{
				$_SESSION['error'] = $con->error;
			}
		}
	}
	else{
		$_SESSION['error'] = 'Chọn mục để xóa trước tiên';
	}

	header('location: tatcakhoa.php');
	
?>