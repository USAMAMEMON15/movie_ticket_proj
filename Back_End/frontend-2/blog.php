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
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/blog.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<style>
		@keyframes scale-up-ver-buttom-normal {0% { transform: scaleY(0.4); transform-origin: 100% 0%; } 100% { transform: scaleY(1); transform-origin: 100% 0%;} }

.scale-up-ver-buttom-normal { 
    animation: scale-up-ver-buttom-normal 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s 1 normal both; 
}
    .card-img-buttom {
        height: 250px;
        object-fit: cover;
    }
		.main_o {
			background: url("img/back-ground.png")
		}

		body {
			background: black;
			color: white;
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
									<a class="nav-link active" href="blog.php">Blogs</a>
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
			<section id="center" class="centre_o  pt-5 pb-5">
				<div class="container-xl">
					<div class="row centre_o1 text-center">
						<div class="col-md-12">
							<h1 class="text-white font_60 focus-in-contract-normal">Blogs</h1>
							<h5 class="mb-0 mt-3 fw-normal col_oran focus-in-contract-normal"><a class="focus-in-contract-normal text-light" href="index.php">Home</a> <span class="mx-2 text-muted">/</span> Blogs</h5>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div class="border_dashed">
	</div>

<section id="blog" class="p_3 scale-up-ver-buttom-normal">
    <div class="container-xl">
        <div class="blog_1 row">
            <!-- Blog Posts Section -->
            <div class="col-md-8 col-12">
                <div class="blog_1l">
                    <div class="blog_1l1">
                        <?php
                        $sql = "SELECT * FROM blog ORDER BY date DESC";
                        $result = $conn->query($sql);

                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="grid clearfix mb-4">
                                    <figure class="effect-jazz mb-0">
                                        <a href="blog_details.php?id=<?php echo $row['id']; ?>">
                                            <img src="../images/movies/<?php echo htmlspecialchars($row['image']); ?>"
                                                 class="w-100" style="height: 450px; object-fit: cover;"
                                                 alt="<?php echo htmlspecialchars($row['title']); ?>">
                                        </a>
                                    </figure>
                                </div>
                                <h3 class="mt-3">
                                    <a href="blog_details.php?id=<?php echo $row['id']; ?>">
                                        <?php echo htmlspecialchars($row['title']); ?>
                                    </a>
                                </h3>
                                <h6 class="text-muted mt-3">
                                    <i class="fa fa-user col_oran me-1"></i> By Admin
                                    <i class="fa fa-comments col_oran me-1 ms-3"></i> 3 Comments
                                    <i class="fa fa-calendar col_oran me-1 ms-3"></i> <?php echo htmlspecialchars($row['date']); ?>
                                    <i class="fa fa-folder-o col_oran me-1 ms-3"></i> <?php echo htmlspecialchars($row['category']); ?>
                                </h6>
                                <p class="mt-3">
                                    <?php
                                    $shortDesc = substr(strip_tags($row['discription']), 0, 150);
                                    echo htmlspecialchars($shortDesc) . '...';
                                    ?>
                                </p>
                                <h6 class="mb-4 mt-3 center_sm">
                                    <a class="button_2" href="blog_details.php?id=<?php echo $row['id']; ?>">Read More</a>
                                </h6>
                            <?php
                            }
                        } else {
                            echo '<div class="col-12 text-center"><p class="text-white">No movies found.</p></div>';
                        }
                        ?>
                    </div>

                    <!-- Static Pagination -->
                    <div class="pages text-center mt-4">
                        <ul class="mb-0">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a class="act" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar Section -->
            <div class="col-md-4 col-12 mt-4 mt-md-0">
                <div class="blog_1r">
                    <!-- Search Bar -->
                    <div class="blog_1r1">
                        <div class="input-group bg_oran">
                            <input type="text" class="form-control bg-transparent rounded-0 border-0 text-white fs-5"
                                   placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary bg-transparent rounded-0 border-0 text-white p-3 fs-5"
                                        type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>

                    <!-- Latest Posts -->
                    <div class="blog_1r2 mt-4 bg-dark p-4">
                        <h4 class="mb-4">Latest Posts</h4>
                        <!-- Example Post 1 -->
                        <div class="row blog_1r2i">
                            <div class="col-md-4 col-4 pe-0">
                                <figure class="effect-jazz mb-0">
                                    <a href=""><img src="img/t.jpg" class="w-100" alt="Post Image"></a>
                                </figure>
                            </div>
                            <div class="col-md-8 col-8">
                                <h6 class="fw-bold"><a href="">See Meila enjoyable capturing moment</a></h6>
                                <h6 class="text-muted mb-0 font_14"><i class="fa fa-comments col_oran me-1"></i> 0 Comments</h6>
                            </div>
                        </div>
                        <hr>
                        <!-- Example Post 2 -->
                        <div class="row blog_1r2i">
                            <div class="col-md-4 col-4 pe-0">
                                <figure class="effect-jazz mb-0">
                                    <a href=""><img src="img/p.jpg" class="w-100" alt="Post Image"></a>
                                </figure>
                            </div>
                            <div class="col-md-8 col-8">
                                <h6 class="fw-bold"><a href="">The Foreign Oscar Nominations 2023</a></h6>
                                <h6 class="text-muted mb-0 font_14"><i class="fa fa-comments col_oran me-1"></i> 0 Comments</h6>
                            </div>
                        </div>
                        <hr>
                        <!-- Example Post 3 -->
                        <div class="row blog_1r2i">
                            <div class="col-md-4 col-4 pe-0">
                                <figure class="effect-jazz mb-0">
                                    <a href=""><img src="img/y.jpg" class="w-100" alt="Post Image"></a>
                                </figure>
                            </div>
                            <div class="col-md-8 col-8">
                                <h6 class="fw-bold"><a href="">Upcoming New Season 5 Just Flow in !</a></h6>
                                <h6 class="text-muted mb-0 font_14"><i class="fa fa-comments col_oran me-1"></i> 0 Comments</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="blog_1r2 mt-4 bg-dark p-4">
                        <h4 class="mb-4">Categories</h4>
                        <h6 class="mb-0"><a href="movie.php">Fantasy <span class="float-end">(6)</span></a></h6>
                        <hr>
                        <h6 class="mb-0"><a href="movie.php">Film <span class="float-end">(4)</span></a></h6>
                        <hr>
                        <h6 class="mb-0"><a href="movie.php">Movie <span class="float-end">(5)</span></a></h6>
                        <hr>
                        <h6 class="mb-0"><a href="movie.php">TV Dramas <span class="float-end">(8)</span></a></h6>
                        <hr>
                        <h6 class="mb-0"><a href="movie.php">Uncategorized <span class="float-end">(7)</span></a></h6>
                    </div>

                    <!-- Tags -->
                    <div class="blog_1r2 mt-4 bg-dark text-light p-4">
                        <h4 class="mb-4">Tags</h4>
                        <ul class="mb-0 tags">
                            <li class="d-inline-block"><a class="d-block" href="movie.php">Adventure</a></li>
                            <li class="d-inline-block"><a class="d-block" href="movie.php">Film</a></li>
                            <li class="d-inline-block"><a class="d-block" href="movie.php">Movie</a></li>
                            <li class="d-inline-block"><a class="d-block" href="movie.php">TV Shows</a></li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="blog_1r2 mt-4 bg-dark p-4 center_sm">
                        <h4 class="mb-4">Newsletters</h4>
                        <p>Sign Up For Our Newsletter!</p>
                        <input class="form-control bg-transparent rounded-0" placeholder="Subscribe" type="text">
                        <h6 class="mt-4 mb-0">
                            <a class="button_2" href="">Subscribe <i class="fa fa-check-circle ms-1"></i></a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div

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