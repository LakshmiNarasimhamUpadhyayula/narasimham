<!DOCTYPE html>
<html lang="en">
<head>
	<title>Income class classification</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/" class="logo" alt="LOGO" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#about">Contact</a></li>
						<li><a href="#">Howdy! <?php echo $username;?></a></li>
					</ul>
				</nav>
			</div>
		</header><!--  end header section  -->


			<section class="caption">
				<form action="/action_page.php" style="align-content: center;">
  <select name="income">
    <option value="volvo"> <50000 </option>
    <option value="saab"> >50000 </option>
    <option value="fiat">>100000</option>
    <option value="audi"> >200000</option>
  </select>
  <select name="family members">
    <option value="volvo">5 or morethan</option>
    <option value="saab">4</option>
    <option value="fiat">3</option>
    <option value="audi">2</option>
  </select>
  <select name="area">
    <option value="volvo">hyderabad</option>
    <option value="saab">delhi</option>
    <option value="fiat">banglore</option>
    <option value="audi">jaipur</option>
  </select>
  <select name="profession">
    <option value="volvo">Govt</option>
    <option value="saab">private</option>
    <option value="fiat">Business</option>
  </select>
  <br></br>
  <input type="submit">
</form>
			</section>
	</section><!--  end hero section  -->


	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3524.0135775300187!2d76.4009994144599!3d27.96287042082422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db6d381bd8a09%3A0x5cd01de55b1d2c65!2sNIIT+University!5e0!3m2!1sen!2sin!4v1511802417222" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#" name="about">About:</a></li>
						<li><a>We are students at NIIT UNIVERSITY studying B.Tech 2nd year.This is our project. We hope that everything will go well and good.</a></li>
						<li><a href="#">Download our app</a></li>
						<li><a href="#">App tore</a></li>
						<li><a href="#">Play store</a></li>
					</ul>
				</li>


				<li class="about">
					<p>Get social with us</p>
					<ul>
						<li><a href="#" class="facebook" target="_blank"></a></li>
						<li><a href="#" class="twitter" target="_blank"></a></li>
						<li><a href="#" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			CAPSTONE PROJECT
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>