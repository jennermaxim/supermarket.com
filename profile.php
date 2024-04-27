<?php include 'includes/header.php'; ?>
<?php
if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
?>
<div class="main">
    <div class="profile">
        <div class="profile-img">
            <img src="images/cookingoil.jpeg" alt="" srcset="">
        </div>
        <?php
        $select = mysqli_query($conn, "SELECT * FROM tbl_client, tbl_gender, tbl_address 
        WHERE(tbl_client.g_id = tbl_gender.g_id AND tbl_client.a_id = tbl_address.a_id 
        AND tbl_client.cl_id = '" . $_SESSION['id'] . "')");
        $row = mysqli_fetch_array($select);
        ?>
        <div class="profile-details">
            <div class="name">Name: <span><?php echo $row['client']; ?></span></div>
            <div class="email">Email: <span><?php echo $row['cEmail']; ?></span></div>
            <div class="contact">Contact: <span><?php echo $row['contact']; ?></span></div>
            <div class="gender">Gender: <span><?php echo $row['gender']; ?></span></div>
            <div class="address">Address: <span><?Php echo $row['address']; ?></span></div>
            <div class="update-delete">
                <a href="update-profile.php?client=<?php echo $_SESSION['id']; ?>" class="update">Update Profile</a>
                <a href="delete-profile.php?client=<?php echo $_SESSION['id']; ?>" class="delete">Delete Profile</a>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>