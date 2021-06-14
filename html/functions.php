<?php
require_once "dblib.php";

function check_login($conn)
{

	if(isset($_SESSION['username']))
	{

		$user_name = $_SESSION['username'];
		$query = "select * from Adminlogin where username = '$user_name' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: loginasadmin.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) {
		# code...

		$text .= rand(0,9);
	}

	return $text;
}




    function get_products(){
		//open
	   $conn=DB_open_connection();

	   $sql = "SELECT * FROM Category1";

	   $rows=DB_select($sql,$conn);

	   //close
	   DB_close_connection($conn);

	   return $rows;
	}

	function get_categories(){
		//open
	   $conn=DB_open_connection();

	   $sql = "SELECT * FROM  category";

	   $rows=DB_select($sql,$conn);

	   //close
	   DB_close_connection($conn);

	   return $rows;
	}

	function get_top_selling(){
	    //open
	    $conn=DB_open_connection();

	    $sql = "SELECT * FROM books WHERE id IN (2,4,5)";
	    $rows=DB_select($sql,$conn);

	    DB_close_connection($conn);

		return $rows;
	}


	 function find_product_matching($id){
	    //open
	    $conn=DB_open_connection();

	    $sql = "SELECT * FROM Category1 WHERE id='{$id}'";
	    $rows=DB_select($sql,$conn);

	    DB_close_connection($conn);

	    return $rows[0];
	 }

	 function add_product($name="?",$description="?",$price=0,$image='',$category="?"){

			$sql="INSERT INTO Category1 (`ID`, `Productname`, `Description`, `Price`, `Image`, `catid`)
							   VALUES (NULL,'$name','$description',$price,'$image','$category')";

	        $conn=DB_open_connection();

			$status=DB_insert($conn,$sql);
			if($status===True){
				$status="Product added: $name";
			}
			DB_close_connection($conn);

			return $status;
	 }
	 

	 
?>
