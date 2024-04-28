<?php include 'includes/header.php'; ?>
<div class="container">
    <center>
        <div class="section1">
            <form method="post">
                <img src="images/cookingoil.jpeg" width="100px" height="100px" alt="" srcset="">
                <h3>Create an account</h3>
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $contact = $_POST['contact'];
                    $gender = $_POST['gender'];
                    $address = $_POST['address'];
                    $password = $_POST['password'];
                    $cpassword = $_POST['cpassword'];

                    if ($password === $cpassword) {
                        $select = mysqli_query($conn, "SELECT * FROM tbl_client WHERE cEmail='" . $email . "'");
                        if (mysqli_fetch_array($select)) {
                            echo "<div class='error'>Ooops! The email alraedy Exist</div>";
                        } else {
                            $insert = mysqli_query($conn, "INSERT INTO  tbl_client(cl_id,client,cEmail,contact,g_id,a_id,cPass) 
                            VALUES(null, '" . $name . "', '" . $email . "', '" . $contact . "', '" . $gender . "', '" . $address . "', '" . md5($password) . "')");
                            if ($insert) {
                                $select = mysqli_query($conn, "SELECT * FROM tbl_client 
                                WHERE cEmail = '" . $email . "' and cPass = '" . $password . "'");
                                if ($row = mysqli_fetch_array($select)) {
                                    $_SESSION['id'] = $row['cl_id'];
                                    $_SESSION['cEmail'] = $row['cEmail'];
                                    $_SESSION['client'] = $row['client'];
                                    echo "<script>window.location.href = 'index.php';</script>";
                                } else {
                                    header('location:login.php');
                                }
                            } else {
                                echo "<div class='error'>Oops! Failed to create your account! Please try again later!</div>";
                            }
                        }
                    } else {
                        echo "<div class='error'>Oops! Password does not match!</div>";
                    }
                }
                ?>
                <input type="name" name="name" id="" placeholder="Enter Full Name" autofocus required>
                <input type="email" name="email" id="" placeholder="example@gmail.com" required>
                <input type="text" name="contact" id="" placeholder="Ex: 075276482684" required>
                <select name="gender" id="" required>
                    <option value="">Select your gender</option>
                    <?php
                    $select = mysqli_query($conn, "SELECT * FROM tbl_gender");
                    while ($row = mysqli_fetch_assoc($select)) {
                        ?>
                        <option value="<?php echo $row['g_id']; ?>"><?php echo $row['gender']; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br>
                <select name="address" id="" required>
                    <option value="">Select your Address</option>
                    <?php
                    $select = mysqli_query($conn, "SELECT * FROM tbl_address");
                    while ($row = mysqli_fetch_assoc($select)) {
                        ?>
                        <option value="<?php echo $row['a_id']; ?>"><?php echo $row['address']; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br>
                <input type="password" name="password" id="" placeholder="Password" required>
                <input type="password" name="cpassword" id="" placeholder="Confirm Password" required>
                <br>
                <input type="submit" name="submit" class="login-btn" value="Sign Up">
                <br>
                <span>Have an account already? <a href="login.php">Login</a></span>
            </form>
        </div>
    </center>
</div>
<?php include 'includes/footer.php' ?>