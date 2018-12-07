<?php
include 'include/register.php';
?>
<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/FinalProject/styles/registration.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Admin</title>
</head>
<!-- TODO: Form Validation, server and client side -->
<body>
<div class="container">
  <div class="row main">
    <div class="panel-heading">
      <div class="panel-title text-center">
        <h1 class="title">Beer, Code, and Coffee</h1>
        <hr />
      </div>
    </div> 

    <div class="main-login main-center">
      <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- name -->
        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
        <label for="name" class="cols-sm-2 control-label">Your Name</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" placeholder="Enter your Name" required/>
            </div>
          </div>
        </div>

        <!-- user name -->
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
          <label for="username" class="cols-sm-2 control-label">Username</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-sunglasses"></span></span>
              <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" placeholder="Enter your Username" required/>
            </div>
          </div>
        </div>

        <!-- password -->
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
          <label for="password" class="cols-sm-2 control-label">Password</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>" placeholder="Enter your Password" required/>
              </div>
          </div>
        </div>

        <!-- password confirm -->
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" class="form-control" name="confirm" id="confirm" value="<?php echo $confirm_password; ?>" placeholder="Confirm your Password" required/>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
        </div>
        <div class="login-register">
          <a href="index.php">CANCEL</a>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>