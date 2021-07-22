<!DOCTYPE html>
<html>
<head>
	<title>Shopmusic</title>
<link rel="stylesheet" href="Style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

</style>

<body>
	<?php 
 session_start();
 ?>
	<!-- menu -->

    <?php 
 
$connect = mysqli_connect('localhost','root','','php');	
 ?>
 <h3 style="text-align: center;">Congratulations on your payment and you can now download it</h3>
 <?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
  $total=$_POST['total'];
  $date=$_POST['date'];
  $usn=$_POST['name'];
  $bank=$_POST['bank'];
  $sql="INSERT INTO orders(Total,OderDate,UsernameC,Bank) VALUES ('$total','$date','$usn','$bank')";
if(mysqli_query($conn,$sql)){
  echo "thanh toan thanh cong";
}
else{
  echo "Error: ".mysqli_errno($conn);
}
}
 ?>
 <?php
 if ($_SERVER['REQUEST_METHOD']=='POST') {
  $id =$_POST['OrderID'];
  if (empty($_SESSION['cart'][$id])) {
    $q=mysqli_query($conn,"SELECT * FROM song WHERE producid = {$id}");
    $product = mysqli_fetch_assoc($q);
      header("location:thanhtoan.php");
  }
 }
 ?>
 <div class="container-fluid">
 <div class="row">
  <link rel="stylesheet" type="text/css" href="cart.css">
  <?php 
  if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) :
    ?>
    <div class="products" style="border: 2px solid black">
    <a href="single.php?id=<?php echo $item['ProducID']?>" style="text-decoration: none;">
    <div><img src="../image/<?php echo $item['Image']?>" class="img-cart"></div>
    <h2><?php echo $item['ProductName'] ?></h2>
        
          
         </a>
         <br>
         <h4>Click on icon <i class="fas fa-ellipsis-v"></i> to download</h4>
         <h4><a class="nav-link" href="../index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a></h4>
              
         </div>
           <?php
  endforeach;
  }
     ?>
  </div>  
 <?php
 ?>

</body>
</html>