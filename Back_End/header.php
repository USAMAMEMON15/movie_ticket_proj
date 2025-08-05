<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie-Flix-Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/list.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"> -->
	<script src="js/bootstrap.bundle.min.js"></script>
<style>
    .card-img-top {
        height: 250px;
        object-fit: cover;
    }
	body{
		background: black;
	}
</style>
</head>

<body>

	<div class="main_o main">
		<div class="main_o1 bg_back">
			 <section id="header">
<nav class="navbar navbar-expand-md navbar-light px_4" id="navbar_sticky">
  <div class="container-fluid">
    <a class="navbar-brand  p-0 fw-bold text-white" href="index.php"><i class="fa fa-modx col_oran"></i> Movie-Flix </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
			<section id="center" class="centre_o  pt-5 pb-5">
				<div class="container-xl">
					<div class="row centre_o1 text-center">
						<div class="col-md-12">
							<h4  class="text-white font_15">Wellcome To Movie-Flix</h4>
							<h1 class="text-white font_50">Dash-<span id="nav">Board</span> </h1>
							<!-- <h5 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="index.php">Home</a> <span class="mx-2 text-muted">/</span> Movies</h5> -->
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<div class="border_dashed">

	</div>
