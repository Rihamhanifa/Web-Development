<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Responsive Login Form</title>
 <link rel="stylesheet" href="./login_style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form">
    <form action="login_process.php" method="post" enctype="multipart/form-data">
      <h3>Username:</h3>
      <input type="text"  name="name" placeholder="Username"/><br>
      <h3>Password:</h3>
      <input type="password" name="password" placeholder="Password"/>
      <br>
      <input type="submit" name="submit" value="Login" class="login-button"/>
    </form>
    <br>
    <a class="sign-up" >
    <a href="signup.php">
    Sign Up!</a>
    <br>
  </div>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="./script.js"></script>

</body>
</html>
