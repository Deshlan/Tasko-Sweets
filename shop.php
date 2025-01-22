<?php
@include 'Connection.php';

if (isset($_POST['add_to_cart'])) {

  $product_ID = $_POST['fk_I'];
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = 1;

  $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE fk_I = '$product_ID'");

  if (mysqli_num_rows($select_cart) > 0) {
    echo '<p>product already added to cart</p>';
  } else {
    $insert_product = mysqli_query($conn, "INSERT INTO `cart` (name, price, quantity, image, fk_I) VALUES('$product_name', '$product_price', '$product_quantity', '$product_image', '$product_ID')");
    echo '<p>product added to cart succesfully</p>';
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/dd8ca4d5e5.js" crossorigin="anonymous"></script>
</head>

<body>
  <section id="header">
    <div class="personal_logo">Tasko's</div>

    <div>
      <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-bag">
          <a href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
        </li>
        <a href="index.php" id="close"><i class="ri-close-circle-line"></i></a>
      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
      <i id="bar" class="fas fa-outdent"></i>
    </div>
  </section>

  <section id="page-header">
    <h2>#Stay at Home</h2>
    <p>Save more with coupons & up to 30% off!</p>

  </section>
  <section id="product1" class="section-p1">

    <!--<form action="shop.php" method="post" class="pro-container">-->

      <?php
      $select_products = mysqli_query($conn, "SELECT * FROM products");
      if (mysqli_num_rows($select_products) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_products)) {

      ?>
         
        <form action="shop.php" method="post" class="pro-container">
          <div class="pro">
            <img src="uploaded_img/<?php echo $fetch_product['ProductImage']; ?>" alt="">
            <div class="des">
              <span><?php echo $fetch_product['ProductName']; ?></span>
              <h5><?php echo $fetch_product['ProductFlavour']; ?></h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>R<?php echo $fetch_product['ProductPrice']; ?></h4>
              
              <input type="hidden" name="product_name" value="<?php echo $fetch_product['ProductName']; ?>">
              <input type="hidden" name="fk_I" value="<?php echo $fetch_product['ProductID']; ?>">
              <input type="hidden" name="product_price" value="<?php echo $fetch_product['ProductPrice']; ?>">
              <input type="hidden" name="product_image" value="<?php echo $fetch_product['ProductImage']; ?>">
            </div>
            <a href="shop.php"><button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button></a>
          </div> 
        </form>
        
         


      <?php
        };
      };
      ?>

    <!--</form>-->
  </section>

  <section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#"><i class="fa fa-long-arrow-alt-right"></i></a>
  </section>

  <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Sign Up for Newsletters</h4>
      <p>
        Get E-mail Updates about our latest shop and
        <span>Special offers.</span>
      </p>
    </div>
    <div class="form">
      <input type="text" placeholder="Your email address" />
      <button class="normal">Sign Up</button>
    </div>
  </section>

  <footer class="section-p1">
    <div class="col">
      <h4>Contact</h4>
      <p><strong>Address:</strong>Drive</p>
      <p><strong>Phone:</strong>Drive</p>
      <p><strong>Hours:</strong>Drive</p>
      <div class="follow">
        <h4>Follow us</h4>
        <div class="icon">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram-f"></i>
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