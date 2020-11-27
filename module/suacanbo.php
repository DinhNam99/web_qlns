<?php
include '../session.php';
if(isset($_POST['edit'])){
	$id = $_POST['id'];
	echo $id;
	$hoten = $_POST['name'];
	echo $hoten;
	$ngaysinh = $_POST['birthdate'];
	$gioitinh = $_POST['gender'];
	$email = $_POST['email'];
	$emailkhac = $_POST['emailother'];
	$didong = $_POST['phone'];
	$quequan = $_POST['home'];
	$noiohientai = $_POST['address'];
	$dantoc = $_POST['nation'];
	$tongiao = $_POST['religion'];
	$socmnd = $_POST['personId'];
	$ngaycapcmnd = $_POST['datePId'];
	$noicapcmnd = $_POST['issuedBy'];
	$ngoaingu = $_POST['language'];
	$khenthuong = $_POST['bonus'];
	$sobhxh = $_POST['insurance'];
	$kiluat = $_POST['discipline'];
	$ngaytuyendung = $_POST['dateR'];
	$bacluong = $_POST['salary'];
	$hocvi = $_POST['degree'];
	$hocham = $_POST['rank'];
	$linhvuc = $_POST['field'];
	$truong = $_POST['school'];
	$khoa = $_POST['room'];
	$bomon = $_POST['subject'];
	echo $truong;


	//get school
	$getRoom = "SELECT * FROM khoa k WHERE k.tenkhoa = '$khoa' AND k.matruong = '$truong'";
			$queryRoom = $con->query($getRoom);
			if($queryRoom->num_rows > 0){
				$rowRoom = $queryRoom->fetch_assoc();
				$makhoa = $rowRoom['makhoa'];
				echo $makhoa;
				$getSubject = "SELECT * FROM bomon b WHERE b.tenbomon = '$bomon' AND b.matruong = '$truong' AND b.makhoa = '$makhoa'";
				$querySubject = $con->query($getSubject);
				if($querySubject->num_rows > 0){
					$rowSubject = $querySubject->fetch_assoc();
					$sj_id = $rowSubject['id']; 
					echo $sj_id;
					capnhapttin($con,$id,$hoten,$ngaysinh, $gioitinh, $email, $emailkhac, $didong, $quequan, $noiohientai, $dantoc, $tongiao, $socmnd, $ngaycapcmnd, $noicapcmnd, $ngoaingu, $khenthuong, $sobhxh, $kiluat, $ngaytuyendung, $sj_id, $bacluong, $hocham, $hocvi, $linhvuc);
				}else{
					$thbomon = "INSERT INTO bomon(id, matruong, makhoa, tenbomon) VALUES (null,'$truong','$makhoa','$bomon')";
					if($con->query($thbomon)){
						$sj_id = $con->insert_id;
						echo $sj_id;
						capnhapttin($con,$id,$hoten,$ngaysinh, $gioitinh, $email, $emailkhac, $didong, $quequan, $noiohientai, $dantoc, $tongiao, $socmnd, $ngaycapcmnd, $noicapcmnd, $ngoaingu, $khenthuong, $sobhxh, $kiluat, $ngaytuyendung, $sj_id, $bacluong, $hocham, $hocvi, $linhvuc);
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
						$sj_id = $con->insert_id;
						echo $sj_id;
						capnhapttin($con,$id,$hoten,$ngaysinh, $gioitinh, $email, $emailkhac, $didong, $quequan, $noiohientai, $dantoc, $tongiao, $socmnd, $ngaycapcmnd, $noicapcmnd, $ngoaingu, $khenthuong, $sobhxh, $kiluat, $ngaytuyendung, $sj_id, $bacluong, $hocham, $hocvi, $linhvuc);
					}else{
						$_SESSION['error'] = $con->error;
					}
				}else{
					$_SESSION['error'] = $con->error;
				}
			}
			header('location: tatcacanbo.php');
	
}
	function capnhapttin($con,$macb,$hoten,$ngaysinh, $gioitinh, $email, $emailkhac, $didong, $quequan, $noiohientai, $dantoc, $tongiao, $socmnd, $ngaycapcmnd, $noicapcmnd, $ngoaingu, $khenthuong, $sobhxh, $kiluat, $ngaytuyendung, $mabomon, $bacluong, $hocham, $hocvi, $linhvuc){

        //get ma linh vuc
        $getField = "SELECT * FROM linhvuc lv WHERE lv.linhvuc = '$linhvuc'";
        $queryField = $con->query($getField);
		if($queryField->num_rows > 0){
			$rowField = $queryField->fetch_assoc();
			$malinhvuc = $rowField['malinhvuc'];
			echo $malinhvuc;
			$editCb = "UPDATE canbo SET hoten = '$hoten', ngaysinh = '$ngaysinh', gioiTinh = '$gioitinh', email = '$email', emailkhac = '$emailkhac', didong = '$didong', quequan = '$quequan', noiohientai = '$noiohientai', dantoc = '$dantoc', tongiao = '$tongiao', socmnd = '$socmnd', ngaycapcmnd = '$ngaycapcmnd', noicapcmnd = '$noicapcmnd', ngoaingu = '$ngoaingu', khenthuong = '$khenthuong', sobhxh = '$sobhxh', kiluat = '$kiluat', ngaytuyendung = '$ngaytuyendung', mabacLuong = '$bacluong', hocvi = '$hocvi',hocham = '$hocham', malinhvuc = '$malinhvuc', mabomon = '$mabomon' WHERE macb = '$macb'";
	        if($con->query($editCb)){
	        	$_SESSION['success'] = "Cập nhập thành công";
	        }else{
	        	$_SESSION['error'] = $con->error;	
	        }
		}else{
	        $addField = "INSERT INTO `linhvuc`(`malinhvuc`, `linhvuc`) VALUES (null,'$linhvuc')";
	        if($con->query($addField)){
	        	$f_id = $con->insert_id;
	        	echo $f_id;
	        	$editCb = "UPDATE canbo SET hoten = '$hoten', ngaysinh = '$ngaysinh', gioiTinh = '$gioitinh', email = '$email', emailkhac = '$emailkhac', didong = '$didong', quequan = '$quequan', noiohientai = '$noiohientai', dantoc = '$dantoc', tongiao = '$tongiao', socmnd = '$socmnd', ngaycapcmnd = '$ngaycapcmnd', noicapcmnd = '$noicapcmnd', ngoaingu = '$ngoaingu', khenthuong = '$khenthuong', sobhxh = '$sobhxh', kiluat = '$kiluat', ngaytuyendung = '$ngaytuyendung', mabacLuong = '$bacluong', hocvi = '$hocvi',hocham = '$hocham', malinhvuc = '$f_id', mabomon = '$mabomon' WHERE macb = '$macb'";
	        	if($con->query($editCb)){
	        		$_SESSION['success'] = "Cập nhập thành công";
	        	}else{
	        		$_SESSION['error'] = $con->error;	
	        	}
				
			}else{
				$_SESSION['error'] = $con->error;
			}
		}
	}
?>