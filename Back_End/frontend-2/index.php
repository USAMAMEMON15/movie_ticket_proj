 <?php
    include("header.php");
    ?>

<style>
                    
@keyframes focus-in-contract-normal {
    0% {
        letter-spacing: 1em;
        filter: blur(12px);
        opacity: 0;
    }
    100% {
        filter: blur(0px);
        opacity: 1;
    }
}

.focus-in-contract-normal {
    animation: focus-in-contract-normal 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0s 1 normal both;
}

  @keyframes text-flicker-in-glow-normal {0% { opacity: 0; } 10% { opacity: 0; text-shadow: none; } 10.1% { opacity: 1; text-shadow: none; } 10.2% { opacity: 0; text-shadow: none; } 20% { opacity: 0; text-shadow: none; } 20.1% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.25); } 20.6% { opacity: 0; text-shadow: none; } 30% { opacity: 0; text-shadow: none; } 30.1% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25); } 30.5% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25); } 30.6% { opacity: 0; text-shadow: none; } 45% { opacity: 0; text-shadow: none; } 45.1% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25); } 50% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25); } 55% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25); } 55.1% { opacity: 0; text-shadow: none; } 57% { opacity: 0; text-shadow: none; } 57.1% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.35); } 60% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.35); } 60.1% { opacity: 0; text-shadow: none; } 65% { opacity: 0; text-shadow: none; } 65.1% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.35), 0 0 100px rgba(255, 255, 255, 0.1); } 75% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.35), 0 0 100px rgba(255, 255, 255, 0.1); } 75.1% { opacity: 0; text-shadow: none; } 77% { opacity: 0; text-shadow: none; } 77.1% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.4), 0 0 110px rgba(255, 255, 255, 0.2), 0 0 100px rgba(255, 255, 255, 0.1); } 85% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.4), 0 0 110px rgba(255, 255, 255, 0.2), 0 0 100px rgba(255, 255, 255, 0.1); } 85.1% { opacity: 0; text-shadow: none; } 86% { opacity: 0; text-shadow: none; } 86.1% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.6), 0 0 60px rgba(255, 255, 255, 0.45), 0 0 110px rgba(255, 255, 255, 0.25), 0 0 100px rgba(255, 255, 255, 0.1); } 100% { opacity: 1; text-shadow: 0 0 30px rgba(255, 255, 255, 0.6), 0 0 60px rgba(255, 255, 255, 0.45), 0 0 110px rgba(255, 255, 255, 0.25), 0 0 100px rgba(255, 255, 255, 0.1);} }

.text-flicker-in-glow-normal:hover { 
    animation: text-flicker-in-glow-normal 4s linear 0s 1 normal both; 
}
 @keyframes scale-up-ver-top-normal {0% { transform: scaleY(0.4); transform-origin: 100% 0%; } 100% { transform: scaleY(1); transform-origin: 100% 0%;} }

.scale-up-ver-top-normal:hover { 
    animation: scale-up-ver-top-normal 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s 1 normal both; 
}

@keyframes scale-up-ver-buttom-normal {0% { transform: scaleY(0.4); transform-origin: 100% 0%; } 100% { transform: scaleY(1); transform-origin: 100% 0%;} }

.scale-up-ver-buttom-normal { 
    animation: scale-up-ver-buttom-normal 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s 1 normal both; 
}
    .card-img-buttom {
        height: 250px;
        object-fit: cover;
    }
</style>

 <div class="main_2 clearfix">
     <section id="center" class="center_home scale-up-ver-buttom-normal">
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-indicators">
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
             </div>
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <img src="img/love-guru.jpg" height="800px" class="d-block w-100 h-100" alt="...">
                     <div class="carousel-caption d-md-block ">
                         <h3 class="col_oran focus-in-contract-normal"> Romance & Comedy</h3>
                         <h1 class="text-white mt-3 focus-in-contract-normal">Love Guru</h1>
                         <p class="mt-3 text-light w-75">Sophia, a talented architect has been dreaming of marrying her true love. But when a new man walks into her life, everything changes. Torn between family expectations and the stirrings of her heart, Sophia embarks on a journey.</p>
                         <ul class="mb-0 mt-4">
                             <li class="d-inline-block "><a class="button " href="movie.php"><i class="fa fa-check-circle me-1 font_14 "></i> More Info</a></li>
                             <li class="d-inline-block ms-2"><a class="button_1 " href="ticket.php"><i class="fa fa-check-circle me-1 font_14"></i> Get Ticket</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img src="img/john3.jpg" class="d-block w-100 h-100" height="800px" alt="...">
                     <div class="carousel-caption d-md-block">
                         <h3 class="col_oran focus-in-contract-normal">Action Movie</h3>
                         <h1 class="text-white mt-3 focus-in-contract-normal">John Wick <br> Chapter 5</h1>
                         <p class="mt-3 text-light w-75">John Wick is a former hitman grieving the loss of his true love. When his home is broken into, robbed, and his dog killed, he is forced to return to action to exact revenge.</p>
                         <ul class="mb-0 mt-4">
                             <li class="d-inline-block"><a class="button" href="movie.php"><i class="fa fa-check-circle me-1 font_14"></i> More Info</a></li>
                             <li class="d-inline-block ms-2"><a class="button_1 " href="ticket.php"><i class="fa fa-check-circle me-1 font_14"></i> Get Ticket</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img src="img/squid_game_img1.png" height="800px" class="d-block w-100 h-100" alt="...">
                     <div class="carousel-caption d-md-block">
                         <h3 class="col_oran focus-in-contract-normal">Thriller Movie</h3>
                         <h1 class="text-white mt-3 focus-in-contract-normal">Squid Game <br> Season 3</h1>
                         <p class="mt-3 text-light w-75">Squid Game Hundreds of cash-strapped players accept a strange invitation to compete in children's games. A tempting prize awaits, but with deadly high stakes.</p>
                         <ul class="mb-0 mt-4">
                             <li class="d-inline-block"><a class="button" href="movie.php"><i class="fa fa-check-circle me-1 font_14"></i> More Info</a></li>
                             <li class="d-inline-block ms-2"><a class="button_1 " href="ticket.php"><i class="fa fa-check-circle me-1 font_14"></i> Get Ticket</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </section>
 </div>

 </div>

 <div class="border_dashed">

 </div>

 <section id="join" class="px_4 p_3">
     <div class="container-fluid">
         <div class="row join_1">
             <div class="col-md-4">
                 <div class="join_1l position-relative">
                     <div class="join_1li">
                         <img src="img/upcoming.jpg" class="w-100" alt="abc">
                     </div>
                     <div class="join_1li1 p-4 bg_backo position-absolute w-100 h-100 top-0">
                         <div class="join_1li1n row">
                             <div class="col-md-8">
                                 <div class="join_1li1l">
                                     <h6 class="text-light">Join Now</h6>
                                     <h3 class="mb-0 text-white">Upcoming <br>
                                         Film Festivals</h3>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="join_1li1r">
                                     <a href="img/award.jpg"><span class="d-inline-block bg_oran text-white rounded-circle text-center font_50"><i class="fa fa-video-camera"></i></span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="join_1l position-relative">
                     <div class="join_1li">
                         <img src="img/award.jpg" class="w-100" alt="abc">
                     </div>
                     <div class="join_1li1 p-4 bg_backo position-absolute w-100 h-100 top-0">
                         <div class="join_1li1n row">
                             <div class="col-md-8">
                                 <div class="join_1li1l">
                                     <h6 class="text-light">Watch Now</h6>
                                     <h3 class="mb-0 text-white">Watch Film
                                         <br>
                                         Awards
                                     </h3>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="join_1li1r">
                                     <a href="https://deadline.com/feature/awards-season-calendar-oscars-emmys-golden-globes-list-1234814076/"><span class="d-inline-block bg_oran text-white rounded-circle text-center font_50"><i class="fa fa-film"></i></span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="join_1l position-relative">
                     <div class="join_1li">
                         <img src="img/tv.jpg" class="w-100" alt="abc">
                     </div>
                     <div class="join_1li1 p-4 bg_backo position-absolute w-100 h-100 top-0">
                         <div class="join_1li1n row">
                             <div class="col-md-8">
                                 <div class="join_1li1l">
                                     <h6 class="text-light">Get Ticket</h6>
                                     <h3 class="mb-0 text-white">Comedy TV
                                         <br>
                                         Shows
                                     </h3>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="join_1li1r">
                                     <a href="https://www.imdb.com/chart/toptv/"><span class="d-inline-block bg_oran text-white rounded-circle text-center font_50"><i class="fa fa-microphone"></i></span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section id="trend" class="p_3 pt-0 ">
     <div class="container-xl">
         <div class="row trend_1 text-center mb-4">
             <div class="col-md-12">
                 <span class="fa fa-film col_oran"></span>
                 <h6 class="text-muted mt-3">Watch New Movies</h6>
                 
                <div class=""><h1 class="mb-0 font_50 text-flicker-in-glow-normal">Movies Now Playing</h1></div>
             </div>
         </div>
     </div>
 </section>
 <section class="tiles py-5 ">
     <div class="container">
         <div class="row ">
             <?php
                $sql = "SELECT * FROM movies order by id desc limit 4";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>

                     <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                         <div class="card h-100 bg-dark text-light ">
                             <img height="400px" src="../images/movies/<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['title']); ?>">
                             <div class="card-body">
                                 <h5 class="card-title font_18"><?php echo htmlspecialchars($row['title']); ?></h5>
                                 <p class="card-text text-muted"><?php echo htmlspecialchars($row['category']); ?></p>
                                 <li class="d-inline-block ms-2">
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


 <section id="feat" class="p_3 scale-in-ver-bottom-normal ">
     <div class="container-xl">
         <div class="row feat_1 mb-4">
             <div class="col-md-6">
                 <div class="feat_1l">

                     <h1 class="mb-0 font_50 text-flicker-in-glow-normal">Top Featured Movies</h1>
                     <!-- <h6 class="text-muted mt-3">Checkout Movies</h6> -->
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="feat_1r mt-3">
                     <p class="mb-0">Phasellus non cursus ligula, sed mattis urna. Aenean ac tor gravida, volutpat quam eget, consequat elit.</p>
                 </div>
             </div>
         </div>
         <div class="row feat_2 mt-5">
             <div class="col-md-4">
                 <div class="feat_2i position-relative">
                     <div class="feat_2i1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/fast.jpg" height="360px" class="w-100" alt="abc"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="feat_2i2 position-absolute   shadow_box p-4">
                         <h5><a href="#">Fast & Furious</a></h5>
                         <h6 class="font_14 mt-3"><i class="fa fa-tag col_oran me-1"></i> Action <i class="fa fa-clock-o col_oran me-1 ms-3"></i> 130 Mins</h6>
                          <ul class="mb-0 mt-3 font_14">
        <li class="d-inline-block">
          <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#fastVideoModal">Watch Trailer</a>
        </li>
        <li class="d-inline-block ms-2"><a href="ticket.php">Get Ticket</a></li>
      </ul>
                     </div>
                 </div>
             </div>

             <!-- Fast & Furious Trailer Modal -->
<div class="modal fade" id="fastVideoModal" tabindex="-1" aria-labelledby="fastVideoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe id="fastIframe"
            src="https://www.youtube.com/embed/_ixlOH9EzL4?enablejsapi=1"
            title="Fast & Furious Trailer"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var fastModal = document.getElementById('fastVideoModal');
  var fastIframe = document.getElementById('fastIframe');

  fastModal.addEventListener('hidden.bs.modal', function () {
    fastIframe.src = fastIframe.src; // Stop video on modal close
  });
</script>

             <div class="col-md-4">
                 <div class="feat_2i position-relative">
                     <div class="feat_2i1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/kgf1.jpg" height="360px" class="w-100" alt="abc"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="feat_2i2 position-absolute   shadow_box p-4">
                         <h5><a href="#">K.G.F</a></h5>
                         <h6 class="font_14 mt-3"><i class="fa fa-tag col_oran me-1"></i> Thriller <i class="fa fa-clock-o col_oran me-1 ms-3"></i> 150 Mins</h6>
                          <ul class="mb-0 mt-3 font_14">
                             <!-- Updated link to open modal -->
                             <li class="d-inline-block">
                                 <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#kgfVideoModal">Watch Trailer</a>
                             </li>
                             <li class="d-inline-block ms-2"><a href="ticket.php">Get Ticket</a></li>
                         </ul>
                     </div>
                 </div>
             </div>

            <!-- KGF Trailer Modal -->
<div class="modal fade" id="kgfVideoModal" tabindex="-1" aria-labelledby="kgfVideoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe id="kgfIframe"
            src="https://www.youtube.com/embed/JKa05nyUmuQ?enablejsapi=1"
            title="KGF Trailer"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var kgfModal = document.getElementById('kgfVideoModal');
  var kgfIframe = document.getElementById('kgfIframe');

  kgfModal.addEventListener('hidden.bs.modal', function () {
    // Reset the iframe src to stop video when modal is closed
    kgfIframe.src = kgfIframe.src;
  });
</script>

             <div class="col-md-4">
                 <div class="feat_2i position-relative">
                     <div class="feat_2i1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/mirza.jpg" height="360px" class="w-100" alt="abc"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="feat_2i2 position-absolute shadow_box p-4">
                         <h5><a href="#">MirzaPur</a></h5>
                         <h6 class="font_14 mt-3">
                             <i class="fa fa-tag col_oran me-1"></i> Crime
                             <i class="fa fa-clock-o col_oran me-1 ms-3"></i> 160 Mins
                         </h6>
                         <ul class="mb-0 mt-3 font_14">
                             <!-- Updated link to open modal -->
                             <li class="d-inline-block">
                                 <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#mirzapurVideoModal">Watch Trailer</a>
                             </li>
                             <li class="d-inline-block ms-2"><a href="ticket.php">Get Ticket</a></li>
                         </ul>
                     </div>

                     <!-- Mirzapur Trailer Modal -->
                     <div class="modal fade" id="mirzapurVideoModal" tabindex="-1" aria-labelledby="mirzapurVideoModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered modal-lg">
                             <div class="modal-content bg-dark">
                                 <div class="modal-body p-0">
                                     <div class="ratio ratio-16x9">
                                         <iframe id="mirzapurIframe"
                                             src="https://www.youtube.com/embed/ZNeGF-PvRHY?enablejsapi=1"
                                             title="Mirzapur Trailer"
                                             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                             allowfullscreen></iframe>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
<script>
  var mirzapurModal = document.getElementById('mirzapurVideoModal');
  var mirzapurIframe = document.getElementById('mirzapurIframe');

  mirzapurModal.addEventListener('hidden.bs.modal', function () {
    // Reset the iframe to stop video
    mirzapurIframe.src = mirzapurIframe.src;
  });
</script>


                 </div>
             </div>
         </div>
         <div class="row feat_3  border_1 p-3 mx-auto">
             <div class="col-md-9">
                 <div class="feat_3l mt-1">
                     <p class="mb-0"><span class="fs-5 col_oran fw-bold align-middle">23,00+</span> more comedy & horror movies you can explore</p>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="feat_3r text-end">
                     <h6 class="mb-0"><a class="button_2 p-2 px-3 font_14" href="movie.php">Explore Now</a></h6>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section id="choose">
     <div class="choose_m bg_backo pt-5 pb-5">
         <div class="container-xl">
             <div class="choose_1 row">
                 <div class="col-md-6 col-sm-6">
                     <div class="choose_1l">
                         <span class="fa fa-film col_oran"></span>
                         <h6 class="text-white-50 mt-3">Documentary</h6>
                         <h1 class="font_50 text-white text-flicker-in-glow-normal">Movies Now Playing</h1>
                         <p class="mt-3 text-white-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer typesetting, remaining essentially unchanged</p>
                         <h6 class="mb-0 mt-4"><a class="button_1" href="movie.php">More Info</a></h6>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-6">
                     <div class="choose_1r text-center mt-5">
                         <h4 class="text-white mb-0">
                             Watch the Trailer
                             <span class="ms-2">
                                 <a class="col_oran" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#templateVideoModal">
                                     <i class="fa fa-play-circle align-middle"></i>
                                 </a>
                             </span>
                         </h4>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Video Modal -->
 <div class="modal fade" id="templateVideoModal" tabindex="-1" aria-labelledby="templateVideoModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content bg-dark">
             <div class="modal-body p-0">
                 <div class="ratio ratio-16x9">
                     <iframe id="videoIframe"
                         src="https://www.youtube.com/embed/_ixlOH9EzL4?enablejsapi=1"
                         title="YouTube video player"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                         allowfullscreen></iframe>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <script>
     var videoModal = document.getElementById('templateVideoModal');
     var videoIframe = document.getElementById('videoIframe');

     videoModal.addEventListener('hidden.bs.modal', function() {
         // Stop the video when modal is closed
         videoIframe.src = videoIframe.src;
     });
 </script>



 <section id="gallery" class="px_4 p_3">
     <div class="container-fluid">
         <div class="row gallery_1 text-center mb-4">
             <div class="col-md-12">
                 <h1 class="mb-0 text-flicker-in-glow-normal">Our Photo Gallery</h1>
             </div>
         </div>
         <div class="row gallery_2">
             <div class="col">
                 <div class="gallery_2i position-relative">
                     <div class="gallery_2i1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/cinima1.jpg" class="w-100" alt="abc"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="gallery_2i2 bg_backn text-center px-4 position-absolute w-100 h-100 top-0">
                         <span class="d-inline-block"><a class="fs-1 text-white" data-bs-target="#exampleModal3" data-bs-toggle="modal" href="#"><i class="fa fa-instagram"></i></a></span>
                     </div>
                     <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none; top:0;" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content bg-transparent border-0">
                                 <div class="modal-header border-0">
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                                 </div>
                                 <div class="modal-body">
                                     <img src="img/cinima1.jpg" class="w-100" alt="abc">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="gallery_2i position-relative">
                     <div class="gallery_2i1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/c2.jpg" class="w-100" alt="abc"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="gallery_2i2 bg_backn text-center px-4 position-absolute w-100 h-100 top-0">
                         <span class="d-inline-block"><a class="fs-1 text-white" data-bs-target="#exampleModal4" data-bs-toggle="modal" href="#"><i class="fa fa-instagram"></i></a></span>
                     </div>
                     <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none; top:0;" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content bg-transparent border-0">
                                 <div class="modal-header border-0">
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                                 </div>
                                 <div class="modal-body">
                                     <img src="img/c2.jpg" class="w-100" alt="abc">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="gallery_2i position-relative">
                     <div class="gallery_2i1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/c3.jpg" class="w-100" alt="abc"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="gallery_2i2 bg_backn text-center px-4 position-absolute w-100 h-100 top-0">
                         <span class="d-inline-block"><a class="fs-1 text-white" data-bs-target="#exampleModal5" data-bs-toggle="modal" href="#"><i class="fa fa-instagram"></i></a></span>
                     </div>
                     <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none; top:0;" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content bg-transparent border-0">
                                 <div class="modal-header border-0">
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                                 </div>
                                 <div class="modal-body">
                                     <img src="img/c3.jpg" class="w-100" alt="abc">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="gallery_2i position-relative">
                     <div class="gallery_2i1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/c4.jpg" class="w-100" alt="abc"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="gallery_2i2 bg_backn text-center px-4 position-absolute w-100 h-100 top-0">
                         <span class="d-inline-block"><a class="fs-1 text-white" data-bs-target="#exampleModal6" data-bs-toggle="modal" href="#"><i class="fa fa-instagram"></i></a></span>
                     </div>
                     <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none; top:0;" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content bg-transparent border-0">
                                 <div class="modal-header border-0">
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                                 </div>
                                 <div class="modal-body">
                                     <img src="img/c4.jpg" class="w-100" alt="abc">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="gallery_2i position-relative">
                     <div class="gallery_2i1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/c5.jpg" class="w-100" alt="abc"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="gallery_2i2 bg_backn text-center px-4 position-absolute w-100 h-100 top-0">
                         <span class="d-inline-block"><a class="fs-1 text-white" data-bs-target="#exampleModal7" data-bs-toggle="modal" href="#"><i class="fa fa-instagram"></i></a></span>
                     </div>
                     <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none; top:0;" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content bg-transparent border-0">
                                 <div class="modal-header border-0">
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                                 </div>
                                 <div class="modal-body">
                                     <img src="img/c5.jpg" class="w-100" alt="abc">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section id="event" class="p_3">
     <div class="container-xl">
         <div class="row event_1">
             <div class="col-md-6">
                 <div class="event_1l pt-5">
                     <span class="fa fa-film col_oran"></span>
                     <h6 class="text-muted mt-3">Upcoming Event</h6>
                     <h1 class="mb-0 font_50 text-flicker-in-glow-normal">Register Yourself Now for the Events</h1>
                     <p class="mt-3">Every man must decide whether he will walk in the light of creative altruism or in the darkness of eritdestructive selfishness. Ut porttitor et lectus ut tempus. Aliquam lacinia justo.</p>
                     <h6 class="mb-0 mt-4"><a class="button_2" href="blog.php">More Info</a></h6>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="event_1r">
                     <div class="event_1ri row">
                         <div class="col-md-5 p-0 col-sm-5">
                             <div class="event_1ril position-relative">
                                 <div class="event_1ril1">
                                     <div class="grid clearfix">
                                         <figure class="effect-jazz mb-0">
                                             <a href="#"><img src="img/show1.jpg" height="240" class="w-100" alt="abc"></a>
                                         </figure>
                                     </div>
                                 </div>
                                 <div class="event_1ril2 position-absolute w-100 top-0">
                                     <h6 class="mb-0 d-inline-block bg_oran text-white p-2 px-4 font_14"> 22 AUG, 2025</h6>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-7 p-0 col-sm-7">
                             <div class="event_1rir px-4 shadow_box">
                                 <h6 class="font_14"><i class="fa fa-clock-o col_oran me-1"></i> 14:00 - 18:00 <i class="fa fa-map-marker col_oran me-1 ms-3"></i> Karachi</h6>
                                 <h5 class="mt-3"><a href="#">Best Magical Movies Ever Made</a></h5>
                                 <h6 class="mb-0 mt-4"><a class="button_2" href="blog.php">Read More</a></h6>
                             </div>
                         </div>
                     </div>
                     <div class="event_1ri row mt-4">
                         <div class="col-md-5 p-0 col-sm-5">
                             <div class="event_1ril position-relative">
                                 <div class="event_1ril1">
                                     <div class="grid clearfix">
                                         <figure class="effect-jazz mb-0">
                                             <a href="#"><img src="img/show.jpg" height="240" class="w-100" alt="abc"></a>
                                         </figure>
                                     </div>
                                 </div>
                                 <div class="event_1ril2 position-absolute w-100 top-0">
                                     <h6 class="mb-0 d-inline-block bg_oran text-white p-2 px-4 font_14"> 23 SEP, 2025</h6>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-7 p-0 col-sm-7">
                             <div class="event_1rir px-4 shadow_box">
                                 <h6 class="font_14"><i class="fa fa-clock-o col_oran me-1"></i> 16:00 - 19:00 <i class="fa fa-map-marker col_oran me-1 ms-3"></i> Lahor</h6>
                                 <h5 class="mt-3"><a href="#">The Strange Music Concert</a></h5>
                                 <h6 class="mb-0 mt-4"><a class="button_2" href="blog.php">Read More</a></h6>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section>

 <section id="testim" class="p_3  carousel_p">
     <div class="container-xl">
         <div class="row testim_1">
             <div class="col-md-6">
                 <div class="testim_1l">
                     <span class="fa fa-film col_oran"></span>
                     <h6 class="text-muted mt-3">Our Feedbacks</h6>
                     <h1 class="mb-0 font_50 text-flicker-in-glow-normal">What They’re Talking About us?</h1>
                     <p class="mt-3">Every man must decide whether he will walk in the light of creative altruism or in the darkness of eritdestructive selfishness. Ut porttitor et lectus ut tempus. Aliquam lacinia justo.</p>
                     <h6 class="mb-0 mt-4"><a class="button_2" href="#">View All Feedbacks</a></h6>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="testim_1r mt-5">
                     <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                         <div class="carousel-indicators">
                             <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                             <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
                         </div>
                         <div class="carousel-inner bg-dark">
                             <div class="carousel-item active">
                                 <div class="testim_1i row">
                                     <div class="col-md-12">
                                         <div class="testim_1i1  p-4 clearfix">
                                             <span class="d-inline-block  text-white text-center span_1 rounded-circle"><i class="fa fa-quote-left"></i></span>
                                             <div class="testim_1i1i clearfix mt-3">
                                                 <span><img src="img/man.jpg" height="50px" width="50px" alt="abc" class="rounded-circle me-3 float-start"></span>
                                                 <h6 class="mb-0 fw-bold text-uppercase"> Eget Nulla <br> <span class="col_oran font_14 fw-normal">Customer</span></h6>
                                             </div>
                                             <p class="mb-0 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer typesetting, remaining essentially
                                                 unchanged.
                                             </p>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <div class="testim_1i row">
                                     <div class="col-md-12">
                                         <div class="testim_1i1 p-4 clearfix">
                                             <span class="d-inline-block bg_oran text-white text-center span_1 rounded-circle"><i class="fa fa-quote-left"></i></span>
                                             <div class="testim_1i1i clearfix mt-3">
                                                 <span><img src="img/woman.avif" height="50px" width="55px" alt="abc" class="rounded-circle me-3 float-start"></span>
                                                 <h6 class="mb-0 fw-bold text-uppercase"> Abgeli White <br> <span class="col_oran font_14 fw-normal">Customer</span></h6>
                                             </div>
                                             <p class="mb-0 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer typesetting, remaining essentially
                                                 unchanged.
                                             </p>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section>

 <section id="trend_o" class="p_3 px_4">
     <div class="container-fluid">
         <div class="row trend_1 text-center mb-4">
             <div class="col-md-12">
                 <span class="fa fa-film col_oran"></span>
                 <h6 class="text-muted mt-3 ">New Upcoming Movies</h6>
                 <h1 class="mb-0 font_50 text-flicker-in-glow-normal">Movies Coming Soon</h1>
             </div>
         </div>
         <div class="row trend_2">
             <div class="col-md-3 col-sm-6">
                 <div class="trend_2i position-relative">
                     <div class="trend_2i1">
                         <img src="img/money1.cHJkLWVtcy1hc3NldHMvdHZzZWFzb24vUlRUVjEwMTMyOTMud2VicA==" class="w-100" height="380px" alt="abc">
                     </div>
                     <div class="trend_2i2  position-absolute w-100 h-100 top-0 px-4">
                         <h6 class="font_14 text-light">Crime</h6>
                         <h5><a class="text-white a_tag" href="#">Money Hiest <br>Season 6</a></h5>

                     </div>
                 </div>
             </div>
             <div class="col-md-3 col-sm-6">
                 <div class="trend_2i position-relative">
                     <div class="trend_2i1 ">
                         <img src="img/alice.cHJkLWVtcy1hc3NldHMvdHZzZXJpZXMvUlRUVjc4MDcxMS53ZWJw" class="w-100" height="380px" alt="abc">
                     </div>
                     <div class="trend_2i2  position-absolute w-100 h-100 top-0 px-4">
                         <h6 class="font_14 text-light">Thriler</h6>
                         <h5><a class="text-white a_tag" href="#">Alice And Boderlend <br>Season 3</a></h5>

                     </div>
                 </div>
             </div>
             <div class="col-md-3 col-sm-6">
                 <div class="trend_2i position-relative">
                     <div class="trend_2i1">
                         <img src="img/berlin.jpg" height="380px" class="w-100" alt="abc">
                     </div>
                     <div class="trend_2i2  position-absolute w-100 h-100 top-0 px-4">
                         <h6 class="font_14 text-light">Action</h6>
                         <h5><a class="text-white a_tag" href="#">Berlin <br>Season 3</a></h5>

                     </div>
                 </div>
             </div>
             <div class="col-md-3 col-sm-6">
                 <div class="trend_2i position-relative">
                     <div class="trend_2i1">
                         <img src="img/stranger-things-poster.avif" height="380px" class="w-100" alt="abc">
                     </div>
                     <div class="trend_2i2  position-absolute w-100 h-100 top-0 px-4">
                         <h6 class="font_14 text-light">Horror</h6>
                         <h5><a class="text-white a_tag" href="#">Stranger Things <br>Season 6</a></h5>

                     </div>
                 </div>
             </div>
         </div>
         <div class="row trend_o1 mt-4 w-75 mx-auto">
             <div class="col-md-12">
                 <div class="trend_o1i1 bg_backn pt-5 pb-5 px-4">
                     <div class="trend_o1i1i row">
                         <div class="col-md-8">
                             <div class="trend_o1i1il pt-4">
                                 <h2 class="mb-0 text-white">
                                     40% Discount for Students</h2>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="trend_o1i1ir text-end">
                                 <h6 class="mb-0 mt-4"><a class="button_3" href="ticket.php">Book Your Ticket</a></h6>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="tiles py-5">
     <div class="container">
         <div class="row">
             <div class="row trend_1 text-center mb-4">
                 <div class="col-md-12">
                     <span class="fa fa-film col_oran"></span>
                     <h6 class="text-muted mt-3">Directly Blog Posts</h6>
                     <h1 class="mb-0 font_50 text-flicker-in-glow-normal">Latest News & Articles <br> from the Posts</h1>
                 </div>
             </div>
             <?php
                $sql = "SELECT * FROM blog order by id asc limit 3";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                     <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                         <div class="card h-100 bg-dark text-light ">
                             <div class="blog_h1m1">
                                 <div class="blog_h1m1">
                                     <div class="grid clearfix">
                                         <figure class="effect-jazz mb-0">
                                             <a href="blog_details.php?id=<?php echo $row['id']; ?>"><img height="300px" src="../images/movies/<?php echo htmlspecialchars($row['image']); ?>" class="w-100" alt="img25"></a>
                                         </figure>
                                     </div>
                                 </div>
                             </div>
                             <div class="blog_h1m2 shadow_box bg-dark p-4">
                                 <h4><a href="blog_details.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['title']); ?></a></h4>

                                 <h5 class="fs-6"><a class="button_1" href="blog_details.php?id=<?php echo $row['id']; ?>">Read More</a></h5>
                                 <hr>
                                 <h6 class="mt-4 mb-0 font_14"><i class="fa fa-user col_oran me-1"></i> <a href="#">Admin</a>
                                     <span class="pull-right"><i class="fa fa-comment-o col_oran me-1"></i> <a href="#">0 Comments</a></span>
                                 </h6>
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

 <section id="footer_t">
     <div class="container-fluid">
         <div class="footer_t1 row">
             <div class="col-md-4 p-0">
                 <div class="footer_ti position-relative">
                     <div class="footer_ti1">
                         <div class="grid clearfix ">
                             <figure class="effect-jazz mb-0 ">
                                 <a href=""><img src="img/multiple.jpg" class="w-100" alt="img25"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="footer_ti2 bg_back pt-5 text-center px-4 position-absolute w-100 h-100 top-0 bg_backo">
                         <a href="movie.php"><span class="d-inline-block bg-white rounded-circle col_oran fs-1"><i class="fa fa-youtube-play"></i></span></a>
                         <h2 class="mb-0 text-white mt-3">Top 5 Movies in Theaters</h2>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 p-0">
                 <div class="footer_ti position-relative">
                     <div class="footer_ti1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/come.jpg" class="w-100" alt="img25"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="footer_ti2 bg_backn1 pt-5 text-center px-4 position-absolute w-100 h-100 top-0">
                         <a href="movie.php"><span class="d-inline-block bg-white rounded-circle col_oran fs-2"><i class="fa fa-film"></i></span></a>
                         <h2 class="mb-0 text-white mt-3">Watch Coming Soon Movies</h2>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 p-0">
                 <div class="footer_ti position-relative">
                     <div class="footer_ti1">
                         <div class="grid clearfix">
                             <figure class="effect-jazz mb-0">
                                 <a href="#"><img src="img/hm.jpg" class="w-100" alt="img25"></a>
                             </figure>
                         </div>
                     </div>
                     <div class="footer_ti2 bg_back pt-5 text-center px-4 position-absolute w-100 h-100 top-0 bg_backo">
                         <a href="movie.php"><span class="d-inline-block bg-white rounded-circle col_oran fs-1"><i class="fa fa-video-camera"></i></span></a>
                         <h2 class="mb-0 text-white mt-3"> Hot Movies Trailers Live Now</h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php
    include("footer.php");
    ?>