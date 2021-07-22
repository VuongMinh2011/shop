<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="style-login..css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
</head>
<meta charset="utf-8">
<body>
  <?php
session_start();
?>
	<div class="wrap">
    <div id="form-login">
      <form method="post">
        <tr>
          <h3>Login</h3>
          <br />
        <span> Don't have account? <a href="http://localhost/song/resgister1.php#">Register Here</a><br />
          <br />
        </span></td>
      </tr>
      <tr>
        <input type="text" name="txtusername" placeholder="Enter Username" id="txtusername">
        <input type="password" name="txtpassword" placeholder="Enter Password" id="txtpassword">
        <input type="submit" name="login" value="Login" id="btn-login">
        
        </tr>
        
      </form>
    </div>
    
  </div>
  
  <?php 

  
$connect = mysqli_connect('localhost','root','','php');
  if(isset($_POST['login'])){

    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
    $sql="select * from user where username='$username' and password='$password'";
    $result = mysqli_query($connect,$sql);
    $check_login = mysqli_num_rows($result);
    $row_login = mysqli_fetch_array($result);   
    if($check_login == 0){
     echo "<script>alert('Password or username is incorrect, please try again!')</script>";
     exit();
   }  
   if($check_login > 0){ 
   $_SESSION['Userid'] = $row_login['UserID'];
   $_SESSION['Username'] = $row_login['UserName'];
 //  $_SESSION['username'] = $username;  
    echo "<script>alert('You have logged in successfully !')</script>";  
    echo"<script>window.open('index.php','_self')</script>";
  }
  else {
              header("location: index.php");
              $_SESSION['Username'] = $username;
              $_SESSION['Userid'] = $user->UserID;
              }
}
?>	
<?php
              if(isset($_POST['login'])){ 
                if ($check_login == 0){
                  echo "<span style='color: red; font-size:18px; padding-bottom: 20px;'>Password or Username is incorrect, please try again !</span>";
                }
              }
              ?>            
              

</body>
</html>