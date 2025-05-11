<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mars Tech signup form</title>
  <link rel="stylesheet" href="./style.css">
  <!-- Font Awesome for eye icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    .password-container {
      position: relative;
    }
    .toggle-password {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #fff;
    }
  </style>
</head>
<body>

<!-- partial:index.partial.html -->
<div class="main-w3layouts wrapper">
  <h1>Mars Tech SignUp Form</h1>
  <div class="main-agileinfo">
    <div class="agileits-top">
      <form action="registration.php" method="post" enctype="multipart/form-data">
        <input class="text" type="text" name="Username" placeholder="Username" required="">
        <input class="text email" type="email" name="email" placeholder="Email" required="">
        <div class="password-container">
          <input class="text" type="password" name="password" id="password" placeholder="Password" required="">
          <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
        </div>
        <input class="text w3lpass" type="text" name="mobileNumber" placeholder="Phone Number" required="">
        
        <input type="submit" name="submit" value="SIGNUP">
      </form>
      <p>if you have an Account? <a href="login.php"> Login Now!</a></p>
    </div>
  </div>
  <!-- copyright -->
  
  <!-- //copyright -->
  <ul class="colorlib-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>

<script>
  function togglePassword() {
    const password = document.getElementById('password');
    const icon = document.querySelector('.toggle-password');
    
    if (password.type === 'password') {
      password.type = 'text';
      icon.classList.remove('fa-eye');
      icon.classList.add('fa-eye-slash');
    } else {
      password.type = 'password';
      icon.classList.remove('fa-eye-slash');
      icon.classList.add('fa-eye');
    }
  }
</script>
</body>
</html>