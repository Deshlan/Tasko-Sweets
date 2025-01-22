<?php
session_start();
@include 'Connection.php';
@include 'functions';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)){
        $query = "SELECT * FROM users WHERE email = '$email' limit 1";
        $result = mysqli_query($conn, $query);
        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password){
                    echo "<script> location.href='index.php'; </script>";
                    die;
                }
            }
        }
        echo "Wrong information added!";
    }else{
        echo "All fields are required";
    }
}
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <script
      src="https://kit.fontawesome.com/dd8ca4d5e5.js"
      crossorigin="anonymous"
    ></script>
  </head>

<body style="background-image: url('IMG/SweetBackground1.jpg');">
    <div class="container5">
        <h1> Log into Account</h1>

    <form action="login.php" method="POST">
    <label for="email">Email:</label>
        <div class="Custom-input">
            <input type="email" name="email" placeholder="Enter Your Email Address">
            <i class='ri-mail-fill'></i>
        </div>    
    <label for="password">Password:</label>
        <div class="Custom-input">
            <input type="password" name="password" placeholder="Enter Your Password">
            <i class='ri-lock-fill'></i>
        </div>
        <button class="login">Login</button>
        <div class="links">
            <a href="register.php">Dont Have an Account? Register</a>
        </div>
    </form>
</div>

</body>
</html>