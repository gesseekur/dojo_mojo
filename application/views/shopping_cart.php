<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="25">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href = "assets/css/shopping_cart.css">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
        </script>
    </head>
<body>
    <div class = "container">    
    <div class="page-header">
        <h2>dojo_Mojo</h2>
        <a id = "store_link" href="">Back to dojo_Mojo Store</a>
<!--         <button type="button" class="shopping_cart btn-lg" href = " " aria-label="Shopping Cart">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        </button> -->
        <form id = "logout" action = "/user/logout" method = "POST">
            <input type = "submit" value = "Logout">
        </form>
    </div>
	<div id="top">
	<form method="post" action="">
		<input id="search" type="text" value="search" name="search">
	</form>
	</div>

	<table class = "table table-striped">
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
<!-- 		<tbody>
<?php 
		foreach ($products as $product){
?>
			<tr>
				<td>IMAGE</td>
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
		</tbody> -->

	</table>
</body>
</html>