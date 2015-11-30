<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Product</title>
</head>
<body>
	<h2>Edit Product - ID <?= $id?> </h2>
	<form method="post" action="/admins/update_product_to_db/<?=$id?>">
		<p>Name:<input type="text" value="<?= $product['name']?>" name="name"></p>
		<p>Description:<input type="text" value="<?= $product['description']?>" name="description"></p>
		<p>Price:<input type="text" value="<?= $product['price']?>" name="price"></p>
		<p>Specifications:<input type="text" value="<?= $product['specifications']?>" name="specifications"></p>
		<p>Categories:
				<select name="category">
<?  		foreach ($category as $category) {
?>		

			<option value="<?=$category['category_id']?>"><?=$category['name']?></option>
<?
			}
?>
			</select>
		</p>
		<p>or add new category:<input type="text" name="new_category"></p>
		<p>Quantity <input type="text" value="<?= $product['quantity']?>" name="quantity"></p>
		<p>Quantity sold:<input type="text" value="<?= $product['quantity_sold']?>" name="quantity_sold"></p>
		<a href="/dashboard/products"> Cancel </a>
		<img height="40" width="40" src="/assets/<?=$product['category_name']?>_icons/solid/<?=$product['image_name']?>.png">
		<br><br>
		<input type="submit" value="Update" name="update">
	</form>
<?php
		echo form_open_multipart('admins/upload_image');
?>
		<p>Images</p>
		<p> <input name="userfile" id="userfile" type="file"  value="<?= $product['image_name']?>"  ></p>
		<!-- <p> Solid:<input type="file"  value="<?= $product['image_name']?>" name="image_name" ></p>
		<p> Transparent:<input type="file"  value="<?= $product['image_name']?>" name="image_name" ></p> -->
		<input type="hidden" value="<?=$id?>" name="product_id">
		<p> <input type="submit" value="Preview" name="preview"></p>
		
<?php echo form_close();
?>
	
</body>
</html>


