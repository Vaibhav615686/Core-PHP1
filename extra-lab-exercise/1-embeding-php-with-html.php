<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Generated Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">User Information</h1>
    <?php
    // User data
    $users = [
        ["Name" => "John Doe", "Email" => "john@example.com", "Age" => 28],
        ["Name" => "Jane Smith", "Email" => "jane@example.com", "Age" => 34],
        ["Name" => "Sam Brown", "Email" => "sam@example.com", "Age" => 22]
    ];
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user["Name"]; ?></td>
                <td><?php echo $user["Email"]; ?></td>
                <td><?php echo $user["Age"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
