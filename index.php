<?php
	session_start();
	if(isset($_SESSION['admin'])){
		header('location: module/home.php');
	}
?>
<?php include 'header.php'; ?>
<body class="body_lg">
	<div id="container">
		<h1>Đăng nhập</h1>
		<form enctype="multipart/form-data" action="login.php" role="form" method="POST">
			<input name = "admin_user" placeholder = "Username" type = "text" required = "required" >
			<input name = "admin_pass" placeholder = "Password" type = "password" required = "required" >
			<button class = "btn-login" name = "login"><span class = "glyphicon glyphicon-log-in"></span> Login</button>
		</form>
	</div>
	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>

</body>
<?php
	include("script.php");
?>
<script type="text/javascript">
	$(document).ready(function(){
		function disableBack(){window.history.forward()}

		window.onload = disableBack();
		window.onpageshow = function(evt){if(evt.persisted) disableBack()}
	});
</script>
</html>