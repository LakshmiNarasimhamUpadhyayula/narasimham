<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online grocery</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form" action="<?php echo base_url(); ?>index.php/Welcome/insert" method="POST">
      <input type="text" name= "firstname" placeholder="First name"/>
      <input type="text" name="middlename" placeholder=" Middle name"/>
      <input type="text" name= "lastname" placeholder="Last name"/>
      <input type="text" name="username" placeholder="Username"/>
      <input type="email" name="emailid" placeholder="Email id"/>
      <input type="text" name="mobilenumber" placeholder="Mobile number"/>
      <input type="text" name="housenumber" placeholder="Housenumber"/>
      <input type="text" name="street1" placeholder="Street 1"/>
      <input type="text" name="street2" placeholder="Street 2"/>
      <input type="text" name="city_town" placeholder="City/Towm"/>
      <input type="text" name="state" placeholder="State"/>
      <input type="text" name="pincode" placeholder="Pincode"/>
      <input type="password" name="password" placeholder="password"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="<?php echo base_url(); ?>index.php/Welcome/logincheck" method="POST">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
      <br>
      <p style="color: red;">Invalid Credentials</p>
      <p class="message">Not registered?<a> Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>