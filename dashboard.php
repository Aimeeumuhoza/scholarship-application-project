<?php 
    include('db_connect.php');
 
	// write query 
	$sql = 'SELECT * FROM register ORDER BY created_at';
 
	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$registers = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);
?>
	<!DOCTYPE html >
	<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
	<html lang="en" dir="ltr">
	  <head>
		<meta charset="UTF-8">
		<title> Responsiive Admin Dashboard | Admin dashboard </title>
		<link rel="stylesheet" href="dash.css">
		<!-- Boxicons CDN Link -->
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   </head>
	<body>
	  <div class="sidebar">
		<div class="logo-details">
		  <i class='bx bxl-c-plus-plus'></i>
		  <span class="logo_name">CodingLab</span>
		</div>
		  <ul class="nav-links">
			<li>
			  <a href="#" class="active">
				<i class='bx bx-grid-alt' ></i>
				<span class="links_name">Dashboard</span>
			  </a>
			</li>
			<li>
			  <a href="about.php">
				<i class='bx bx-box' ></i>
				<span class="links_name">event</span>
			  </a>
			</li>
			
			<li>
			  <a href="#">
				<i class='bx bx-book-alt' ></i>
				<span class="links_name">form and list</span>
			  </a>
			</li>
			<li>
			  <a href="#">
				<i class='bx bx-message' ></i>
				<span class="links_name">Messages</span>
			  </a>
			</li>
			<li>
			  <a href="#">
				<i class='bx bx-heart' ></i>
				<span class="links_name">Favrorites</span>
			  </a>
			</li>
			<li>
			  <a href="#">
				<i class='bx bx-cog' ></i>
				<span class="links_name">Setting</span>
			  </a>
			</li>
			<li class="log_out">
          <a href="home.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name" onClick="return confirm('Are you sure you want to log out?')">Log out</span>
          </a>
        </li>
	  </div>
	  <!-- Page Content -->
<div style="margin-left:25%">

<div class="container w3-teal">
  <h1>dashboard</h1>
</div>

<img src="PIC.jpg" alt="Car" style="width:100%">

	  <script>
	   let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	sidebarBtn.onclick = function() {
	  sidebar.classList.toggle("active");
	  if(sidebar.classList.contains("active")){
	  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
	}else
	  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
	}
	 </script>
	
	</body>
	</html>
	