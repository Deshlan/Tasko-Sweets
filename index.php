
<!DOCTYPE html>
<html lang="en">
<?php include "Head.php" ?>
<body>
<?php include "Connection.php";
      include "Nav.php" ?>

    <section id="hero">
        <h4>Just for you</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 30% off!</p>
        <button onclick="window.location.href='shop.php'">Shop Now</button>
        </section>

    <section id="product1" class="section-p1">
        <h2>Deals Of The Week</h2>
    <div id="countdown">
        <script>
            var countDownDate = new Date().getTime() + (7 * 24 * 60 * 60 * 1000);
            var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
    
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
           document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
           + minutes + "m " + seconds + "s ";
    
          if (distance < 0) {
          clearInterval(x);
          document.getElementById("countdown").innerHTML = "EXPIRED";
        }
        }, 1000);
        </script>
    </div>
        <p>Best deals to benefit your wants and desires!</p>
        <div class="pro-container">
            <div class="pro">
                <img class="pro-img"src="IMG/HersheysKisses.jpeg" alt="">
                <div class="des">
                    <span>Hersheys</span>
                    <h5>Kisses</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R45</h4>
                </div> 
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
                </div>
            <div class="pro">
                <img src="IMG/SourPatchKidsOriginal.jpeg" alt="">
                <div class="des">
                    <span>Sour Patch kids</span>
                    <h5>Original</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R50</h4>
                </div>
                 <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/FeastablesOriginal.jpeg" alt="">
                <div class="des">
                    <span>Feastables</span>
                    <h5>Original</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R50</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/SkittlesOriginal.jpeg" alt="">
                <div class="des">
                    <span>Skittles</span>
                    <h5>Original </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R25</h4>
                </div>
                 <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/MikeAndIkeOriginal.jpeg" alt="">
                <div class="des">
                    <span>MikeAndIke</span>
                    <h5>Original</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R34</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/DrumstickSquashies.jpeg" alt="">
                <div class="des">
                    <span>Drumstick</span>
                    <h5>Squashies</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R45</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/TrufflesLindt.jpeg" alt="">
                <div class="des">
                    <span>Lindt</span>
                    <h5>Chocolate Candy Truffles</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R65</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/MikeAndIkeTropicalTyphoon.jpeg" alt="">
                <div class="des">
                    <span>MIKE AND IKE</span>
                    <h5>Tropical Typhoon</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R35</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
        </div>
    </section>

    <div id="product-detail-modal" class="product-detail-modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <img id="modal-img" src="" alt="">
            <div class="des">
                <span id="modal-brand"></span>
                <h5 id="modal-name"></h5>
                <div class="star" id="modal-star">
                    <!-- Stars will be added here dynamically -->
                </div>
                <h4 id="modal-price"></h4>
                <p id="modal-description"></p>
            </div>
            <button type="button" name="add_to_cart" class="add-to-cart-button">Add to Cart</button>
        </div>
    </div>
    
    <section id="banner" class="section-m1">
        <h4>Do you<span> Love Candy</span>Just as much as us?</h4>
        <h2>Up to <span>30% OFF</span> On all Products </h2>
        <button class="normal" onclick="window.location.href='shop.php'">Explore More</button>

    </section>

    <section id="product1" class="section-p1">
        <h2>New in stock</h2>
        <p></p>
        <div class="pro-container">
            <div class="pro">
                <img src="IMG/FeastablesMilk.jpeg" alt="">
                <div class="des">
                    <span>Feastables</span>
                    <h5>Milk chocolate</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R40</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/FeastablesChocolateSeaSalt.jpeg" alt="">
                <div class="des">
                    <span>Feastables</span>
                    <h5>Chocolate Sea Salt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R40</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/FeastablesOriginal.jpeg" alt="">
                <div class="des">
                    <span>Feastables</span>
                    <h5>Original Chocolate</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R40</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/FeastablesDeezNutz.jpeg" alt="">
                <div class="des">
                    <span>Feastables</span>
                    <h5>Deez Nutz</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R40</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/FeastablesQuinoa.jpeg" alt="">
                <div class="des">
                    <span>Feastables</span>
                    <h5>Quinoa Crunch Chocolate</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R40</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/FeastablesCrunch.jpeg" alt="">
                <div class="des">
                    <span>Feastables</span>
                    <h5>Crunch</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R40</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/FeastablesAlmond.jpeg" alt="">
                <div class="des">
                    <span>Feastables</span>
                    <h5>Almond Chocolate</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R40</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
            <div class="pro">
                <img src="IMG/FeastableKarlGummies.jpeg" alt="">
                <div class="des">
                    <span>Feastables</span>
                    <h5>karl Gummies</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R45</h4>
                </div>
                <a href="#"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Deals FOr You!</h4>
            <h2>Buy 1 Get 1 Free</h2>
            <span>The Best Classic Sweets are on sale</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Winter</h4>
            <h2>The new season draws Near</h2>
            <span>Shop from our new variety</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Chocolate Collection -30% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Jelly Collection -30% OFF</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>SEASONAL SALE</h2>
            <h3> Collection -30% OFF</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up to our newsletters?</h4>
            <p>Get E-mail Updates about our latest shop and <span>Special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address:</strong>Drive </p>
            <p><strong>Phone:</strong>Drive </p>
            <p><strong>Hours:</strong>Drive </p>
            <div class="follow">
                <h4>follow us to get latest news</h4>
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
            <a href="#">Delivery information </a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Conditions Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart </a>
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