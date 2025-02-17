<?php session_start(); ?>
<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsiveness.css">
    <script src="assets/js/script.js" defer></script>
</head>

<body oncontextmenu="return false">
    <nav class="header">
        <div class="logo">
            <a href="index.php">
                <h1>SUPERMARKET</h1>
            </a>
        </div>
        <div class="search">
            <form method="post">
                <img src="images/search.png" alt="" srcset="" width=20px height="20px">
                <input type="search" name="" id="">
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="links">
            <!-- <img class="menu" src="images/menu32.png" alt=""> -->
            <ul>
                <?php
                if (isset($_SESSION['id'])) {
                    ?>
                    <li><a class="link" href="profile.php"><?php echo $_SESSION['client']; ?></a></li>
                    <li><a class="link" href="logout.php">Logout</a></li>
                    <li><a class="link" href="#">Cart</a>
                        <div class="tab">
                            <ul>
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    ?>
                                    <li>
                                        <div class="cart">
                                            <div class="cart-items img">
                                                <img src="images/cookingoil.jpeg" alt="" srcset="" width="50px" height="50px">
                                            </div>
                                            <div class="cart-items name">Cooking Oil</div>
                                            <div class="cart-items close">
                                                <input type="submit" value="X">
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                                <li>
                                    <a href="checkout.php" class="checkout-btn">
                                        Proceed to Checkout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php
                } else {
                    ?>
                    <li><a class="link" href="login.php">Login</a></li>

                    <?php
                }
                ?>
            </ul>
        </div>
    </nav>