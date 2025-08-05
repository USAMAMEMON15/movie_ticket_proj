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
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Movie-Flix Login</title>
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
            <div  class="row justify-content-center h-100 align-items-center">
                <div id="Box" class="col-md-6">
                    <div class="authincation-content">
                        <div  class="row no-gutters">
                            <div  class="col-xl-12">
                                <div  class="auth-form">
                                    <h4 class="text-center mb-4">Login your account</h4>
                                   <Form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group ">
                                            <label class="pb-2"><strong>Email & Number</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter your Email Or Number">
                                        </div>
                                        <div class="form-group pt-4">
                                            <label class="pb-2"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control"  placeholder="Enter Your Password">
                                        </div>
                                         <div class="form-row d-flex justify-content-between mt-3 mb-2">
                                            <div class="form-group">
                                                <a href="">Forgot Password?</a>
                                            </div>
                                        </div>
                                       <div class="display-6">
                                            <button type="submit" name="submit"  class="btn btn-outline-light mt-2"> Login</button>
                                        </div>
                                    </form>
                                   <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="signup.php">Sign up</a></p>
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