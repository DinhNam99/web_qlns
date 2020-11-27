<?php
	include '../session.php';

	if(isset($_POST['addhd'])){
		$id = $_POST['id'];
		$macb = $_POST['macb'];
		$tenhd = $_POST['tenhd'];
		$chucvu = $_POST['chucvu'];
		$loaihd = $_POST['loaihd'];
		$ngayky = $_POST['ngayky'];
		$tungay = $_POST['tungay'];
		$denngay = $_POST['denngay'];
		$trichnd = $_POST['trichnd'];

		//lay hd theo ma cb
		$gethdbycb = "SELECT * FROM hopdong WHERE macb = '$macb'";
		$queryhd = $con->query($gethdbycb);
		if($queryhd->num_rows > 0){
			$_SESSION['error'] = "Đã tồn tại hợp đồng lao động của cán bộ!";
		}else{
			$getschool = "SELECT t.matruong FROM canbo c, bomon b, khoa k, truong t WHERE c.mabomon = b.id AND b.makhoa = k.makhoa AND b.matruong = t.matruong AND c.macb = '$macb'";
			$querySchool = $con->query($getschool);
			$rowSchool = $querySchool->fetch_assoc();
			$matruong = $rowSchool['matruong'];
			$themhd = "INSERT INTO hopdong(mahopdong, macb, matruong, tenhopdong, chucvu, loaihopdong, ngayky, tungay, denngay, trichycnoidung) VALUES ('$id', '$macb', '$matruong', '$tenhd', '$chucvu', '$loaihd', '$ngayky', '$tungay', '$denngay', '$trichnd')";
			if($con->query($themhd)){
				$_SESSION['success'] = "Thêm thành công";
			}else{
				$_SESSION['error'] = $con->error;
			}
		}
	}
	header('location: hopdong.php');
?>