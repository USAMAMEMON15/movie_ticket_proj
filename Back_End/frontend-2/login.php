<?php
include("conn.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //  Get user by email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        //  Verify password with hash
        if (password_verify($password, $user['password_hash'])) {
            echo <<<EOT
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.onload = function() {
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
            title: '<span style="color: #D96C2C;">User login Successfully!</span><br>Redirecting to login page...'
        });
        setTimeout(() => {
            window.location.href = 'index.php';
        }, 3300);
    }
</script>
EOT;
        } else {
     echo <<<EOT
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.onload = function() {
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
            icon: 'error',
            title: '<span style="color: #D96C2C;">Incorroct password1</span>'
        });
    }
</script>
EOT;
        }
    } else {
    echo <<<EOT
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.onload = function() {
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
            icon: 'error',
            title: '<span style="color: #D96C2C;">Email Not Found</span>'
        });
    }
</script>
EOT;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie-Flix-Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/list.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        body {
            background: url("img/back-ground.png");
        }

        #Box {
            
            color: white;
            border-radius: 20px;
            padding: 50px 50px;
            backdrop-filter: blur(10px);
            box-shadow: 0px 0px 30px rgba(255, 255, 237, 0.317);
            border: 2px solid rgba(255, 255, 255, 0.17);

        }
    
        span{
            color: #D96C2C;;
        }
         .btn{
         transition: 0.3s;
    display: inline-block;
    font-size: 15px;
    background: #d96c2c;
    color: #fff;
	margin:5px;
}
a{
            color: #D96C2C;

}
h5{
            color: #D96C2C;

}
    </style>
</head>

<body>

    <div class="main_o main">
        <div class="main_o1 ">
            <section id="header">
                <nav class="navbar navbar-expand-md navbar-light px_4" id="navbar_sticky">
                    <div class="container-fluid">
                        <a class="navbar-brand  p-0 fw-bold text-white" href="index.php"><i
                                class="fa fa-modx col_oran"></i> Movie-Flix </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="ms-auto mt-2 mb-2 ">
					         <a href="faqs.php"><button class="btn">FAQS</button> </a>  
                            </div>

                        </div>
                    </div>
                </nav>
            </section>

        </div>
    </div>


    <!-- main section -->

    <div class="container mx-lg-auto mt-5 mb-5 ">
        <div class="row" id="Box">
            <div class="col-lg-5 col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center  mb-4"><span>Login</span> Your Account</h4>
                                <Form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group ">
                                        <label class="pb-2"><strong>Email & Number</strong></label>
                                        <input type="email" name="email" class="form-control rounded-3"
                                            placeholder="Enter your Email Or Number">
                                    </div>
                                    <div class="form-group pt-4">
                                        <label class="pb-2"><strong>Password</strong></label>
                                        <input type="password" name="password" class="form-control rounded-3"
                                            placeholder="Enter Your Password">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-3 mb-2">
                                        <div class="form-group">
                                            <span><a href="">Forgot Password?</a></span>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" name="submit" class="btn  my-2 mx-0">
                                            Login</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Don't have an account? span<a class="ms-3 fw-bold" href="sign_up.php">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-7">

                <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner  ">
                        <div class="carousel-item active rounded-3 ">
                            <img src="./img./s1.png" class="d-block w-100  " height="400px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <!-- <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p> -->
                            </div>
                        </div>
                        <div class="carousel-item rounded-3">
                            <img src="./img./s2.png" class="d-block w-100  " height="400px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <!-- <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p> -->
                            </div>
                        </div>
                        <div class="carousel-item rounded-3">
                            <img src="./img./s3.png" class="d-block w-100  " height="400px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <!-- <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p> -->
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>



        <!-- main section -->

            </div>

             <section id="foot" class="">
            <div class="container-fluid">
                <div class="footer_1 row pb-4">
                    <div class="col-md-3">
                        <div class="footer_1l">
                            <h4 class="mb-0"><a class="fw-bold text-white" href="index.html"><i
                                        class="fa fa-modx col_oran"></i> Movie Flix </a></h4>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="footer_1r text-end">
                            <ul class="mb-0">
                                <li class="d-inline-block"><a class="text-white-50 a_tag" href="#">Help</a></li>
                                <li class="d-inline-block text-white-50">/</li>
                                <li class="d-inline-block me-2"><a class="text-white-50 a_tag" href="#"> Privacy
                                        Policy</a>
                                </li>
                                <li class="d-inline-block"><a class="social_icon" href="#"> <i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="d-inline-block"><a class="social_icon" href="#"> <i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="d-inline-block"><a class="social_icon" href="#"> <i
                                            class="fa fa-instagram"></i></a></li>
                                <li class="d-inline-block"><a class="social_icon" href="#"> <i
                                            class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer_2 row mt-4">
                    <div class="col-md-3">
                        <div class="footer_2i">
                            <p class="text-white fw-bold fs-5">Buy movie tickets easily with <span>Our Website  </span> </p>
            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_2i">
                            <h5 class="col_oran mb-4">Movies</h5>
                            <div class="row footer_1ism">
                                <h6 class="fw-normal col-md-12 col-6"><a class="text-white-50 a_tag" href="#">
                                        Action</a>
                                </h6>
                                <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#">
                                        Adventure</a></h6>
                                <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#">
                                        Animation</a></h6>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_2i">
                            <h5 class="col_oran mb-4">Links</h5>
                            <div class="row footer_1ism">
                                <h6 class="fw-normal col-md-12 col-6"><a class="text-white-50 a_tag" href="#profile9"> About
                                        Us</a>
                                </h6>
                                
                                <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#">
                                        Latest
                                        Events</a></h6>
                                <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="text-white-50 a_tag" href="#">
                                        Privacy</a></h6>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_2i">
                            <h5 class="col_oran mb-4">Newsletter</h5>
                            <p class="text-white-50">Subscribe to Leitmotif newsletter this very day.</p>
                            <div class="input-group bg-white">
                                <input type="text" class="form-control bg-transparent rounded-0 border-0"
                                    placeholder="Enter Your Email">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary bg-transparent rounded-0 border-0 col_oran p-2"
                                        type="button">
                                        <i class="fa fa-location-arrow"></i></button>
                                </span>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/common.js"></script>



</body>

</html>