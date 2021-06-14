<?php

include "dblib.php"; 

$conn= DB_open_connection();

if(isset($_POST['submit'])){
    $id=isset($_POST['ID'])?$_POST['ID']:"ID"; 
}else{
    $id = "ID not set in POST Method";
}




echo "Id Is msissing : $id";
$sql="Delete from Category1 where ID=$id";
 

$del = mysqli_query($conn,$sql); // delete query

if($del)
{
    DB_close_connection($conn);
    header("location:admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
