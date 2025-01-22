
<?php

@include 'Connect.php';
// Fetch data from the product table
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Create an array to store the product information
$products = array();

// Fetch and store the product information
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productName = $row['ProductName'];
        $productPrice = $row['ProductPrice'];
        $productImage = $row['ProductImage'];
        $productID = $row['ProductID'];
        $productDescription = $row['ProductDescription'];

        // Create an associative array for each product
        $product = array(
            'ProductName' => $productName,
            'ProductPrice' => $productPrice,
            'ProductImage' => $productImage,
            'ProductID' => $productID,
            'ProductDescription' => $productDescription
        );

        // Add the product to the products array
        $products[] = $product;
    }
}

// Convert the products array to JSON format
$jsonProducts = json_encode($products);

// Specify the path and filename of the JSON file
$jsonFilePath = 'C:\xampp\htdocs\Trial\products.json';

// Write the JSON data to the file
file_put_contents($jsonFilePath, $jsonProducts);

// Close the database connection
$conn->close();
?>
