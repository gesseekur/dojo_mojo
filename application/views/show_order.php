<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Order</title>
	<style type="text/css">
		div {
			border:1px solid black;
			display: inline-block;
			padding: 10px;		
		}

		table {
			border:1px solid black;
			margin-top:10px;
			border-collapse:collapse;
		}

		thead {
			background-color: silver;
		}
	</style>

</head>
<body>
	<?= $this->load->view('partials/nav_bar')?>
<?php 
		foreach ($infos as $info)
		{
?>
	<div id="info">
		<p>Order ID: <?= $info['id']?></p>
		<h4>Customer Billing info: </h4>
		Name: <?= $info['user']?><br>
		Address: <?= $info['street']?><br>
		City: <?= $info['city']?><br>
		State: <?= $info['state']?><br>
		Zipcode: <?= $info['zip']?><br>
	</div>

		<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Item</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Total</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $info['id']?></td>
				<td><?= $info['item']?></td>
				<td><?= $info['price']?></td>
				<td><?= $info['quantity']?></td>
				<td><?= $info['price'] * $info['quantity']?></td>
			</tr>
		</tbody>
	</table>

	<div id="status">
		<h4>Status: <?= $info['status']?></h4>
	</div>

	<div id="total">
		<p>Sub total: <?= $info['price'] * $info['quantity']?></p>
		<p>Shipping: FREE!
		<p>Total Price: <?= $info['price'] * $info['quantity']?></p>
	</div>
<?php
		}
?>	
</body>
</html>