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
  <link href="css/list.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">


  <style>
     @keyframes scale-up-hor-left-normal {0% { transform: scaleX(0.4); transform-origin: 0% 0%; } 100% { transform: scaleX(1); transform-origin: 0% 0%;} }

.scale-up-hor-left-normal { 
    animation: scale-up-hor-left-normal 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s 1 normal both; 
}
 @keyframes scale-up-ver-top-normal {0% { transform: scaleY(0.4); transform-origin: 100% 0%; } 100% { transform: scaleY(1); transform-origin: 100% 0%;} }

.scale-up-ver-top-normal:hover { 
    animation: scale-up-ver-top-normal 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s 1 normal both; 
}
    .card-img-top {
      height: 250px;
      object-fit: cover;
    }

@keyframes scale-up-ver-buttom-normal {0% { transform: scaleY(0.4); transform-origin: 100% 0%; } 100% { transform: scaleY(1); transform-origin: 100% 0%;} }

.scale-up-ver-buttom-normal { 
    animation: scale-up-ver-buttom-normal 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s 1 normal both; 
}
    .card-img-buttom {
        height: 250px;
        object-fit: cover;
    }

    
    body {
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
                  <a class="nav-link " href="movie.php">Movies</a>
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
      <section id="center" class="centre_o  pt-5 pb-5">
        <div class="container-xl">
          <div class="row centre_o1 text-center">
            <div class="col-md-12">
              <h1 class="text-white font_50 focus-in-contract-normal">Movies Deatils</h1>
              <h5 class="mb-0 mt-3 fw-normal col_oran focus-in-contract-normal"><a class="text-light focus-in-contract-normal" href="index.php">Home</a> <span class="mx-2 text-muted">/</span> Movies</h5>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <?php

  // Check if ID exists and is valid
  if (!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])) {
    echo '<div class="container mt-5"><div class="alert alert-danger text-center">';
    echo 'Invalid movie ID specified. Please select a movie from our <a href="movies.php">movie listings</a>.';
    echo '</div></div>';
    include("footer.php");
    exit();
  }

  $Id = (int)$_GET['id'];  // Convert to integer for safety

  // Prepare statement with error handling
  $sql = "SELECT * FROM `movies` WHERE id = ?";
  $stmt = mysqli_prepare($conn, $sql);

  if (!$stmt) {
    error_log("Prepare failed: " . mysqli_error($conn));
    die('<div class="alert alert-danger">Database error. Please try again later.</div>');
  }

  mysqli_stmt_bind_param($stmt, "i", $Id);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $movie = mysqli_fetch_assoc($result);
  mysqli_stmt_close($stmt);

  if (!$movie) {
    echo '<div class="container mt-5"><div class="alert alert-warning text-center">';
    echo 'The requested movie could not be found. Please browse our <a href="movies.php">available movies</a>.';
    echo '</div></div>';
    include("footer.php");
    exit();
  }
  ?>

  <h1 class=" text-center mb-5 mt-5 text-light scale-up-ver-buttom-normal"><?= htmlspecialchars($movie['title']) ?></h1>

  <div id="main">
    <div class="inner">
      <div class="container scale-up-ver-buttom-normal">
        <div class="row align-items-center ">
          <div class="col-lg-4 col-md-12 mb-4 pt-1 ">
          
                   <!-- Play Icon -->
                   <img id="imgd" class=""  height="320px" width="300px" src="../images/movies/<?= htmlspecialchars($movie['image']) ?>"
                   alt="<?= htmlspecialchars($movie['title']) ?> poster"
                   class=" rounded shadow">
                  </div>
                  <div class="col-lg-8">
                    <!-- Video inside Modal -->
                     <video id="modalVideo" class="w-100 rounded shadow" controls autoplay>
                       <source src="../images/movies/<?= htmlspecialchars($movie['trailer']) ?>" type="video/mp4">
                       Your browser does not support the video tag.
                     </video>
                  </div>




          <div class="col-lg-12 col-md-12 ">
            <div class="card bg-dark text-light pt-2">
              <div class="card-body">
                <h3 class="card-title">Movie Details</h3>
                <p><strong>Category:</strong> <?= htmlspecialchars($movie['category']) ?></p>
                <p><strong>Language:</strong> <?= htmlspecialchars($movie['language']) ?></p>
                <p><strong>Duration:</strong> <?= (int)$movie['duration_min'] ?> minutes</p>
                <p><strong>Release Date:</strong> <?= htmlspecialchars($movie['release_date']) ?></p>
                <hr>
                <p class="card-text"><?= htmlspecialchars($movie['description']) ?></p>

                
                <form action="ticket.php" method="POST" class="mt-4">
                  <input type="hidden" name="movie_id" value="<?= $movie['id'] ?>">
                  <ul class="mb-0 mt-4">
                    <li class="d-inline-block"><a class="button" href="ticket.php"><i class="fa fa-check-circle me-1 font_14"></i> Get Ticket</a></li>

                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<section class="tiles py-5 ">
  <div class="container">
    <div class="row">
      <?php
      $sql = "SELECT * FROM movies order by id asc limit 4";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              ?>
              
              <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100 bg-dark text-light ">
                  <img  src="../images/movies/<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['title']); ?>">
                  <div class="card-body">
                    <h5 class="card-title font_18"><?php echo htmlspecialchars($row['title']); ?></h5>
                    <p class="card-text text-muted"><?php echo htmlspecialchars($row['category']); ?></p>
					<li  class="d-inline-block ms-2">
					    <!-- FIXED: Added movie ID to the URL -->
					    <a class="button_1" href="movie_details.php?id=<?php echo $row['id']; ?>">
					        <i class="fa fa-check-circle me-1 font_14"></i> Movie Details
					    </a>
					</li>
				  </div>
				</div>
			  </div>
              <?php
          }
      } else {
          echo '<div class="col-12 text-center"><p class="text-white">No movies found.</p></div>';
      }
      ?>
    </div>
  </div>
</section>

<script>
  const videoModal = document.getElementById('templateVideoModal');
  const modalVideo = document.getElementById('modalVideo');

  videoModal.addEventListener('hidden.bs.modal', function () {
    modalVideo.pause();
    modalVideo.currentTime = 0;
  });
</script>

  <br><br>

  <?php
  include("footer.php");
  ?>

