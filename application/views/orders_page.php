<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Orders</title>
    <meta http-equiv="refresh" content="25">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href = "assets/css/orders_page.css">
    <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
    </script>
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