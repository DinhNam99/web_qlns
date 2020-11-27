<?php
	include '../session.php';

	if(isset($_POST['edithd'])){
		$id = $_POST['id'];
		$macb = $_POST['macb'];
		$tenhd = $_POST['tenhd'];
		$chucvu = $_POST['chucvu'];
		$loaihd = $_POST['loaihd'];
		$ngayky = $_POST['ngayky'];
		$tungay = $_POST['tungay'];
		$denngay = $_POST['denngay'];
		$trichnd = $_POST['trichnd'];
		
		$sql = "UPDATE hopdong SET tenhopdong='$tenhd',chucvu='$chucvu',loaihopdong='$loaihd',ngayky='$ngayky',tungay='$tungay',denngay='$denngay',trichycnoidung='$trichnd' WHERE mahopdong = '$id'";
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

	header('location: hopdong.php');
?>