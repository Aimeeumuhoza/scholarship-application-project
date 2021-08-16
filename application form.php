<?php

include 'db_connect.php';
error_reporting(0);
if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $telnum= $_POST['telnum'];
    $nationality= $_POST['nationality'];
    $grade= $_POST['grade'];
    $program= $_POST['program'];
    $college= $_POST['college'];

          $sql = "INSERT INTO form(firstname,lastname,age,gender,telnum,nationality,grade,program,college)VALUES('',\"$firstname\",\"$lastname\",\"$age\",\"$gender\",\"$telnum\",\"$nationality\",\"$grade\",\"$program\",\"$college\")";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('successfully registered')</script>";
        }else{
            echo 'failed to register' . mysqli_error($conn);  
        }
      }
      ?>
<html>
<head>
<title>registration form</title>
</head>
<body bgcolor="grey">


<center ><form action="indexx.php" method="POST">
<h2> fill the following form </h2>
<label>firstname</label>
<input type="text" size="20px"><br><br><br>
<label>lastname</label>
<input type="text"><br><br><br>
<label>age</label>
<input type="number"><br><br>
<h3>select your gender:</h3>
<input type="radio" name="gender" value="male">male<br>
<input type="radio" name="gender" value="female">female<br>
<label>email</label> 
<input type="email" name="email" required><br><br>
<label>telephone numbers</label>
<input type="number"><br><Br>
<label>location</label>
<input type="text"><br><br>
<label> <h3>grades</h3> </label><br>
<input type="checkbox">A
<input type="checkbox">B<br><br>
<input type="checkbox">C
<input type="checkbox">D<br><br>
<label>DEGREE :</label>
            <select name="slct1" id="slct1" onchange="populate('slct1','slct2')">
                <option value=""></option>
                <option value="bachelor">bachelor</option>
                <option value="master's">master's</option>
                 <option value="doctorate">doctorate</option>
                <option value="proffessor">proffessor</option>
				
            </select>
            <label>PROGRAM:</label>
            <select name="slct2" id="slct2" onchange="populate1(this.id,'slct3')"></select>
			<label>COLLEGE:</label>
            <select name="slct3" id="slct3" ></select>
	      
               <script >
                   function populate(s1,s2){
          var s1= document.getElementById(s1);
          var s2=document.getElementById(s2);
          s2.innerHTML="";
          
          if(s1.value=="bachelor"){
              var optionArray = ["|","BUSINESS|BUSINESS","AGRICULTURE|AGRICULTURE","TECHNOLOGY|TECHNOLOGY"];
          }
          else if(s1.value=="master's"){
              var optionArray = ["|","TECHNOLOGY|TECHNOLOGY","LAW|LAW","POLITICAL SCIENCE|POLITICAL SCIENCE"];
          }
          else if(s1.value=="doctorate"){
              var optionArray = ["|","MEDICAL SCIENCE|MEDICAL SCIENCE","MENTAL HEALTH|MENTAL HEALTH"];
          }
          else if(s1.value=="proffessor"){
              var optionArray = ["|","LAW|LAW","POLITICAL SCIENCE|POLITICAL SCIENCE"];
          }
		  
          for(var option in optionArray){
              var pair= optionArray[option].split("|");
              var newOption=document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s2.options.add( newOption);
          }
          }
		        function populate1(s3,s4){
          var s3= document.getElementById(s3);
          var s4=document.getElementById(s4);
          s4.innerHTML="";
          
          if(s3.value=="BUSINESS"){
		  
              var optionArray = ["|","trent|trent", "st_Andrew|st_Andrew", "london business school|london business school"];
          }
          else if(s3.value=="AGRICULTURE"){
              var optionArray = ["|","harvard|harvard", "pursue|pursue", "massachusette|massachusette"];
          }
          else if(s3.value=="TECHNOLOGY"){
            var optionArray = ["|","marian|marian", "lake|lake", "atlantic|atlantic"];
         }
		 else if(s3.value=="LAW"){
            var optionArray = ["|","massachusette|massachusette", "atlantic|atlantic"];
          }
		  else if(s3.value=="POLITICAL SCIENCE"){
            var optionArray = ["|","ELK|ELK", "massachusette|massachusette"];
                }
		  else if(s3.value=="MEDICAL SCIENCE"){
            var optionArray = ["|","harvard|harvard"];
          }
		  else if(s3.value=="MENTAL HEALTH"){
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "gitega|Gitega", "mageragere|Mageragere", "nyakabanda|Nyakabanda", "rwezamenyo|Rwezamenyo"];
          }
		  else if(s3.value=="LAW"){
            var optionArray = ["|","gisozi|Gisozi", "kinyinya|Kinyinya", "kacyiru|Kacyiru","remera|Remera","bumbogo|Bumbogo","gatsata|Gatsata","jali|Jali","gikomero|Gikomero","jabana|Jabana","ndera|Ndera","nduba|Nduba","rusororo|Rusororo","rutunga|Rutunga","kimihurura|Kimihurura","kimironko|Kimironko"];
          }
		  else if(s3.value=="POLITICAL SCIENCE"){
            var optionArray = ["|","kanombe|Kanombe", "gahanga|Gahanga", "kicukiro|Kicukiro", "niboyi|Niboyi","kagarama|Kagarama","gatenga|Gatenga","gikondo|Gikondo","nyarugunga|Nyarugunga","kigarama|Kigarama","masaka|Masaka"];
          }
		  
          for(var option in optionArray){
              var pair= optionArray[option].split("|");
              var newOption=document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s4.options.add(newOption);
			  console.log(s3.value);
          }
          }
          
              </script>
    <br/> <br/>     
 
<input type="submit">
</form></center >


</body>
</html>