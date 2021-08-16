
<?php 

include('db_connect.php');
if(isset($_POST['submit'])){


  $username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
  $confirm=$_POST['confirm'];

	$sql="INSERT INTO user (username,email,password) VALUES('$username','$email','$password')";

	$result=mysqli_query($conn,$sql);

	if(!$result){
				echo "Not done yet".mysqli_error($conn);
			}else{
		    echo "It is registered";
				
			}
			//header('location: home.php');  
	}else{
		echo "Not yet submitting the button";
	}
	
           
?>




<html>

    <head><title>signin Form</title>
    <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
    <section class="signin">
      <center><h1 > Signup</h1></center>
      <div class="container">
          <div class="container-box">
            <h3 >Create profile</h3>
           
    </div>
    <div class="container-box">
     
        <form class="form" action="create.php" method="POST" >
            
            <label>username</label>
            <input type="text" name="username"><br><br><br>
            
            <input type="text" name="email" placeholder="email" id="email" value="" class="form-control required"><br><br>
             <input type="password" name="password" placeholder="Password" id="password" value="" class="form-control required">
           <label for="psw-repeat"><b>confirmation</b></label>
             <input type="password"placeholder="repeat password" name="confirm"required maxlength="20">
            <div class="input-field">
           <button  type="submit" name="submit">Sign-Up</button>
        </div>
        
        </form> 
       
    </div>
    </div>
    </section>
    </body>
    </html>