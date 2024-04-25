<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="section">
        <h1>SECTION A</h1>
        <div class="items">
            <?php
            for ($count = 0; $count < 5; $count++) {
                ?>
                <div class="item">
                    <img src="images/cookingoil.jpeg" alt="">
                    <hr>
                    <div class="name-details">
                        <h3>Cooking Oil</h3>
                        <h4>
                            Section: <span>A</span> Numbers <span>A001</span>
                        </h4>
                        <div>Price: <span class="price">Ugx:5200</span> </div>
                        <button class="btn" type="button">Add to Cart</button>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="section">
        <h1>SECTION B</h1>
        <div class="items">
            <?php
            for ($count = 0; $count < 5; $count++) {
                ?>
                <div class="item">
                    <img src="images/rice.jpg" alt="">
                    <hr>
                    <div class="name-details">
                        <h3>Cooking Oil</h3>
                        <h4>
                            Section: <span>A</span> Numbers <span>A001</span>
                        </h4>
                        <div>Price: <span class="price">Ugx:5200</span> </div>
                        <button class="btn" type="button">Add to Cart</button>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="section">
        <h1>SECTION C</h1>
        <div class="items">
            <?php
            for ($count = 0; $count < 5; $count++) {
                ?>
                <div class="item">
                    <img src="images/cookingoil.jpeg" alt="">
                    <hr>
                    <div class="name-details">
                        <h3>Cooking Oil</h3>
                        <h4>
                            Section: <span>A</span> Numbers <span>A001</span>
                        </h4>
                        <div>Price: <span class="price">Ugx:5200</span> </div>
                        <button class="btn" type="button">Add to Cart</button>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    
</div>

<?php include 'includes/footer.php'; ?>