<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>User Login</title>
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
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <h1>Register</h1>
                    <form action="users/register" method="POST">
                      <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder=" Full Name">
                      </div>
                      <div class="form-group">
                        <label for="alias">Alias:</label>
                        <input type="text" class="form-control" id="alias" name="alias" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="date_of_birth">Date of Birth:</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                      </div>
                      <input type="submit" class="btn btn-info" value="Register">
                    </form>
                  </div>
                  <div class="col-md-6">
                    <h1>Sign In</h1>
                    <form action="users/login" method="POST">
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
                </div>
​
              </div>
            </div>
          </div>
    </body>
  </head>
</html>