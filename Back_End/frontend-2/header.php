<?php
include("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie-Flix</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
<style>
  body{
    background: black;
    color: white;
  }
</style>
</head>
<body>
<div class="main clearfix position-relative">
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none; top:0;" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content bg-transparent border-0">
			  <div class="modal-header border-0">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
			  </div>
			  <div class="modal-body p-0">
				<div class="search_1">
				   <div class="input-group">
				<input type="text" class="form-control bg-white border-0" placeholder="Search...">
				<span class="input-group-btn">
					<button class="btn btn-primary bg_oran border_1 rounded-0 p-3 px-4" type="button">
						<i class="fa fa-search"></i></button>
				</span>
		</div>
	            </div>
			  </div>
			</div>
		  </div>
		</div>
 <div class="main_1 clearfix position-absolute top-0 w-100">
   <section id="header">
<nav class="navbar navbar-expand-md navbar-light px_4" id="navbar_sticky">
  <div class="container-fluid">
    <a class="navbar-brand  p-0 fw-bold text-white" href="index.php"><i class="fa fa-modx col_oran"></i> Movie<span style="color: #D96C2C;">Flix<span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	   <ul class="navbar-nav mb-0 ms-auto">
	    
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
		 
		<li class="nav-item">
          <a class="nav-link " href="about.php">About Us</a>
        </li>
		<li class="nav-item">
		  <a class="nav-link" href="movie.php">Movies</a>
		</li>
		
		<li class="nav-item">
		  <a class="nav-link" href="blog.php">Blogs</a>
		</li>
		
		<li class="nav-item">
		  <a class="nav-link" href="contact_add.php">Contact Us</a>
		</li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
		    <li><a class="dropdown-item" href="faq.php"><i class="fa fa-chevron-right font_12 me-1"></i> Faqs</a></li>
			<li><a class="dropdown-item border-0" href="ticket.php"><i class="fa fa-chevron-right font_12 me-1"></i> Ticket</a></li>
          </ul>
        </li>
			
      </ul>
      <ul class="navbar-nav mb-0 ms-auto">
	       <li class="nav-item">
          <a class="nav-link fs-5 drop_icon" data-bs-target="#exampleModal2" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a>
        </li>
		   <li class="nav-item dropdown header-profile mt-1">
                                <a class="nav-link " href="#" role="button" data-toggle="dropdown">
									<i class="fa fa-user"></i>       
                                </a>
                                <div class="dropdown-menu dropdown-menu-right bg-black text-light">
                                    <a class="nav-link" href="./login.php" class="dropdown-item">
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
      </ul>
    </div>
  </div>
</nav>
</section>
 </div>
