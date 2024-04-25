<?php include 'includes/header.php' ?>
<div class="container">
    <center>
        <div class="section1">
            <form method="post">
                <img src="images/cookingoil.jpeg" width="100px" height="100px" alt="" srcset="">
                <h3>Create an account</h3>
                <input type="name" name="name" id="" placeholder="Enter Full Name" autofocus required>
                <input type="email" name="email" id="" placeholder="example@gmail.com" autofocus required>
                <input type="text" name="contact" id="" placeholder="Ex: 075276482684" autofocus required>
                <select name="gender" id="">
                    <option value="">Select your gender</option>
                    <option value="1">Male</option>
                    <option value="2">Femala</option>
                </select>
                <br>
                <select name="address" id="">
                    <option value="">Select your Address</option>
                    <option value="1">Kabalagala</option>
                    <option value="2">Nsambya</option>
                    <option value="3">Kansana</option>
                    <option value="4">Munyonyo</option>
                </select>
                <br>
                <input type="password" name="password" id="" placeholder="Password" required>
                <input type="password" name="cpassword" id="" placeholder="Confirm Password" required>
                <br>
                <input type="submit" name="submit" class="login-btn" value="Sign Up">
                <br>
                <span>Have an account already? <a href="signup.php">Login</a></span>
            </form>
        </div>
    </center>
</div>
<?php include 'includes/footer.php' ?>