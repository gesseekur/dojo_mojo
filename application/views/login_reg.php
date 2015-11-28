<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login/Registration</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
     <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
     <style>
     body{
       background: url("http://www.denveraikikai.com/wp-content/uploads/2013/05/dojo6.jpg") no-repeat center center fixed;
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
     }
     .container {

    text-align: center;
    margin: auto;
    padding-top: 100px;
}
  #register{
    text-align: center;
    padding-left: 300px;
  }

     </style>
  </head>
  <body>
      <div class="container">
        <div class="row">
          <form class="form-horizontal" role="form">
                <h3>Welcome to Dojo Mojo! Please Register Below</h3>
                <div class="form-group" id="register">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder=" Full Name">
                    </div>
                </div>
                <div class="form-group" id="register">
                    <label for="alias" class="col-sm-3 control-label">Alias</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="alias" name="alias" placeholder="Password">
                    </div>
                </div>
                <div class="form-group" id="register">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div>
                </div>
                <div class="form-group" id="register">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-3">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group" id="register">
                    <label for="confirm_password" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-3">
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group" id="register">
                    <label for="date_of_birth" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-3">
                        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control">
                    </div>
                </div>
                <div class="form-group" id="register">
                    <div class="col-sm-3 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
          </div>
    </div> <!-- container div -->
  </body>
</html>
