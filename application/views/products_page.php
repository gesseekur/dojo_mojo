<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Products</title>
	<style type="text/css">
		form{
			display: inline;
		}
		#add{
			margin: 2px 0  0 706px;
			background-color: white;
			border: none;
		}
	</style>
</head>
<body>
	<?= $this->load->view('partials/nav_bar')?>
	<div class = "container">
	<form method="post" action="/admins/search_orders">
		<input id="search" type="text" placeholder="Search" name="search">
	</form>
	<form method="post" action="/admins/add_product">
		<input id="add" type="submit" name="submit" value="Add a new product">
	</form>
	<table class = "table table-striped">
		<thead>
			<tr>
				<th>Picture</th>
				<th>ID</th>
				<th>Name</th>
				<th>Inventory Count</th>
				<th>Quantity Sold</th>
				<th>Action</th>
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
</div>	
</body>
</html>