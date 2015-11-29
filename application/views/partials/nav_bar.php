<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function(){
    </script>
	<style type="text/css">
		a{
			color:#CCA300;
			margin-right: 20px;
		}
		#logout{
			float: right;
		}
		a, p, input, #logout{
			font-family: 'Varela Round', serif;
		    font-size: 20px;
		    color: #CCA300;
				}
		h1, h2, h3{
			font-family: 'Inconsolata', serif;
		    color: blue;
		}
	</style>
</head>
<body>
	<div class = "container">    
    <div class="page-header">
        <h2>dojo_Mojo</h2>
        <a href="">Dashboard</a>
		<a href="/dashboard/orders">Orders</a>
		<a href="/dashboard/products">Products</a>
        <form id = "logout" action = "/admins/logout" method = "POST">
            <input type = "submit" value = "Logout">
        </form>
    </div>
	</div>
</body>
</html>

