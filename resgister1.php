<!DOCTYPE html>

<html><head>
	<meta charset="utf-8">
	
	<title>resgister</title>
	<link rel="stylesheet" href="style-resgister.css">
</head>
<body>
	<div id="form-resgister">
		<form action="#" method="post" enctype="multipart/form-data">
			<tr>
				
				<h3>Register</h3>					
				</td>
				<input type="text" name="txtuserid" id="txtuserid" placeholder="Enter UserID">
				<input type="text" name="txtusername" id="txtusername" placeholder="Enter UserName">
				<input type="text" name="txtfullname" id="txtfullname"placeholder="Enter FullName">
				<input type="password" name="txtpassword" id="txtpassword" placeholder="Enter PassWord">
				<input type="text" name="txtemail" id="txtemail" placeholder="Enter Email">
				<input type="number" name="txtphonenumber" id="txtphonenumber"placeholder="Enter Phonenumber">
				<input type="file" name="image" id="txtimage">
				<input type="submit" value="Register" name="register" id="btn-resgister">
			</tr>
		
	</form>
	</div>
	
<?php
	$connect = mysqli_connect('localhost','root','','php');
	mysqli_set_charset($connect,"utf8");
		if(!$connect){
			echo "kết nối thất bại";
		}else{
			echo "";
		}
	if(isset($_POST['register'])){
		$file = $_FILES['image']['name'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$path = "Avatar/";
		move_uploaded_file($file,$path.$file);
		$userid= $_POST['txtuserid'];
		$username= $_POST['txtusername'];
		$fullname= $_POST['txtfullname'];
		$password= $_POST['txtpassword'];
		$email= $_POST['txtemail'];
		$phonenumber= $_POST['txtphonenumber'];
		
		
		$sql= "insert into user values ('$userid','$username','$fullname','$password','$email','$phonenumber','$file')";
		$result = mysqli_query($connect,$sql);
	if($result){
			echo "<script>alert('Account has been created successfully!')</script>";
			echo "<script>window.open('login2.php','_self')</script>";
		}else{
			echo "<script>alert('Error')</script>";
		}
	}
	?>
</body>
</html>