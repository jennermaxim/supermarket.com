<?php session_start();
include 'includes/config.php';
$delete = mysqli_query($conn, "DELETE FROM tbl_client WHERE cl_id = '" . $_SESSION['id'] . "'");
if ($delete) {
    header('location:logout.php');
} else {
    echo "<script>window.onload = () =>{
                alert('Failed to delete your profile');
            }
            </script>";
}