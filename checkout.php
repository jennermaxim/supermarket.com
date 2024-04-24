<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="orders">
        <div class="header">
            <h1>YOUR ORDERS</h1>
        </div>
        <div class="tab">
            <ul>
                <?php
                for ($i = 0; $i < 3; $i++) {
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
                <div class="bottom"></div>
                <h1>Total Price: <span>300000/=</span></h1>

            </ul>
        </div>
    </div>
    <div class="cashout">
        <div class="profile"></div>
        <div class="payment"></div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>