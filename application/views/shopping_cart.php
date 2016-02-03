<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href = "assets/css/shopping_cart.css">
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
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
        <button type="button" class="shopping_cart btn-lg" href = "#" aria-label="Shopping Cart">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            <span class= "badge">7</span>
        </button>
        <form id = "logout" action = "/users/logout" method = "POST">
            <input type = "submit" value = "Logout">
        </form>
    </div>
	<div id="top">
	<form method="post" action="/products/search">
		<input id="search" type="text" placeholder="Search" name="search">
	</form>
	</div>

<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="refresh" content="25"> -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href = "assets/css/shopping_cart.css">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
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
				<button type="button" class="shopping_cart btn-lg" href = "" aria-label="Shopping Cart">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
					<span class= "badge"><?= $total_items ?></span>
				</button>
				<form id = "logout" action = "/users/logout" method = "POST">
					<input type = "submit" value = "Logout">
				</form>
			</div>
			<div id="top">
				<form method="post" action="/products/search">
					<input id="search" type="text" placeholder="Search" name="search">
				</form>
			</div>

			<table class = "table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($products as $product){
						?>
						<tr>
							<td><?=$product['name']?></td>
							<td>$ <?=$product['price']?></td>
							<td><?=$product['qty']?><a href="/products/show/<?=$product['id']?>"> edit</a>
								<a href="/orders/remove_from_cart/<?=$product['rowid']?>"> delete</a>
							</td>	
							<td>$ <?=$product['subtotal']?></td>
						</tr>
						<?php
					}
					?> 
					<td>$ <?=$total?> Grand Total</td>
				</tbody>

			</table>
			<div id="stripe">
				<h2><?= $this->session->flashdata("errors") ?>
				<?= $this->session->flashdata("success") ?></h2>
				<form action="/orders/stripe_pay" method="post">
					<script
					src="https://checkout.stripe.com/checkout.js" class="stripe-button"
					data-key="pk_test_qUFrcMAtaUuox560lPVGhqdk"
					data-name="dojo_Mojo"
					data-description="item payment"
					data-amount="<?=$total*100?>"
					data-locale="auto">
					</script>
				</form>
			</div>
			<a id = "store_link" href="/users/homepage">Continue Shopping</a>

		</body>
		</html>