<?php 

include('db_connect.php');
if(isset($_POST['submit'])){

	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$messages=$_POST['sms'];

	$sql="INSERT INTO contactus(email,subjects,messages) VALUES('$email','$subject','$messages')";
	$result=mysqli_query($conn,$sql);

	if($result){
           header("location:project.php");
        }else{
            echo 'failed to send' . mysqli_error($conn);  
        }

}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>contact us</title>
</head>
	

<body>

	<center>
	<h1>ONLINE APPLICATION SYSTEM
	</h1></center>
	<p><h2 style="text-align:center"> Contact us</h2></p>


	<center>
   <form action="contacts.php" method="POST">
	<table>
Email:<input type="text" style="margin-left: 30px" name="email"><br><br><br>
	</td></tr>
<tr><td>
Subject:<input type="text" size="20px" style="margin-left: 20px" name="subject"><br><br><br>
		</td></tr>
<tr><td>
	message:<textarea style="margin-left:20px;font-size:18px;" name="sms" placeholder="your message"></textarea><br><br>
		</td></tr>
	<tr><td>
<input type="submit" style="padding: 5px" name="submit">
		</td></tr>
	</table>
<form>
</center>
</body>

</html>
