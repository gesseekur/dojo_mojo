<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	   <title>Admin Login</title>
	   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/admin_login.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="shortcut icon" href="favicon.ico">
      <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-114x114-precomposed.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <link rel="stylesheet" href="/css/bootstrap.min-1.3.css">
      <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php  echo $this->session->flashdata('error');
?>
<div class = "container">   
    <div class = "row">
    <div class = "col-md-4"></div>  
    <div class="col-md-4 ">
        <h1>Welcome Back Sensei!</h1>
        <form method="post" action="/admins/validate_admin">
	        <div class="form-group">
	            <label for="email">Email address:</label>
	            <input type="email" class="form-control" id="email" name="email">
	        </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <input type = "submit" value = "Login">
        </form>
    </div>
    <div class = "col-md-4"></div>
    </div>
</div>
</div>   
</body>
</html>