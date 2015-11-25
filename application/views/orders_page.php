<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Orders</title>
	<style type="text/css">
		table {
			border:1px solid black;
			margin-top:10px;
		}

		thead {
			background-color: silver;
		}

		#search {
			border-radius:4px;
			margin-top: 10px;
		}

	</style>
</head>
<body>
	<?= $this->load->view('partials/nav_bar')?>
	<form method="post" action="/admins/view_orders">
		<input id="search" type="text" value="search" name="search">
		<select name="status">
			<option value=>Show All</option>
			<option>Order in Process</option>
			<option>Shipped</option>
			<option>Cancelled</option>
		</select>
	</form>
	<table>
		<thead>
			<tr>
				<td>Order ID</td>
				<td>Name</td>
				<td>Date</td>
				<td>Billing Address</td>
				<td>Total</td>
				<td>Status</td>
			</tr>
		</thead>
		<tbody>
<?php 
		foreach ($orders as $order){
?>
			<tr>
				<td><a href="/orders/show/<?=$order['id']?>"><?= $order['id']?></a></td>
				<td><?=$order['name']?></td>
				<td><?=$order['created_at']?></td>
				<td><?=$order['id']?></td>
				<td><?=$order['id']?></td>
				<td>
		<form method="post" action="/admins/edit_category">
				<select name="status">
					<option><?=$order['status']?></option>
					<option>Order in Process</option>
					<option>Cancelled</option>
				</select>
		</form>
				</td>
			</tr>
<?php
		}
?>
		
		</tbody>

	</table>
</body>
</html>