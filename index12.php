

<!DOCTYPE html>
<html lang="en">
<?php include "Head.php"; ?>
<body>
<?php 
    include "Connection.php";
    include "Nav.php"; 
?>

<section id="hero">
    <h4>Deals Just For You</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 30% off!</p>
    <button onclick="window.location.href='shop.php'">Shop Now</button>
    </section>

<section id="featured-products" class="section-p1">
    <h2>Deals Of The Week!</h2>
    <div id="countdown"></div>
    <p>Best deals to benefit your wants and desires!</p>
    <?php
        $connection = mysqli_connect($host, $username, $password, $dbname);

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $allProducts = $connection->query("SELECT productID, ProductName, ProductDescription, ProductImage, ProductPrice FROM products");

        if ($allProducts->num_rows > 0) {
            while ($product = $allProducts->fetch_assoc()) {
                $sectionID = 'product' . $product['productID'];
                echo '<div id="' . $sectionID . '" class="pro-container">';
                echo '    <div class="pro" onclick="window.location.href=\'sproduct.php?ProductID=' . $product['productID'] . '\';">';
                echo '        <img src="' . $product['ProductImage'] . '" alt="' . $product['ProductName'] . '">';
                echo '        <div class="des">';
                echo '            <span>' . $product['ProductName'] . '</span>';
                echo '            <h5>' . $product['ProductDescription'] . '</h5>';
                echo '            <div class="star">';
                echo '                <i class="fas fa-star"></i>';
                echo '                <i class="fas fa-star"></i>';
                echo '                <i class="fas fa-star"></i>';
                echo '                <i class="fas fa-star"></i>';
                echo '            </div>';
                echo '            <h4>R' . $product['ProductPrice'] . '</h4>';
                echo '        </div>';
                echo '        <a href="cart.php?ProductID=' . $product['productID'] . '"><i class="fa fa-shopping-cart cart"></i></a>';
                echo '    </div>';
                echo '</div>';
            }
        } else {
            echo "No products found.";
        }

        $connection->close();
    ?>
</section>

<section id="banner" class="section-m1">
    <h4>Do you <span>Love Sweets</span> just as much as us?</h4>
    <h2>Up to <span>30% OFF</span> on all products!</h2>
    <button class="normal">Explore More</button>
</section>

<section id="new-stock" class="section-p1">
    <h2>New In Stock</h2>
    <p>Summer Specials, Indulge in Decadent Chocolates</p>
    <?php
        $connection = mysqli_connect($host, $username, $password, $dbname);

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $allProducts = $connection->query("SELECT productID, ProductName, ProductDescription, ProductImage, ProductPrice FROM products");

        if ($allProducts->num_rows > 0) {
            while ($product = $allProducts->fetch_assoc()) {
                $sectionID = 'product' . $product['productID'];
                echo '<div id="' . $sectionID . '" class="pro-container">';
                echo '    <div class="pro" onclick="window.location.href=\'sproduct.php?ProductID=' . $product['productID'] . '\';">';
                echo '        <img src="' . $product['ProductImage'] . '" alt="' . $product['ProductName'] . '">';
                echo '        <div class="des">';
                echo '            <span>' . $product['ProductName'] . '</span>';
                echo '            <h5>' . $product['ProductDescription'] . '</h5>';
                echo '            <div class="star">';
                echo '                <i class="fas fa-star"></i>';
                echo '                <i class="fas fa-star"></i>';
                echo '                <i class="fas fa-star"></i>';
                echo '                <i class="fas fa-star"></i>';
                echo '            </div>';
                echo '            <h4>R' . $product['ProductPrice'] . '</h4>';
                echo '        </div>';
                echo '        <a href="cart.php?ProductID=' . $product['productID'] . '"><i class="fa-shopping-cart"></i></a>';
                echo '    </div>';
                echo '</div>';
            }
        } else {
            echo "No products found.";
        }

        $connection->close();
    ?>
</section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up for Newsletters</h4>
        <p>Get E-mail Updates about our latest shop and <span>Special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="normal">Sign Up</button>
    </div>
</section>

<footer class="section-p1">
    <div class="col">
        <h4>Contact</h4>
        <p><strong>Address:</strong> Drive</p>
        <p><strong>Phone:</strong> Drive</p>
        <p><strong>Hours:</strong> Drive</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>
    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>
    <div class="copyright">
        <p>Siveshan Subramani</p>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>
