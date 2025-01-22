<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop</title>
    <link rel="stylesheet" href="style.css" />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <script
      src="https://kit.fontawesome.com/dd8ca4d5e5.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <section id="header">
      <div class="personal_logo">Tasko's</div>

      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="shop12.php">Shop</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.php"
              ><i class="fa fa-shopping-basket" aria-hidden="true"></i
            ></a>
          </li>
          <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.html"
          ><i class="fa fa-shopping-basket" aria-hidden="true"></i
        ></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>

    <section id="page-header">
      <h2>#Stay Home</h2>
      <p>Save more with coupons & up to 30% off!</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="header">
        
        <script src="addcart.js"></script>
                </div>
        <div class="pro-container">

        <?php
        //connect to the database
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tasko_sweets";

        //creating the connection to the database
        $connection = mysqli_connect($host, $username, $password, $dbname);

        //checking if the connection works
        if (!$connection) {
            die("This Connection has Failed!" . mysqli_connect_error());
        }

        //fetching all products from the database
        $allProducts = $connection->query("SELECT ProductID,ProductName, ProductDescription, ProductImage, ProductPrice FROM products");


        //check if any products exist
        if ($allProducts->num_rows > 0) {
            // Loop through each product
            while ($product = $allProducts->fetch_assoc()) {
                // Generate a unique section ID for each product
                $sectionID = 'product' . $product['ProductID'];

                // Displaying the product information using PHP
                echo '<section id="' . $sectionID . '" class="section-p1">';
                echo '  <div class="pro-container">';
                echo '    <div class="pro" onclick="window.location.href=\'sproduct.php?ProductID=' . $product['ProductID'] . '\';">';
                echo '      <img src="' . $product['ProductImage'] . '" alt="" />';
                echo '      <div class="des">';
                echo '        <span>' . $product['ProductName'] . '</span>'; // Display the product name
                echo '        <h5>' . $product['ProductDescription'] . '</h5>';
                echo '        <div class="star">';
                echo '          <i class="fas fa-star"></i>';
                echo '          <i class="fas fa-star"></i>';
                echo '          <i class="fas fa-star"></i>';
                echo '          <i class="fas fa-star"></i>';
                echo '        </div>';
                echo '        <h4>R' . $product['ProductPrice'] . '</h4>';
                echo '      </div>';
                echo '      <a href="cart.php?ProductID=' . $product['ProductID'] . '"><i class="fa fa-shopping-cart cart"></i></a>';
                echo '    </div>';
                echo '  </div>';
                echo '</section>';
            }
        } else {
            echo "No products found.";
        }

        //closing the database connection
        $connection->close();
        ?>
            </div>
    </section>
</body>
