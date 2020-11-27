<?php
session_start();
include('connection.php');

if(isset($_POST['login'])){
	$admin_user = $_POST['admin_user'];
	$admin_pass = $_POST['admin_pass'];

	$sql = "SELECT id FROM admin WHERE username = '".$admin_user."' AND password = '".$admin_pass."'";
	$fetch = $con->query($sql);

	$count = $fetch->num_rows;
	$row = $fetch->fetch_assoc();
	if($count > 0){
		session_start();
		$_SESSION['admin'] = $row['id'];
	}else{
		$_SESSION['error'] = 'Thông tin đăng nhập sai!';
	}
}else{
	$_SESSION['error'] = 'Yêu cầu nhập thông tin đăng nhập';
}
header('location: index.php');
?>