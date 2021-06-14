<style>
	td, th{
		padding:25px;
		text-align: left;
		

	}
	
	table{
    
  
    font-size: 1.5em;
    font-family: sans-serif;
   min-width: 200px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	}
	table tr:nth-child(even) {
  background-color: #eee;
}
table tr:nth-child(odd) {
 background-color: #fff;
}
table th {
  background-color: black;
  color: white;
}
input[type=submit]{
  background-color: #ff3300; /* Red */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
input[type=button]{
  background-color: #666699; /* edit */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
input[type=button]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<div id='productlist' style="width:80%;padding:15px 15px 15px 15px;">
	<form action='delete.php' method="post">
		<table border:2px>
		<?php

			$products=get_products();
			$dollar = "$";
            $edit= "Edit";
            $delete="Delete";
            
        
			foreach($products as $id=>$product){
				$id=$product['ID'];
				$name=$product['Productname'];
				$image=$product['Image'];
				$description=$product['Description'];
				$price=$product['Price'];
        $catid=$product['catid'];


  

      //  $newId[] =$id;
      
      //  print_r($newId);
        
if($catid==3){
				print("<tr>");
				print("\n<td rowspan=5> <img src=$image height=250px width= 350px>");
				print("</tr>");
				print("<tr>");
				print("\n<th colspan=2> $name </td>");
				print("</tr>");
				print("<tr>");
				print("\n<td colspan=2> $dollar $price </td>");
				print("</tr>");
				print("<tr>");
				print("\n<td colspan=2> $description </td>");
				print("</tr>");
        print("<tr>");
				print("\n<td> <input type='button' name='btnedit' value=$edit> </td>");
        print("\n<td> <a href=><input type='submit' name='submit' value=$delete></a> </td>");
				print("</tr>");
}
			}
        
		?>

		</table>
	</form>
</div>