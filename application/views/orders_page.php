<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard Orders</title>
    <style type="text/css">
    select, input{
		display: inline-block;
	}
	select{
		float: right;
	}
    </style>
</head>
<body>
	<?= $this->load->view('partials/nav_bar')?>
	<div class = "container">
	<form method="post" action="/admins/search_orders">
		<input id="search" type="text" placeholder="Search" name="search">
		<select name="search_orders">
			<option>Show All</option>
			<option>Order in Process</option>
			<option>Shipping</option>
			<option>Cancelled</option>
		</select>
	</form>
	<table class = "table table-striped">
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Name</th>
				<th>Date</th>
				<th>Billing Address</th>
				<th>Total</th>
				<th>Status</th>
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

		<form method="post" action="">
				<select name="status">
					<option><?=$order['status']?></option>
<?php
		foreach ($status as $stat){
			if ($order['status'] == $stat['status']) {
			}
			else {
?>
					<option><?=$stat['status']?></option>
<?php
			}
		}
?>
				</select>
			<input type="submit" value="submit">
		</form>
<?php
		}
?>	
				</td>
			</tr>
	
		</tbody>
	</table>
	</div>
</body>
</html>