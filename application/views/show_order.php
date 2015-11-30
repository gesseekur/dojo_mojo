<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Order</title>
</head>
<body>
	<?= $this->load->view('partials/nav_bar')?>
	<div class = "container">
<?php 
		foreach ($users as $user)
		{
?>
	<div id="info">
		<p>Order ID: <?= $user['order_id']?></p>
		<!-- <h4>Customer Billing info: </h4>
		Name: <?= $user['user']?><br>
		Address: <?= $user['street']?><br>
		City: <?= $user['city']?><br>
		State: <?= $user['state']?><br>
		Zipcode: <?= $user['zip']?><br> -->
	</div>

		<table "table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Item</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
		</thead>
<?php 
		}
		foreach ($infos as $info)
		{
?>
		<tbody>
			<tr>
				<td><?= $info['product_id']?></td>
				<td><?= $info['item']?></td>
				<td><?= $info['price']?></td>
				<td><?= $info['quantity']?></td>
				<td><?= $info['price'] * $info['quantity']?></td>
			</tr>
		</tbody>
	</table>

	<div id="status">
		<h4>Status: <?= $info['status_name']?></h4>
	</div>

	<div id="total">
		<p>Sub total: <?= $info['price'] * $info['quantity']?></p>
		<p>Shipping: FREE!
		<p>Total Price: <?= $info['price'] * $info['quantity']?></p>
	</div>
<?php
		}
?>	
</div>
</body>
</html>