<?php
session_start();

@include 'Connection.php';

if(isset($_POST['add_product'])){
    $p_name = $_POST['ProductName'];
    $p_flavour = $_POST['ProductFlavour'];
    $p_price = $_POST['ProductPrice'];
    $p_image = $_FILES['ProductImage']['name'];
    $p_image_tmp_name = $_FILES['ProductImage']['tmp_name'];
    $p_image_folder = 'uploaded_img/'.$p_image;
 
    // Check if the table exists in the database
    $check_table_query = mysqli_query($conn, "SHOW TABLES LIKE 'products'");
    if(mysqli_num_rows($check_table_query) > 0){
       $insert_query = mysqli_query($conn, "INSERT INTO products (ProductName, ProductFlavour, ProductPrice, ProductImage) VALUES('$p_name', '$p_flavour', '$p_price', '$p_image')") or die('query failed');
 
       if($insert_query){
          move_uploaded_file($p_image_tmp_name, $p_image_folder);
          $message[] = 'Product added successfully';
       }else{
          $message[] = 'Could not add the product';
       }
    }else {
       $message[] = 'Table does not exist';
    }
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('IMG/SweetBackground1.jpg');">
    <h1>Admin Panel - Add Product</h1>
    <li><a href="logout.php">Logout</a></li>

    <?php
    if (isset($successMessage)) {
        echo "<p style='color: green;'>$successMessage</p>";
    }
    if (isset($errorMessage)) {
        echo "<p style='color: red;'>$errorMessage</p>";
    }
    ?>

<section>
    
    <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
       <h3>Add a New Product</h3>
       <input type="text" name="ProductName" placeholder="Enter the product name" class="box" required>
       <input type="text" name="ProductFlavour" placeholder="Enter the product flavour" class="box" required>
       <input type="number" name="ProductPrice" min="0" placeholder="Enter the product price" class="box" required>
       <input type="file" name="ProductImage" accept="image/png, image/jpg, image/jpeg" class="box" required>
       <input type="submit" value="Add Product" name="add_product" class="btn">
    </form>
    
    </section>
    
    
</body>
</html>
