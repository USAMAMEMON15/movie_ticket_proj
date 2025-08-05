<?php
include("conn.php");

if (isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $phone    = $_POST['phone'];

    // PASSWORD WIL BE SUMBIT IN HASH FORM FOR SECURITY SO NO ONE CAN SEE THE PASSWORD
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // CHECK IF USER ALREADY EXISIT
    $check = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $checkResult = $check->get_result();

   if ($checkResult->num_rows > 0) {
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
            title: '<span style="color: #D96C2C;">Email already registered!</span>'
        });
    }
</script>
EOT;
} else {
    // Insert new user securely using prepared statement
    $stmt = $conn->prepare("INSERT INTO users (name, email, password_hash, phone_number, created_at) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $name, $email, $password_hash, $phone);

    if ($stmt->execute()) {
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
            title: '<span style="color: #D96C2C;">User Registered Successfully!</span><br>Redirecting to login page...'
        });
        setTimeout(() => {
            window.location.href = 'login.php';
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
            title: '<span style="color: #D96C2C;">Registration Failed!</span>'
        });
    }
</script>
EOT;
    }
}
}
?>


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	
    <title>Movie-Flix Sign up</title>
    <!-- Favicon icon -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/faq.css" rel="stylesheet">
    <style>
body{
            background:url("img/back.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position:bottom;
        }
#Box{
    color:white;
    border-radius: 20px; 
    padding: 50px 50px;
    backdrop-filter: blur(10px);
    box-shadow: 0px 0px 30px rgba(255, 255, 237,0.317);
  border: 2px solid rgba(255, 255, 255,0.17);
}

    </style>

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div id="Box" class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form id="Form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" name="name" class="form-control" Required  placeholder="Enter Your username">
                                        </div>
                                        <div class="form-group pt-3">
                                            <label><strong>Email</strong></label>
                                            <input type="email"  name="email" class="form-control" Required  placeholder="Enter your Email">
                                        </div>
                                        <div class="form-group pt-3">
                                            <label><strong>Password</strong></label>
                                            <input type="password"  name="password" class="form-control"  Required  placeholder="Enter Your Password">
                                        </div>
                                          <div class="form-group pt-3">
                                            <label><strong>Number</strong></label>
                                            <input type="int"  name="phone" class="form-control"Required  placeholder="Enter Your Number" >
                                        </div>
                                        <div class="display-6">
                                           <a> <button type="submit" name="submit"   href="./login.php" class="btn btn-outline-light mt-2">Sign up</button> </a>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login.php ">Log in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>