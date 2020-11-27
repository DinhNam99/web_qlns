<?php 
	include '../session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT hd.mahopdong, hd.macb, cb.hoten, hd.matruong, t.tentruong, hd.tenhopdong, hd.chucvu, hd.loaihopdong, hd.ngayky, hd.tungay, hd.denngay, hd.trichycnoidung  FROM hopdong hd, truong t, canbo cb WHERE hd.matruong = t.matruong AND hd.macb = cb.macb AND mahopdong = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>