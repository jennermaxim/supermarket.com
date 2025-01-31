<?php include 'includes/header.php';
if (isset($_SESSION['id'])) {
    echo "<script>window.location.href = 'index.php';</script>";
}
?>

<div class="container">
    <center class="height">
        <div class="section1">
            <form method="post">
                <img src="images/cookingoil.jpeg" width="100px" height="100px">
                <h3>LOGIN</h3>
                <?php
                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    $select = mysqli_query($conn, "SELECT * FROM tbl_client 
                    WHERE cEmail = '" . $email . "' and cPass = '" . $password . "'");
                    if ($row = mysqli_fetch_array($select)) {
                        $_SESSION['id'] = $row['cl_id'];
                        $_SESSION['cEmail'] = $row['cEmail'];
                        $_SESSION['client'] = $row['client'];
                        echo "<script>window.location.href = 'index.php';</script>";
                    } else {
                        echo "<div class='error'>Ooops! your Email or Password is incorrect!</div>";
                    }
                }
                ?>
                <input type="email" name="email" id="" placeholder="example@gmail.com" autofocus required>
                <br>
                <input type="password" name="password" id="" placeholder="Password" required>
                <br>
                <input type="submit" name="submit" class="login-btn" value="Login">
                <br>
                <span>Don't have an account? <a href="signup.php">Sign Up</a></span>
            </form>
        </div>
    </center>
</div>
<?php include 'includes/footer.php' ?>