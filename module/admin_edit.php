<?php
	include '../session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$sql = "UPDATE admin SET username = '$username', password = '$password', name = '$name', photo = '$filename' WHERE id = '$id'";
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

	header('location: admin.php');
?>