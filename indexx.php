<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://kit.fontawesome.com/1f8adbc732.js" crossorigin="anonymous"></script>
<meta charset="utf-8">
</head>
<body bg="">
	

<div class="header">
	<h3>Welcome to Online Scholarship application system</h3>
  <div class="navbar">
	<a href="#home">home</a>
	<a href="contacts.html">Contacts</a>
	<a href="#about">About</a>
	<a href="#privacy">privacy policy</a>
	<a href="login.html">login</a>
	</div>
</div>
		  
<h1><center>there is latest available scholarships
</center></h1>

</div>
	<img src="../images/succ.jpg" alt="this is image" >
	

<h1><center>how to apply to the listed scholarship</center></h1>
	<div class="center" >
	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
	
	<h4>the listed scholarship above, contain their links
	to those who feel interested , clink on a links'college 
	you want to know much about ,you will find all information you may want.</h4>
	
	<h1>Get advice on finding the right school for you</h1>
		<h3>Compus life</h3>
		<p>See what campus life is really like at thousands of colleges and compare campus rankings.like colleges with the best studentlife,safest college compuses and best college location </p>
		
		<h3>Academic </h3>
		<p>Explore top academic colleges based on admissions selectivity, research expenditures, and professor quality</p>
		<h3>students</h3>
		<p>find a college that matches your preferences and explore student reviews their social life  .</p>
		<img src="../images/pic2.jpg" class="image-student" alt="this is image">
		<h3> focus on goal</h3>
		<p>Ask yourself where you want to be in four or five years. If you can pinpoint a reasonable job and financial outlook, consider which college might best help you reach those goals. </p>
		
		
	
	</div>
	<div class="center" id="privacy">

<h2><center>What this policy cover</center></h2>


<div class="center">
  <p>Your privacy is important to us, and so is being transparent about how we collect, 
    use, and share information about you.This policy also explains your choices surrounding
     how we use information about you, which include how you can object to certain uses of information 
     about you and how you can access and update certain information about you. If you do not agree
      with this policy, do not access or use our Services. 
		 </p>
	<h2><center>How we share information we collect</center></h2>
	<p>We make collaboration tools, and we want them to work well for you.  
    This means sharing information through the Services we provide.  We share information we collect about you
     in the ways discussed above, including in connection with possible scholarship offereds.</p>
</div>
</div>
	<div class="center" id="about">
		<h1><center>about us</center></h1>
		<p><center>Higher education is key to this mobility but, unfortunately,
			millions of students struggle to get into or through school due 
			to financial constraints.
	
	We’re tackling this pervasive issue by working with investors and universities
	to provide an innovative and forward-looking education financing product for students
			from around the world.
	
	We’re not just a student lender – our goal is to set students up for academic,
			professional, and financial successes.
	
	How We Work
	
	Our core company values:
	
	Compassionate and Data-Driven
	
	Committed to Excellence and Inclusion
	
			Bold and Unwavering Integrity</center></p>
			<img src ="../images/pic.jpg" alt="this is image">
		
			
			<h1><center> our team</center></h1>
			<p><h3><center> we are team of 50+ which is growing </center></h3></p>
		
			
	
		</div>
<section class="footer">
	
	<div class="footer-box">
		
		
		<div class="footer-list">
		<ul >
		
		<il>email:kamilemile@gmail.com</il><br>
		<il>tel:+250788566937</il><br>
		<il>P.O.Box 506630</il><br>
		<il>Fax: +971 (0)4 401 9330.</il>
	</ul>
</div>
<div class="footer-list">
	
	<a href="#" class="facebook">facebook</a>
<a href="#" class="twitter">twitter</a>
<a href="#" class="linkedin">LinkedIn</a>
</div>
	</div>
</section>

	
	
		

		

</body>
</html>
