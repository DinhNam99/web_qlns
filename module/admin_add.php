<?php
	include '../session.php';

	if(isset($_POST['addadmin'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$photo = $_FILES['photo']['name'];
		if(!empty($photo)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);	
		}
		$sql = "INSERT INTO admin (id, username, password, photo, name, role) VALUES (NULL, '$username', '$password', '$photo', '$name', '0')";
		if($con->query($sql)){
			$_SESSION['success'] = "Thêm admin thành công";
		}else{
			$_SESSION['error'] = $con->error;
		}
	}else{
		$_SESSION['error'] = 'Điền vào biểu mẫu trước';
	}
	header('location: admin.php');
?>