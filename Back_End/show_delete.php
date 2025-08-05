<?php
include("conn.php");

$id = (int)$_GET['id']; // Safe casting

$sql = "DELETE FROM shows WHERE id = $id";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Deleted</title>
    <!-- Include SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php if ($result === true): ?>
    <script>
        Swal.fire({
            title: 'Shows Deleted!',
            text: 'Shows has been deleted successfully.',
            icon: 'success',
            showConfirmButton: false,
            timer: 2000,
            didClose: () => {
                window.location.href = 'show_shows.php';
            }
        });
    </script>
<?php else: ?>
    <script>
        Swal.fire({
            title: 'Error!',
            text: 'Failed to delete the Shows.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
<?php endif; ?>
</body>
</html>
