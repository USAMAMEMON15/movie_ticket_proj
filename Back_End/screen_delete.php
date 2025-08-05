<?php
include("conn.php");

$id = (int)$_GET['id']; // Safe casting

$sql = "DELETE FROM screens WHERE id = $id";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Screen Deleted</title>
    <!-- Include SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php if ($result === true): ?>
    <script>
        Swal.fire({
            title: 'Screen Deleted!',
            text: 'Screen has been deleted successfully.',
            icon: 'success',
            showConfirmButton: false,
            timer: 2000,
            didClose: () => {
                window.location.href = 'screen_show.php';
            }
        });
    </script>
<?php else: ?>
    <script>
        Swal.fire({
            title: 'Error!',
            text: 'Failed to delete the Screen.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
<?php endif; ?>
</body>
</html>
