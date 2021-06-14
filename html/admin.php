
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


input[type=add]{
  background-color: green;
  border: none;
  color: white;
  width: 25%;
  padding: 15px 32px;
  position: relative;
  float: right;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  cursor: pointer;
  border-radius: 20px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}


input[type=add]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  opacity:0.7;
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
      <li > <a href="adminmenu.php">Menu</a></li>
      <li><a href="#">About Us</a></li>
			<li><a href="#">Contact</a></li>
      <li class="active"><a href="admin.php">Admin</a></li>
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
    <a href="#C1">Breakfast</a>
    <a href="#C2">Lunch</a>
    <a href="#C3">Salad</a>
    <a href="#C4">Dinner</a>
    <a href="#C5">Drinks</a>
  </div>
</div>
<div>
    <a href="additem.php"><input type="add" value="Add Item"></a>
    </div>
<div class="category1">

    <div class="categheading">
      <h1 id="C1"> Breakfast</h1>
    </div>
    <hr/>
		<?php include "adminproductlist.php"?>
    <div class="categheading">
      <h1 id="C2"> Lunch</h1>
    </div>
    <hr/>
		<?php include "adminproductlist1.php"?>
    <div class="categheading">
      <h1 id="C3"> Salad</h1>
    </div>
    <hr/>
		<?php include "adminproductlist2.php"?>
    <div class="categheading">
      <h1 id="C4"> Dinner</h1>
    </div>
    <hr/>
		<?php include "adminproductlist3.php"?>
    <div class="categheading">
      <h1 id="C5"> Drinks</h1>
    </div>
    <hr/>
		<?php include "adminproductlist4.php"?>

</div>

</body>
</html>
