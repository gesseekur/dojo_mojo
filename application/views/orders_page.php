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
  <!--   <meta http-equiv="refresh" content="25"> -->
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
	<div class="container">
	<form method="post" action="/admins/search_orders">
		<input id="search" type="text" placeholder="Search" name="search_orders">
	</form>
	<form method="post" action="/admins/search_orders">
		<select name="search_orders" onchange="this.form.submit()">
			<option value="shipping">Show All</option>
<?php 		foreach ($status as $stat){
?>
			<option value="order in process"><?= $stat['status_name']?></option>
			<!-- <option value="shipping">Shipping</option>
			<option value="cancelled">Cancelled</option> -->
<?php 		}
?>	
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

		<form method="post" action="/admins/update_status/<?=$order['id']?>">
				<select name="status_id" onchange="this.form.submit()">
					<option><?=$order['status_name']?></option>
<?php
		// var_dump($order['status_name']);

		foreach ($status as $stat){
			if ($order['status_name'] == $stat['status_name'] && $order['status_id'] == $stat['id']) {
			}
			else {
?>
					<option value="<?=$stat['id']?>"><?=$stat['status_name']?></option>
<?php
			}
		}
?>	
				</select>
<?php
		

		}
?>	
				</td>
			</tr>
		</tbody>
		</form>	
	</table>


<?php 
// var_dump($stat['id']);
// die();
?>
	</div>
</body>
</html>