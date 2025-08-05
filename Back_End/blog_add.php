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
							<h1 class="text-white font_50">Blog-<span id="nav">Add</span> </h1>
							<h5 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="index.php">Dash-Board</a> <span class="mx-2 text-light">/</span><a href="blog_show.php" id="nav">Blog Show</a></h5>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<div class="border_dashed">

	</div>

<style>
     .btn{
         transition: 0.3s;
    display: inline-block;
    font-size: 16px;
    background: #d96c2c;
    color: #fff;
	margin:5px;
}
	#nav{
            color: #D96C2C;
		
	}
</style>
    
<!-- main content -->

    
</div>
<div class="container">
    <div class="row ">
        <div class="col-lg-8 m-auto">
            <div class="card  rounded-3 my-5 bg-dark  text-light">
                            <div class="card-header">
                                <h4 class="card-title">Blog Add</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

                                   
                                


<form method="post" enctype="multipart/form-data">
                        <div class="form-group mb-4">

                            <label class="text-dark">Title</label>
                            <input type="text" name="Title" class="form-control bg-dark text-light  rounded-3 " placeholder="Title">

                        </div>
                        <div class="form-group">

                            <label class="text-dark">Discription</label>
                            <textarea name="Discription" class="form-control bg-dark text-light  rounded-3" rows="4" placeholder="Discription"></textarea>

                        </div>
                        <div class="form-group">
                            
                            <label class="text-dark">Category</label>
                            <input type="text" name="Category" class="form-control bg-dark text-light  rounded-3" placeholder="Category">
                            
                        </div>
                        <div class="form-group mb-4">
                            
                            <label class="text-dark">Date</label>
                            <input type="date" name="Date" class="form-control bg-dark text-light  rounded-3 " placeholder="date">
                            
                        </div>
                        <div class="form-group mb-4">

                            <label class="text-dark">image</label>
                            <input type="file" name="Image" class="form-control bg-dark text-light  rounded-3 " placeholder="date">

                        </div>
                        <button type="submit" name="submit" class="btn my-2 mx-0">Add Blogs</button>
                    </form>

                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>

<!-- mai containt -->
<?php
if (isset($_POST['submit'])) {
    $Title = $_POST['Title'];
    $Discription = $_POST['Discription'];
    $Image = $_FILES['Image']['name'];
    $Category = $_POST['Category'];
    $Date = $_POST['Date'];
    $sql = "insert into blogs (title,discription,image,category,date) values('$Title' , '$Discription', '$Image', '$Category', '$Date')";
    $result = $conn->query($sql);

    if (isset($_FILES)) {
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($file_tmp, "./images/movies/" . $file_name);
    }



     if($result == true){
          echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        Swal.fire({
            title: 'Blogs Added Successfully!',
            icon: 'success',
            showConfirmButton: false,
            timer: 2000,
            didClose: () => {
                window.location.href = 'blog_show.php';
            }
        });
        </script>";
    }
}
include("footer.php");
?>

<section id="footer" class="p_3 bg-black">
		<div class="container-xl">
			<div class="footer_1 row pb-4">
				<div class="col-md-3">
					<div class="footer_1l">
						<h4 class="mb-0"><a class="fw-bold text-white" href="index.html"><i class="fa fa-modx col_oran"></i> Movie Theme </a></h4>
					</div>
				</div>
				<div class="col-md-9">
					<div class="footer_1r text-end">
						<ul class="mb-0">
							<li class="d-inline-block"><a class="text-white-50 a_tag" href="#">Help</a></li>
							<li class="d-inline-block text-white-50">/</li>
							<li class="d-inline-block me-2"><a class="text-white-50 a_tag" href="#"> Privacy Policy</a></li>
							<li class="d-inline-block"><a class="social_icon" href="#"> <i class="fa fa-twitter"></i></a></li>
							<li class="d-inline-block"><a class="social_icon" href="#"> <i class="fa fa-facebook"></i></a></li>
							<li class="d-inline-block"><a class="social_icon" href="#"> <i class="fa fa-instagram"></i></a></li>
							<li class="d-inline-block"><a class="social_icon" href="#"> <i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer_2 row mt-4">
				<div class="col-md-3">
					<div class="footer_2i">
						<p class="text-white fw-bold fs-5">Buy movie tickets easily with Aovis system nationwide</p>
						<h6 class="mb-0 mt-4"><a class="button" href="ticket.php">Get Your Ticket</a></h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer_2i">
						<h5 class="col_oran mb-4">Movies</h5>
						<div class="row footer_1ism">
							<h6 class="fw-normal col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> Action</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> Adventure</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> Animation</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> Thriller</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> Crime</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6 mb-0"><a class="text-white-50 a_tag" href="#"> Comedy</a></h6>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer_2i">
						<h5 class="col_oran mb-4">Links</h5>
						<div class="row footer_1ism">
							<h6 class="fw-normal col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> About Us</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> My account</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> News</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> Latest Events</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#"> Privacy</a></h6>
							<h6 class="fw-normal mt-2 col-md-12 col-6 mb-0"><a class="text-white-50 a_tag" href="#"> Contact Us</a></h6>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer_2i">
						<h5 class="col_oran mb-4">Newsletter</h5>
						<p class="text-white-50">Subscribe to Leitmotif newsletter this very day.</p>
						<div class="input-group bg-white">
							<input type="text" class="form-control bg-transparent rounded-0 border-0" placeholder="Enter Your Email">
							<span class="input-group-btn">
								<button class="btn btn-primary bg-transparent rounded-0 border-0 col_oran p-3" type="button">
									<i class="fa fa-location-arrow"></i></button>
							</span>
						</div>
						<div class="form-check mt-3 text-white-50">
							<input class="form-check-input" type="checkbox" value="">
							<label class="form-check-label" for="flexCheckDefault">
								I agree to all terms and policies of the company
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/common.js"></script>

</body>
</html>
                


                         

