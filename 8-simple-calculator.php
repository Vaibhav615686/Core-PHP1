<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
    <style>
        .table {
            text-align: center;
            width: 300px;
            margin: auto;
            background-color: lightcyan;
        }

        .table,
        .table tr {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <form method="post" style="margin:auto;width:200px">
        <h2>Simple Calculator</h2>
        Number1:
        <br><input type="text" name="no1" style="display:block">
        Number2:<br>
        <input type="text" name="no2" style="display:block"><br>
        <input type="submit" name="operator" value="+">
        <input type="submit" name="operator" value="-">
        <input type="submit" name="operator" value="*">
        <input type="submit" name="operator" value="/">
        <?php
        if (isset($_POST['operator'])) {
            $no1 = $_POST['no1'];
            $no2 = $_POST['no2'];
            $op = $_POST['operator'];
            echo "<br><br>";
            if ($op == '+') {
                echo "Sum: " . $no1 + $no2;
            } else if ($op == '-') {
                echo "Substraction: " . $no1 - $no2;
            }
            if ($op == '*') {
                echo "Multiplication: " . $no1 * $no2;
            }
            if ($op == '/') {
                echo "Division: " . $no1 / $no2;
            }
        }
        ?>
    </form>

</body>

</html>