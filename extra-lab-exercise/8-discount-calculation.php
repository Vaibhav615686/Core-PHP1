<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculator</title>
</head>
<body>
    <h1>Discount Calculator</h1>
    <form method="post">
        <label for="price">Enter Product Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <button type="submit">Calculate Discount</button>
    </form>

    <h2>Result:</h2>
    <p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the user-defined price
            $price = floatval($_POST['price']);

            // Calculate the discount using the ternary operator
            $discount = $price > 500 ? $price * 0.10 : 0;

            // Calculate the final price
            $finalPrice = $price - $discount;

            // Display the results
            echo "Original Price: $$price<br>";
            echo $discount > 0 
                ? "Discount Applied: $$discount (10%)<br>" 
                : "No Discount Applied.<br>";
            echo "Final Price: $$finalPrice";
        }
        ?>
    </p>
</body>
</html>
