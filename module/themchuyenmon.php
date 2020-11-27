<?php
	include '../session.php';

	if(isset($_POST['addcm'])){
		$macb = $_POST['macb'];
		$nganhdt = $_POST['nganhdt'];
		echo $nganhdt;

		$getFieldId = "SELECT lv.malinhvuc, lv.linhvuc FROM chuyenmon cm, linhvuc lv WHERE cm.malinhvuc = lv.malinhvuc AND cm.macb = '$macb' LIMIT 1";
		$queryFieldId = $con->query($getFieldId);
		$rowFieldId = $queryFieldId->fetch_assoc();
		
		$sql = "INSERT INTO chuyenmon (id, macb, malinhvuc, nganhdaotao) VALUES (null, '$macb', '".$rowFieldId['malinhvuc']."', '$nganhdt')";
		if($con->query($sql)){
			$_SESSION['success'] = "Thêm chuyên môn thành công";
		}else{
			$_SESSION['error'] = $con->error;
		}
	}else{
		$_SESSION['error'] = 'Điền vào biểu mẫu trước';
	}
	header("location: chuyenmon.php?macb=$macb");
?>