<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            text-align: center;
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
    <h1 style="text-align: center;">Multiplication Table (1 to 10)</h1>
    <table>
        <thead>
            <tr>
                <th>X</th>
                <?php
                // Generate table headers (1 to 10)
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Generate multiplication rows
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>"; // Row header
                for ($j = 1; $j <= 10; $j++) {
                    $result = $i * $j;
                    echo "<td>$result</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
