<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Products</title>
	<style type="text/css">
		table {
			border:1px solid black;
			margin-top:10px;
			text-align: center;
		}

		thead {
			background-color: silver;
		}
	
	</style>
</head>
<body>
	<?= $this->load->view('partials/nav_bar')?>
	<div id="top">
	<form method="post" action="/admins/search_products">
		<input type="text" name="search_products">
		<input type="submit" value="Search" name="search">
	</form>
	<form method="post" action="/admins/add_product">
		<input id="add" type="submit" name="submit" value="Add a new product">
	</form>
	</div>

	<table>
		<thead>
			<tr>
				<td>Picture</td>
				<td>ID</td>
				<td>Name</td>
				<td>Inventory Count</td>
				<td>Quantity sold</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
<?php 
		foreach ($products as $product){
?>
			<tr>
				<td><img height="40" width="40" src="/assets/<?=$product['category_name']?>_icons/solid/<?=$product['image_name']?>.png"></td>
				<td><?=$product['id']?></td>
				<td><?=$product['name']?></td>
				<td><?=$product['quantity']?></td>
				<td><?=$product['quantity_sold']?></td>
				<td>
					<a href="/products/edit_product/<?=$product['id']?>">edit</a>
					<a href="/admins/delete_product/<?=$product['id']?>">delete</a>
				</td>
			</tr>
<?php
		}
?> 
		</tbody>
	</table>
	<a href="">1</a>
	<a href="">2</a>
	<a href="">3</a>
	<a href="">4</a>
	<a href="">5</a>
	<a href="">6</a>
</body>
</html>