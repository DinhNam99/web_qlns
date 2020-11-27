<?php 
	include '../session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT b.id, b.makhoa, b.matruong, b.tenbomon, k.tenkhoa, t.tentruong FROM khoa k, truong t, bomon b WHERE b.matruong = t.matruong AND b.makhoa = k.makhoa AND b.id = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>