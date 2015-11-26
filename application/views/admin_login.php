<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome Back Sensei</title>
	      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
      <link rel="stylesheet" type="text/css" href="shoez_styles.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="shortcut icon" href="favicon.ico">
      <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-114x114-precomposed.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <link rel="stylesheet" href="/css/bootstrap.min-1.3.css">
      <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700|Bitter:400,400italic" rel="stylesheet" type="text/css">
</head>
<body>
<?php  echo $this->session->flashdata('error');
?>
    <div class="col-md-6">
        <h1>Admin Login</h1>
        <form method="post" action="/admins/validate_admin">
	        <div class="form-group">
	            <label for="email">Email address:</label>
	            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
	        </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <input type="submit" class="btn btn-info" value="Sign In">
        </form>
	</div>
    </body>
</html>