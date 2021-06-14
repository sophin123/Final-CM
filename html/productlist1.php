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
</style>
<div id='productlist' style="width:80%;padding:15px 15px 15px 15px;">
	<form action='index.php' method="post">
		<table border:2px>
		<?php

			$products=get_products();
			$dollar = "$";

			foreach($products as $id=>$product){
				$id=$product['ID'];
				$name=$product['Productname'];
				$image=$product['Image'];
				$description=$product['Description'];
				$price=$product['Price'];
				$catid=$product['catid'];
				if($catid==2){
				print("<tr>");
				print("\n<td rowspan=4> <img src=$image height=250px width= 350px>");
				print("</tr>");
				print("<tr>");
				print("\n<th> $name </td>");
				print("</tr>");
				print("<tr>");
				print("\n<td> $dollar $price </td>");
				print("</tr>");
				print("<tr>");
				print("\n<td> $description </td>");
				print("</tr>");
				}
			}
		?>

		</table>
	</form>
</div>
