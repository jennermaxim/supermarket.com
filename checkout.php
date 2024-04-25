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
                            <div class="price">Price: 3200=/</div>
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
        <div class="profile">
            <table>
                <tr>
                    <th colspan="2" class="th1">ACCOUNT INOFORMATION</th>
                </tr>
                <th class="th3">LABLE</th>
                <th class="th3">INOFORMATION</th>
                <tr>
                    <th class="th2">Name:</th>
                    <td>Jenner Maxim</td>
                </tr>
                <tr>
                    <th class="th2">Contact:</th>
                    <td>07573937478</td>
                </tr>
                <tr>
                    <th class="th2">Email:</th>
                    <td>maxim@gmail.com</td>
                </tr>
                <tr>
                    <th class="th2">Address:</th>
                    <td>Nsambya</td>
                </tr>
            </table>
        </div>
        <div class="payment">
            <h1>PAYMENT METHOD</h1>
            <form method="post">
                <?php
                for ($i = 0; $i < 3; $i++) {
                    ?>
                    <input class="pay-radio" type="radio" name="mono" id="" value="1">
                    <span class="pay-span">Mobile Money</span>
                    <br>
                    <?php
                }
                ?>
                <input type="submit" value="Checkout" class="pay-btn">
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>