<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            text-align: left;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Product Information</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price ($)</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Multi-dimensional array to store product information
            $products = [
                ["name" => "Laptop", "price" => 1200, "stock" => 10],
                ["name" => "Smartphone", "price" => 800, "stock" => 25],
                ["name" => "Headphones", "price" => 150, "stock" => 50],
                ["name" => "Monitor", "price" => 300, "stock" => 15],
                ["name" => "Keyboard", "price" => 50, "stock" => 30]
            ];

            // Loop through the array and display the information in table rows
            foreach ($products as $product) {
                echo "<tr>";
                echo "<td>{$product['name']}</td>";
                echo "<td>{$product['price']}</td>";
                echo "<td>{$product['stock']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
