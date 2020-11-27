<?php 
	include '../session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT k.makhoa, k.matruong, k.tenkhoa, t.tentruong FROM khoa k, truong t WHERE k.matruong = t.matruong AND k.makhoa = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>