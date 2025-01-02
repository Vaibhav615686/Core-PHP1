<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Calculator</title>
</head>
<body>
    <h1>Enhanced Calculator</h1>
    <form method="post">
        <label for="num1">Enter First Number:</label>
        <input type="number" step="any" name="num1" id="num1" required>
        <br><br>
        
        <label for="operator">Choose Operation:</label>
        <select name="operator" id="operator" required>
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
            <option value="%">Modulus (%)</option>
            <option value="^">Exponentiation (^)</option>
            <option value="√">Square Root (√)</option>
        </select>
        <br><br>

        <label for="num2">Enter Second Number (if needed):</label>
        <input type="number" step="any" name="num2" id="num2">
        <br><br>

        <button type="submit">Calculate</button>
    </form>

    <h2>Result:</h2>
    <p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
            $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
            $operator = $_POST['operator'];

            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    echo "$num1 + $num2 = $result";
                    break;
                case '-':
                    $result = $num1 - $num2;
                    echo "$num1 - $num2 = $result";
                    break;
                case '*':
                    $result = $num1 * $num2;
                    echo "$num1 * $num2 = $result";
                    break;
                case '/':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "$num1 / $num2 = $result";
                    } else {
                        echo "Error: Division by zero is not allowed.";
                    }
                    break;
                case '%':
                    $result = $num1 % $num2;
                    echo "$num1 % $num2 = $result";
                    break;
                case '^':
                    $result = pow($num1, $num2);
                    echo "$num1 ^ $num2 = $result";
                    break;
                case '√':
                    if ($num1 >= 0) {
                        $result = sqrt($num1);
                        echo "√$num1 = $result";
                    } else {
                        echo "Error: Square root of a negative number is not allowed.";
                    }
                    break;
                default:
                    echo "Invalid operator. Please select a valid operation.";
            }
        }
        ?>
    </p>
</body>
</html>
