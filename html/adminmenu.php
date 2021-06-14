
<?php
require_once "functions.php";
require_once "htmllib.php";

$msg='';
if(isset($_POST['submit'])){
	$name=isset($_POST['name'])?$_POST['name']:"";
	$description=isset($_POST['description'])?$_POST['description']:"";
	$price=isset($_POST['price'])?$_POST['price']:"";
	$image=isset($_POST['image'])?$_POST['image']:"";
	$category=isset($_POST['category'])?$_POST['category']:"";

	$msg=add_product($name,$description,$price,$image,$category);




}

if(isset($_POST['btndelete'])){
   $ids=isset($_POST['çhkdelete'])?$_POST['çhkdelete']:array();
   if(count($ids)>0){
     $msg=delete_products($ids);
   }else{
     $msg="Product not checked";
   }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
body {
  font-family: Arial;
  margin: 40px ;
}

* {
  box-sizing: border-box;
}



.container {
  position: relative;
  max-width: 500px;
}

.column1 {
 text-align: center;
  width: 100%;
  padding: 5px;
}
.row1::after {
  content: "";
  clear: both;
  display: table;

}
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}
.sidenav {
  width: 20%;
  z-index: 1;
  top: 20px;
  left: 10px;
  background: #eee;
  overflow: hidden;
  padding: 8px 0;
  float:left;
}
.category1{
  position: relative;
  float:right;
  width: 80%;
  Padding: 0px 20px 0px 20px;


}
.categheading{
  margin: 25px;

}
.add {
  float: right;
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: green;
  text-align: center;
  cursor: pointer;
  width: 35%;
  font-size: 18px;
  border-radius: 20px;
}
.add:hover {
  opacity: 0.7;

}
.column{
  position: relative;
  float:left;
  max-width: 33.33%;
  Padding: 10px;
  max-height: 600px;


}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



</style>
<body>
	<div class="row1">
  <div class="column1">
    <img src="logo.png"  width="200px" height="150px" text-align="center" >
  </div>
  <div class="column2">
    <img src="logo2.png"  width="100%" height="150px">
  </div>
	</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Shah Ghouse Restaurant</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="homepageadmin.php">Home</a></li>
      <li class="active"> <a href="adminmenu.php">Menu</a></li>
      <li><a href="#">About Us</a></li>
			<li><a href="#">Contact</a></li>
      <li ><a href="admin.php">Admin</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> ADMIN</a>
				<ul class="dropdown-menu">
					<li><a href="profile.php">Profile</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
    </ul>
  </div>
</nav>
<div class="whole">
  <div class="sidenav">
    <a href="#">Breakfast</a>
    <a href="#">Lunch</a>
    <a href="#">Salad</a>
    <a href="#">Dinner</a>
    <a href="#">Drinks</a>
  </div>
  <div class="category1">
    <div class="categheading">
   <h1> Breakfast</h1>
    </div>
    <hr/>
		<?php include "productlist.php"?>
    <div class="categheading">
      <h1> Lunch</h1>
    </div>
    <hr/>
		<?php include "productlist1.php"?>
    <div class="categheading">
      <h1> Salad</h1>
    </div>
    <hr/>
		<?php include "productlist2.php"?>
    <div class="categheading">
      <h1> Dinner</h1>
    </div>
    <hr/>
		<?php include "productlist3.php"?>
    <div class="categheading">
      <h1> Drinks</h1>
    </div>
    <hr/>
		<?php include "productlist4.php"?>
    </div>
 </div>
</div>

</html>
