<?php

@include 'Connection.php';
@include 'functions.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['name1'];
    $phone_number = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password1'];
    $delivery_address1 = $_POST['delivery_address1'];
    $delivery_address2 = $_POST['delivery_address2'];
    $delivery_address3 = $_POST['delivery_address3'];

    if(!empty($user_name) && !empty($phone_number)  && !empty($email) && !empty($password) && !empty($delivery_address1) && !empty($delivery_address2) && !empty($delivery_address3)){
        $query = "INSERT INTO users ( name, phone, email, password, delivery_address1, delivery_address2, delivery_address3) values ('$user_name','$phone_number', '$email', '$password', '$delivery_address1', '$delivery_address2', '$delivery_address3')";
        mysqli_query($conn, $query);
        echo "<script> location.href='login.php'; </script>";
        echo "Signup Successful";
        die;
    }else{
        echo"All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body style="background-image: url('IMG/SweetBackground1.jpg');">


    <div class="container6">
        <h1>Register Account</h1>
        <form action="register.php" method="POST">
            <label for="name">Contact Details:</label>
            <div class="Custom-input">
                <input type="text" name="name1" placeholder="Enter Your Name and Surname" required>
                <i class='ri-user-fill'></i>
            </div>
            <label for="phone">Phone Number:</label>
            <div class="Custom-input">
                <input type="phone" name="phone" placeholder="Enter Your Phone number" required>
                <i class='ri-phone-fill'></i>
            </div>
            <label for="email">Email:</label>
            <div class="Custom-input">
                <input type="email" name="email" placeholder="Enter Your Email Address" required>
                <i class='ri-mail-fill'></i>
            </div>
            <label for="password">Password:</label>
            <div class="Custom-input">
                <input type="password" name="password1" placeholder="Enter Your Password" required>
                <i class='ri-lock-fill'></i>
            </div>
            <label for="delivery_address1">Address:</label>
            <div class="Custom-input">
                <input type="delivery_address1" name="delivery_address1" placeholder="Enter Your Address" required>
                <i class='ri-home-3-fill'></i>
            </div>
            <label for="delivery_address2">Suburb:</label>
            <div class="Custom-input">
                <input type="delivery_address2" name="delivery_address2" placeholder="Enter Your Suburb" required>
                <i class='ri-building-fill'></i>
            </div>
            <label for="delivery_address3">Po Box:</label>
            <div class="Custom-input">
                <input type="delivery_address3" name="delivery_address3" placeholder="Enter Your PO Box" required>
                <i class='ri-shield-keyhole-fill'></i>
            </div>
            <div class="links">
                <button type="submit" class="register">Register</button>

                </div>
            <div class="links">
                <span>Already have an account? <a href="login.php">Login here</a></span>
            </div>
        </form>
    </div>
</body>
</html>
