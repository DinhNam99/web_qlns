<?php
	include '../session.php';
	if(isset($_POST['save'])){
		$macb = $_POST['macb'];
		$hoten = $_POST['name'];
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
		$chuyenmon = $_POST['techn'];
		$truong = $_POST['school'];
		$khoa = $_POST['room'];
		$bomon = $_POST['subject'];

		echo $linhvuc;
		// $getSchool = "SELECT * FROM truong t WHERE t.matruong = '$truong'";
		// $querySchool = $con->query($getSchool);
		// // // if($querySchool->num_rows > 0){
		// 	$rowSchool = $querySchool->fetch_assoc();
		// 	$matruong = $rowSchool['matruong'];
		// 	echo $matruong;
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
					themttin($con,$macb,$hoten,$ngaysinh, $gioitinh, $email, $emailkhac, $didong, $quequan, $noiohientai, $dantoc, $tongiao, $socmnd, $ngaycapcmnd, $noicapcmnd, $ngoaingu, $khenthuong, $sobhxh, $kiluat, $ngaytuyendung, $sj_id, $bacluong, $hocham, $hocvi, $linhvuc, $chuyenmon);
				}else{
					$thbomon = "INSERT INTO bomon(id, matruong, makhoa, tenbomon) VALUES (null,'$truong','$makhoa','$bomon')";
					if($con->query($thbomon)){
						$sj_id = $con->insert_id;
						echo $sj_id;
						themttin($con,$macb,$hoten,$ngaysinh, $gioitinh, $email, $emailkhac, $didong, $quequan, $noiohientai, $dantoc, $tongiao, $socmnd, $ngaycapcmnd, $noicapcmnd, $ngoaingu, $khenthuong, $sobhxh, $kiluat, $ngaytuyendung, $sj_id, $bacluong, $hocham, $hocvi, $linhvuc, $chuyenmon);
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
						themttin($con,$macb,$hoten,$ngaysinh, $gioitinh, $email, $emailkhac, $didong, $quequan, $noiohientai, $dantoc, $tongiao, $socmnd, $ngaycapcmnd, $noicapcmnd, $ngoaingu, $khenthuong, $sobhxh, $kiluat, $ngaytuyendung, $sj_id, $bacluong, $hocham, $hocvi, $linhvuc, $chuyenmon);
					}else{
						$_SESSION['error'] = $con->error;
					}
				}else{
					$_SESSION['error'] = $con->error;
				}
			}
			header('location: tatcacanbo.php');
		// }else{
		// 	$themtruong = "INSERT INTO truong (matruong, tentruong) VALUES (null,'$truong')";
		// 	if($con->query($themtruong)){
		// 		$sch_id = $con->insert_id;
		// 		$themkhoa = "INSERT INTO khoa(makhoa, matruong, tenkhoa) VALUES (null,'$sch_id','$khoa')";
		// 		if($con->query($themkhoa)){
		// 			$r_id = $con->insert_id;
		// 			$thembomon = "INSERT INTO bomon(id, matruong, makhoa, tenbomon) VALUES (null,'$sch_id','$r_id','$bomon')";
		// 			if($con->query($thembomon)){
		// 				$_SESSION['success'] = "Thêm thành công";
		// 			}else{
		// 				$_SESSION['error'] = $con->error;
		// 			}
		// 		}else{
		// 			$_SESSION['error'] = $con->error;
		// 		}
		// 	}else{
		// 		$_SESSION['error'] = $con->error;
		// 	}
		// }
		// $themtruong = "INSERT INTO `truong`(`matruong`, `tentruong`) VALUES (null,$truong)";
		// $themkhoa = "INSERT INTO `khoa`(`makhoa`, `matruong`, `tenkhoa`) VALUES (null,[value-2],[value-3])";

		// $add = $con -> prepare("INSERT INTO `canbo`(`macb`, `hoten`, `ngaysinh`, `gioiTinh`, `email`, `emailkhac`, `didong`, `quequan`, `noiohientai`, `dantoc`, `tongiao`, `socmnd`, `ngaycapcmnd`, `noicapcmnd`, `ngoaingu`, `khenthuong`, `sobhxh`, `kiluat`, `ngaytuyendung`, `mabomon`, `mabacLuong`, `hocvi`, `hocham`, `malinhvuc`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		// $add -> execute(array($macb, $hoten, $ngaysinh, $gioitinh, $email, $emailkhac, $didong, $quequan, $noiohientai, $dantoc, $tongiao, $socmnd, $ngaycapcmnd, $noicapcmnd, $ngoaingu, $khenthuong, $sobhxh, $kiluat, $ngaytuyendung, $mabomon, $mabacluong, $hocvi, $hocham, $malinhvuc));
	}
	function themttin($con,$macb,$hoten,$ngaysinh, $gioitinh, $email, $emailkhac, $didong, $quequan, $noiohientai, $dantoc, $tongiao, $socmnd, $ngaycapcmnd, $noicapcmnd, $ngoaingu, $khenthuong, $sobhxh, $kiluat, $ngaytuyendung, $mabomon, $bacluong, $hocham, $hocvi, $linhvuc, $nganhdt){

        //get ma linh vuc
        $getField = "SELECT * FROM linhvuc lv WHERE lv.linhvuc = '$linhvuc'";
        $queryField = $con->query($getField);
		if($queryField->num_rows > 0){
			$rowField = $queryField->fetch_assoc();
			$malinhvuc = $rowField['malinhvuc'];
			$addCb = "INSERT INTO canbo(macb, hoten, ngaysinh, gioiTinh, email, emailkhac, didong, quequan, noiohientai, dantoc, tongiao, socmnd, ngaycapcmnd, noicapcmnd, ngoaingu, khenthuong, sobhxh,kiluat, ngaytuyendung, mabomon, mabacLuong, hocvi, hocham, malinhvuc) VALUES ('$macb','$hoten','$ngaysinh','$gioitinh','$email','$emailkhac','$didong','$quequan','$noiohientai','$dantoc','$tongiao','$socmnd','$ngaycapcmnd','$noicapcmnd','$ngoaingu','$khenthuong','$sobhxh','$kiluat','$ngaytuyendung','$mabomon','$bacluong','$hocvi','$hocham','$malinhvuc')";
	        if($con->query($addCb)){
	        	$addcm = "INSERT INTO chuyenmon (id, macb, malinhvuc, nganhdaotao) VALUES (null, '$macb', '$malinhvuc', '$nganhdt')";
	        	if($con->query($addcm)){
	        		$_SESSION['success'] = "Thêm thành công";
	        	}else{
	        		$_SESSION['error'] = $con->error;	
	        	}
	        }else{
	        	$_SESSION['error'] = $con->error;	
	        }
		}else{
	        $addField = "INSERT INTO `linhvuc`(`malinhvuc`, `linhvuc`) VALUES (null,'$linhvuc')";
	        if($con->query($addField)){
	        	$f_id = $con->insert_id;
	        	$addCb = "INSERT INTO canbo(macb, hoten, ngaysinh, gioiTinh, email, emailkhac, didong, quequan, noiohientai, dantoc, tongiao, socmnd, ngaycapcmnd, noicapcmnd, ngoaingu, khenthuong, sobhxh,kiluat, ngaytuyendung, mabomon, mabacLuong, hocvi, hocham, malinhvuc) VALUES ('$macb','$hoten','$ngaysinh','$gioitinh','$email','$emailkhac','$didong','$quequan','$noiohientai','$dantoc','$tongiao','$socmnd','$ngaycapcmnd','$noicapcmnd','$ngoaingu','$khenthuong','$sobhxh','$kiluat','$ngaytuyendung','$mabomon','$bacluong','$hocvi','$hocham','$f_id')";
	        	if($con->query($addCb)){
	        		$addcm = "INSERT INTO chuyenmon (id, macb, malinhvuc, nganhdaotao) VALUES (null, '$macb', '$f_id', '$nganhdt')";
	        		if($con->query($addcm)){
	        			$_SESSION['success'] = "Thêm thành công";
	        		}else{
	        			$_SESSION['error'] = $con->error;	
	        		}
	        	}else{
	        		$_SESSION['error'] = $con->error;	
	        	}
				
			}else{
				$_SESSION['error'] = $con->error;
			}
		}

    }
?> 