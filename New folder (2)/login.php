<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</head>
<body>
	<div>
	<center><br><br>
		<h3>Teacher Management System</h3><br>

		<form action="" method="post">
			<input type="submit" name="admin_login" value="Admin_Login">
			<input type="submit" name="teacher_login" value="Teacher_Login">
			
		</form>
		<?php
		//button e clic korle rewide korbe admin login e click bojhar jonno.issset
		    if(isset($_POST['admin_login'])){
		    	header("Location: admin_login.php");
		    }
		    if(isset($_POST['student_login'])){
		    	header("Location: teacher_login.php");
		    }

		?>

	</center>
</div>
</body>
</html>