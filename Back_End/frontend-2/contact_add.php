<?php
include ("../conn.php")
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
	<link href="css/blog.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
<style>
	body{
		background: black;
		color: white;
	}
	#form{
		border-radius: 50px;
		align-items: center;
		padding-left: 220px;
	}
	.main_o{
		background:url("img/back-ground.png")
	}
	
</style>
</head>
<body>

<div class="main_o main">
 <div class="main_o1 ">
     <section id="header">
<nav class="navbar navbar-expand-md navbar-light px_4" id="navbar_sticky">
  <div class="container-fluid">
    <a class="navbar-brand  p-0 fw-bold text-white" href="index.php"><i class="fa fa-modx col_oran"></i>Movie<span style="color: #D96C2C;">Flix<span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	   <ul class="navbar-nav mb-0 ms-auto">
	    
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
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
		  <a class="nav-link active" href="contact_add.php">Contact Us</a>
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
   <section id="center" class="centre_o  pt-5 pb-5">
 <div class="container-xl">
  <div class="row centre_o1 text-center">
    <div class="col-md-12">
      <h1 class="text-white font_60">Contact Us</h1>
	  <h5 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="index.php">Home</a> <span class="mx-2 text-muted">/</span> Contact Us</h5>
   </div>
  </div>
 </div>
</section>
 </div>
</div>

<div class="border_dashed">

</div>

<section id="contact" class="p_3">
 <div class="container-xl">
		<div class="row trend_1 text-center mb-4">
		<div class="col-md-12">
		<span class="fa fa-film col_oran"></span>
		<h6 class="text-muted mt-3">Contact With Us</h6>
		<h1 class="mb-0 font_50">Feel Free to Write us <br>
		Anytime</h1>
		</div>
		</div>
		</div>
		</section>
		<div class="authincation h-100">
        <div class="container-fluid h-100">
            <div  class="row justify-content-center h-100 align-items-center">
                <div id="Box" class="col-md-6">
                    <div class="authincation-content">
                        <div  class="row no-gutters">
                            <div  class="col-xl-12">
                                <div  class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-12 pt-2 fw-bold">
                                                <label> Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                            </div>
                                            <div class="form-group col-md-12 pt-2 fw-bold">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="form-group col-md-12 pt-2 fw-bold">
                                                <label>Phone</label>
                                                <input type="number" name="phone" class="form-control" placeholder="Phone" required>
                                            </div>
                                            <div class="form-group col-md-12 pt-2 fw-bold">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" required>
                                            </div>
											<div class="form-group col-md-12 pt-2 fw-bold">
                                                <label>Comment</label>
                                               	<textarea placeholder="Write a Comment" name="comment" required class="form-control form_text"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="mb-0 mt-4 text-center button_2 rounded-3">Send a Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $comment = $_POST['comment'];
    $sql ="insert into contact (name , email , phone , city , comment) values ('$name' , '$email' , '$phone', '$city', '$comment')";
    $result = $conn->query($sql);

    if($result == true){
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        Toast.fire({
            icon: 'success',
            title: 'Message has been Send successfully!'
        });

        setTimeout(() => {
            window.location.href = 'index.php';
        }, 3100); // Wait for toast to finish before redirecting
    </script>";
}

}
?>
			<section>			
                        
		<div class="row contact_1 mt-4">
		  <div class="col-md-4">
		    <div class="contact_1i shadow_box p-5 px-4">
			 <div class="contact_1i1 row">
			  <div class="col-md-9">
			    <div class="contact_1i1l">
				  <h4 class="mb-3">About</h4>
				  <p class="mb-0">Morbi ut tellus ac leo mol stie luctus nec vehicula sed</p>
				</div>
			  </div>
			  <div class="col-md-3">
			    <div class="contact_1i1r">
				  <span class="font_50 col_oran"><i class="fa fa-user-plus"></i></span>
				</div>
			  </div>
			 </div>
			</div>
		  </div>
		  <div class="col-md-4">
		    <div class="contact_1i shadow_box p-5 px-4">
			 <div class="contact_1i1 row">
			  <div class="col-md-9">
			    <div class="contact_1i1l">
				  <h4 class="mb-3">Address</h4>
				  <p class="mb-0">Guslshan e maymar Karachi</p>
				</div>
			  </div>
			  <div class="col-md-3">
			    <div class="contact_1i1r">
				  <span class="font_50 col_oran"><i class="fa fa-map"></i></span>
				</div>
			  </div>
			 </div>
			</div>
		  </div>
		  <div class="col-md-4">
		    <div class="contact_1i shadow_box p-5 px-4">
			 <div class="contact_1i1 row">
			  <div class="col-md-9">
			    <div class="contact_1i1l">
				  <h4 class="mb-3">Contact</h4>
				  <h6><a href="#">+92 334 3073043</a></h6>
				   <h6><a href="#">movie-flix@gmail.com</a></h6>
				   <h6 class="mb-0"><a href="#">movie-flixinfo@gmail.com</a></h6>
				</div>
			  </div>
			  <div class="col-md-3">
			    <div class="contact_1i1r">
				  <span class="font_50 col_oran"><i class="fa fa-envelope"></i></span>
				</div>
			  </div>
			 </div>
			</div>
		  </div>
		</div>
		<div class="row contact_2 mt-4">
   <div class="col-md-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7230.2263512545505!2d67.1321499!3d25.030233000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb346f4ee2f512f%3A0x75bf3f7abcacdafc!2sGulshan-e-Maymar%2C%20Karachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1752060967075!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>  
  </div>
 </div>
</section>

<section id="footer" class="p_3 bg-black">
 <div class="container-xl">
    <div class="footer_1 row pb-4">
	  <div class="col-md-3">
	   <div class="footer_1l">
	     <h4 class="mb-0"><a class="fw-bold text-white" href="index.html"><i class="fa fa-modx col_oran"></i> Movie<span style="color: #D96C2C;">Flix<span></a></h4>
	   </div>
	  </div>
	  <div class="col-md-9">
	   <div class="footer_1r text-end">
	     <ul class="mb-0">
		   <li class="d-inline-block"><a class="text-white-50 a_tag" href="contact_add.php">Help</a></li>
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
		 <h6 class="fw-normal col-md-12 col-6"><a class="text-white-50 a_tag" href="movie.php"> Action</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="movie.php"> Adventure</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="movie.php"> Animation</a></h6>
	  <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="movie.php"> Thriller</a></h6>
	   <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="movie.php"> Crime</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6 mb-0"><a class="text-white-50 a_tag" href="movie.php"> Comedy</a></h6>
	    </div>
	   </div>
	  </div>
	  <div class="col-md-3">
	   <div class="footer_2i">
         <h5 class="col_oran mb-4">Links</h5>
		 <div class="row footer_1ism">
		 <h6 class="fw-normal col-md-12 col-6"><a class="text-white-50 a_tag" href="about.php"> About Us</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="faq.php"> Faqs</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="blog.php"> Blog</a></h6>
	  <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="blog.php"> Latest Events</a></h6>
	   <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="ticket.php"> Ticket</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6 mb-0"><a class="text-white-50 a_tag" href="contact_add.php"> Contact Us</a></h6>
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