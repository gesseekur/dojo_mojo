<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Product</title>
</head>
<body>
	<h2>Add Product- ID #</h2>
	<form method="post" action="/admins/add_product_to_db">
		<p>Name:<input type="text" name="name"></p>
		<p>Description:<input type="text" name="description"></p>
		<p>Price:<input type="text" name="price"></p>
		<p>Specifications:<input type="text" name="specifications"></p>
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
		<p>Images <input type="text" name="image_name"></p>
		<a href="/dashboard/products">Cancel</a>
		<input type="submit" value="Preview" name="preview">
		<input type="submit" value="Add" name="update">
	</form>
</body>
</html>