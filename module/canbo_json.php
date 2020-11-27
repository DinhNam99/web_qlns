<?php 
	include '../session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT c.macb, c.hoten, c.ngaysinh, c.gioiTinh, c.email, c.emailkhac, c.didong, c.quequan, c.noiohientai, c.dantoc, c.tongiao, c.socmnd, c.ngaycapcmnd, c.noicapcmnd, c.ngoaingu, c.khenthuong, c.kiluat, c.sobhxh, c.ngaytuyendung, b.tenbomon, l.linhvuc, c.hocham, c.hocvi, bl.hesoluong, bl.phucap, k.tenkhoa, t.tentruong, t.matruong FROM canbo c, bomon b, linhvuc l, bacluong bl, khoa k, truong t WHERE c.mabomon = b.id AND c.malinhvuc = l.malinhvuc AND bl.mabacluong = c.mabacLuong AND k.makhoa = b.makhoa AND b.matruong = t.matruong AND c.macb = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();
		// $sqlcm = "SELECT cm.nganhdaotao FROM chuyenmon cm WHERE cm.macb = '$id'";
		// $querycm = $con->query($sqlcm);
		// $rowcm = $querycm->fetch_assoc();
		// $array = array_merge($row, $rowcm);
		echo json_encode($row);
	}
?>