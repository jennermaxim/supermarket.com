<?php include 'includes/header.php' ?>
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
                                echo "<div class='success'>Congratulations, your account has been Created Successfuly.</div>";
                            }
                        }
                    } else {
                        echo "<div class='error'>Oops! Password does not match!</div>";
                    }
                }
                ?>
                <?php
                $select = mysqli_query($conn, "SELECT * FROM tbl_client, tbl_gender, tbl_address 
                WHERE(tbl_client.g_id = tbl_gender.g_id AND tbl_client.a_id = tbl_address.a_id 
                AND tbl_client.cl_id = '" . $_SESSION['id'] . "')");
                $row = mysqli_fetch_array($select);
                ?>
                <input type="name" name="name" id="" value="<?php echo $row['client']; ?>" autofocus required>
                <input type="email" name="email" id="" value="<?php echo $row['cEmail']; ?>" required>
                <input type="text" name="contact" id="" value="<?php echo $row['contact']; ?>" required>
                <select name="gender" id="" required>
                    <option value="<?php echo $row['g_id']; ?>"><?php echo $row['gender']; ?></option>
                    <?php
                    $select_gender = mysqli_query($conn, "SELECT * FROM tbl_gender");
                    while ($row_gender = mysqli_fetch_assoc($select_gender)) {
                        ?>
                        <option value="<?php echo $row_gender['g_id']; ?>"><?php echo $row_gender['gender']; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br>
                <select name="address" id="" required>
                    <option value="<?php echo $row['a_id']; ?>"><?php echo $row['address']; ?></option>
                    <?php
                    $select_address = mysqli_query($conn, "SELECT * FROM tbl_address");
                    while ($row_address = mysqli_fetch_assoc($select_address)) {
                        ?>
                        <option value="<?php echo $row_address['a_id']; ?>"><?php echo $row_address['address']; ?></option>
                        <?php
                    }
                    ?>
                </select>               
                <br>
                <input type="submit" name="submit" class="login-btn" value="Update">
                <br>
                <span>Have an account already? <a href="login.php">Login</a></span>
            </form>
        </div>
    </center>
</div>
<?php include 'includes/footer.php' ?>