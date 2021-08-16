<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'application');

// REGISTER USER
if (isset($_POST['sign_up'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location:application form.php');
  }
}
?>
<html>
<head><title>Login Form</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<body>
<section class="login">
  <center><h1 >Login or Register</h1></center>
  <div class="container">
      <div class="container-box">
        <h3 >Create profile</h3>
        <p>
           Creating a web profile is quick and easy.
          You’ll gain access to manage your profile and preferences, 
          view brochures, book events, bookmark content, comment on articles, 
          and make an application. To fill out the short form,
          click on “Create profile” below.
        </p>
</div>
<div class="container-box">
  <h3 >Already registered? Please log in.</h3>

    <form method="POST" action="create.php" class="form" >
    
        <input type="text" name="email" placeholder="Email">

      <input type="password" name="password" placeholder="Password" id="password" value="" class="form-control">
      <div class="input-field">
      
      <button type="submit" class="btn" name="login" >login </button>

  <p> not yet a member?  <button><a href="create.php">sign up</a></button>
   click here to apply  <button> <a href="application form.php">apply now </a></button></p>

  
      

    </div>
    <a href="forgot password.html">forgot password</a>
   

    </form>

  
</div>
</div>
</section>
</body>
</html>