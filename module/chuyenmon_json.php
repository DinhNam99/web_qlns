<?php 
	include '../session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT cm.id, cm.macb,lv.malinhvuc, lv.linhvuc, cm.nganhdaotao FROM chuyenmon cm, linhvuc lv WHERE cm.malinhvuc = lv.malinhvuc AND cm.id = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();
		echo json_encode($row);
	}
?>