<?php

@include 'Connection.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE cart SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM cart WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM cart");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>cart</title>
   <section id="header">
      <div class="personal_logo">Tasko's</div>

      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.php"
              ><i class="fa fa-shopping-basket" class="active" aria-hidden="true"></i
            ></a>
          </li>
          <a href="index.php" id="close"><i class="ri-close-circle-line"></i></a>
          </ul>
      </div>
      <div id="mobile">
        <a href="cart.php"
          ><i class="fa fa-shopping-basket" aria-hidden="true"></i
        ></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body style="background-image: url('IMG/SweetBackground1.jpg')";>

<div class="container8">
<section class="shopping-cart1">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM cart");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>R<?php echo number_format($fetch_cart['price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>R<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $fetch_cart['price'] * $fetch_cart['quantity'];  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="shop.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>R<?php echo $grand_total; ?></td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
      <div class="share1-container">
         <div>Share your purchase to help our company gain more recognition!</div>
         <div class="icon1">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
         </div>
      </div>
   </div>

</section>

</div>

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
   
<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>