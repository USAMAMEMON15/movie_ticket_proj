<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Movie-Flix Ticket Booking</title>
    <!-- Favicon icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/blog.css" rel="stylesheet">
    <style>
        /* ... your existing styles ... */
        body {
            background: url("img/back.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: bottom;
        }

        #Box {
            color: white;
            border-radius: 20px;
            padding: 50px 50px;
            backdrop-filter: blur(10px);
            box-shadow: 0px 0px 30px rgba(255, 255, 237, 0.317);
            border: 2px solid rgba(255, 255, 255, 0.17);
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
                                    <h4 class="text-center mb-4 fw-bolder"><span style="color: #D96C2C;">Ticket </span>Booking</h4>

                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Select User</label>
                                                <select class="form-control" name="u_r_id">
                                                    <?php
                                                    $sql = "SELECT * FROM users";
                                                    $result = $conn->query($sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>">
                                                            <?php echo $row['name'] ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Select Show</label>
                                                <select class="form-control" name="show_id">
                                                    <?php
                                                    $sql = "SELECT s.id, m.title, t.name AS theater, sc.screen_name, s.show_time 
                                                            FROM shows s
                                                            JOIN movies m ON s.movie_id = m.id
                                                            JOIN screens sc ON s.screen_id = sc.id
                                                            JOIN theaters t ON sc.theater_id = t.id";
                                                    $result = $conn->query($sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $formattedTime = date('Y-m-d H:i', strtotime($row['show_time']));
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>">
                                                            <?php echo $row['title'] . " - " . $row['theater'] . " (" . $formattedTime . ")" ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Ticket Price</label>
                                                <select class="form-control" name="ticket_price" required>
                                                    <!-- FIXED: Added proper values -->
                                                    <option value="1,000">1,000 Regular/seat</option>
                                                    <option value="1,200">1,200 Premium/seat</option>
                                                    <option value="2,000">2,000 Vip/seat</option>
                                                    <option value="1,400">1,400 Trending/seat</option>
                                                    <option value="1,800">1,800 Popular/seat</option>
                                                    <option value="1,900">1,900 New/seat</option>
                                                </select>
                                            </div>
                                            <div class="display-6">
                                                <button type="submit" name="submit" class="btn btn-outline-light mt-2">Add Booking</button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- PHP Processing -->
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $user_id = $_POST['u_r_id'];
                                        $show_id = $_POST['show_id'];
                                        $ticket_price = $_POST['ticket_price']; // Changed variable name

                                        // Use prepared statement with correct column names
                                        $stmt = $conn->prepare("INSERT INTO bookings (name, title, total_amount, status) 
                                                               VALUES (?, ?, ?, 'booked')");
                                        // FIXED: Changed parameter types to "iid" (int, int, decimal)
                                        $stmt->bind_param("iid", $user_id, $show_id, $ticket_price);
                                        $result = $stmt->execute();

                                        if ($result == true) {
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
            title: '<span style=color: #D96C2C;>Your Ticket Has Been Booked!</span><br>Wait For the Email.'
        });

        setTimeout(() => {
            window.location.href = 'ticket.php';
        }, 3300); // Wait for toast to finish before redirecting
    </script>";
                                        } else {
                                            echo "<script> 
                                                alert('Error: " . $stmt->error . "');
                                            </script>";
                                        }
                                        $stmt->close();
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>