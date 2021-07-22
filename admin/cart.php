<html>
<head>
	<title>Tune Music | Singer</title>
	<LINK REL="SHORTCUT ICON"  HREF="../image/ADT.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylecart.css">
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

<body>
	<?php 
	session_start();
	 ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <img src="../image/icon.png" style="height: 20px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
	  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="../index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Song
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="../admin/addsong.php">Add</a>
                      <a class="dropdown-item" href="../admin/editsong.php">Edit</a>
                  </div>
                  <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Login
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="../login2.php">Login</a>
                      <a class="dropdown-item" href="../resgister1.php">Resgister</a>
                      
                  </div>
              </li>
                  
              </li>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="" id="navbarDropdown">
                      Song details
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="../admin/listsong.php">List</a>
                      <a class="dropdown-item" href="./admin/details.php"></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
          </ul>

          
          <form class="form-inline my-2 my-lg-0" action="./admin/search.php" method="GET">
<input class="form-control mr-sm-2" type="search" placeholder="Search for song" style="width: 400px" name="Search">
<input type="submit"name="search" value="Search" style="height: 37px " />
</form>
          
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="http://stc.m.nixcdn.com/touch_v2/images/top100/2020/top-100-nhac-tre-2020.jpg" width="1550" height="450" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://photo-zmp3.zadn.vn/covers/3/1/310b98ade43043a069c3d3e9ee0c5766_1515485837.jpg" width="1550" height="450" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" class="d-block w-100" src="https://avatar-ex-swe.nixcdn.com/topic/share/2020/09/16/0/5/d/a/1600239102934.jpg" width="1550" height="450" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
  <div class="row mt-5">
    <h2 class="list-product-title">New song</h2>
    <div class="list-product-subtitle">
      <p>New songs</p>
    </div>
    
  
<?php 

$connect = mysqli_connect('localhost','root','','php');
if(isset($_GET['id'])){
if ($_SERVER['REQUEST_METHOD']=='GET') {
  $id =$_GET['id'];
  if (empty($_SESSION['cart'][$id])) {
    $q=mysqli_query($connect,"SELECT * FROM song WHERE ProductID = {$id}");
    $product = mysqli_fetch_assoc($q);
    $_SESSION['cart'][$id]=$product;
  $_SESSION['cart'][$id]['sl']=$_GET['sl'];
  echo"<script>window.open('cart.php','_self')</script>";

  }
  }
 }
 ?>
 <div class="container-fluid">
 <div class="row">
  <link rel="stylesheet" type="text/css" href="cart.css">
  <h3 class="giohang"><i class="fas fa-shopping-cart"></i> Cart</h3>
  <br>
  <br>
  <?php 
  if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) :
    ?>
    <div class="products" style="border: 2px solid black">
    <a href="single.php?id=<?php echo $item['ProductID']?>" style="text-decoration: none;">
    <div><img style="width: 310px" src="../image/<?php echo $item['Image']?>" class="img-cart"></div>
    <h2><?php echo $item['ProductName'] ?></h2>
        <p style="color: red">Price: <?php echo $item['Price']." $ "; ?></p>
        <?php
    echo "<a href='delcart.php?productid=$item[ProductID]' style='text-decoration: none;'>Delete</a>";
    ?>
         </a>
         </div>
           <?php
  endforeach;
  }
  else 
    echo "There are no products in the product";
  ?>
  <br>
   <a href="delcart.php?productid=0" style="text-decoration: none; color: white"><button type="button" class="btn btn-danger">Delete All</button></a>
  <div id="total" class="clearfix">

    <?php
    $tong = 0;
    if (!empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $item ) :
        $tong += $item['sl'] * $item['Price'];
      endforeach;
    }
    ?>
  
  </div>  
  <div class="container" style="border-top:3px solid #38D276;margin-top: 20px">
  <div class="col-md-6" style="border: 1px solid #38D276">
<h3 style="text-align: center;">Payment</h3>
  <form method="post" action="../index.php" class="was-validated">
    <div class="form-group">
      <label for="usr">UserName:</label>
      <input type="text" class="form-control" id="user" name="name" value="<?php echo $_SESSION['Username'];  ?>" readonly>
    </div>
    <label for="bank">Select payment bank</label>
  <select class="custom-select" required id="bank" name="bank">
    <option selected></option>
    <option value="Vietcombank">Vietcombank</option>
    <option value="Techcombank">Techcombank</option>
    <option value="Airpay">Airpay</option>
    <option value="momo">momo</option>
  </select>
<div class="form-group">
  <div class="form-group">
  <label for="usr">Order date:</label>
  <input type="text" class="form-control" id="usr" name="date" value="<?php
  date_default_timezone_set('Asia/Ho_Chi_Minh');
echo "". date("Y.m.d h:i:sa");
?>" readonly>
</div>
<div class="form-group">
  <label for="usr">Total</label>
  <input type="text" class="form-control" id="usr" value=" <?php echo number_format($tong) ." $" ?>" readonly name="total">
</div>
<input type="submit" class="btn btn-success" value="Pay">

  </form>
  </div>
 </div>
 </div>
 </div>

<script src="WebsiteLayout/jquery-3.3.1.min.js"></script>
<script src="WebsiteLayout/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>