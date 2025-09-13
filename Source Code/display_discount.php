<?php
// get value from html

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $product = $_POST["product_description"];
    $price = $_POST["list_price"];
    $discount_percent = $_POST["discount_percent"];
}

/* Another way to get value from html
   using filter_input function

$product = filter_input(INPUT_POST, 'product_description');
$price = filter_input(INPUT_POST, 'list_price');
$discount_percent = filter_input(INPUT_POST, 'discount_percent');
*/

// calculate discount
$discount = $price * ($discount_percent/100);
$discount_price = $price - $discount;

// formatting display
$formatted_price = '$'.number_format($price,2);
$formatted_discountPercent = $discount_percent."%";
$formatted_discount = '$'.number_format($discount,2);
$formatted_discountPrice = '$'.number_format($discount_price,2);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $formatted_price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $formatted_discountPercent; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $formatted_discount ; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $formatted_discountPrice; ?></span><br>
    </main>
</body>
</html>