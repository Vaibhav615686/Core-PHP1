<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Month Finder</title>
</head>
<body>
    <h1>Find the Month</h1>
    <form method="post">
        <label for="monthNumber">Enter a number (1-12):</label>
        <input type="number" id="monthNumber" name="monthNumber" min="1" max="12" required>
        <button type="submit">Find Month</button>
    </form>

    <h2>Result:</h2>
    <p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $monthNumber = intval($_POST['monthNumber']); // Get the input and convert to integer

            // Determine the corresponding month using a switch statement
            switch ($monthNumber) {
                case 1:
                    $month = "January";
                    break;
                case 2:
                    $month = "February";
                    break;
                case 3:
                    $month = "March";
                    break;
                case 4:
                    $month = "April";
                    break;
                case 5:
                    $month = "May";
                    break;
                case 6:
                    $month = "June";
                    break;
                case 7:
                    $month = "July";
                    break;
                case 8:
                    $month = "August";
                    break;
                case 9:
                    $month = "September";
                    break;
                case 10:
                    $month = "October";
                    break;
                case 11:
                    $month = "November";
                    break;
                case 12:
                    $month = "December";
                    break;
                default:
                    $month = "Invalid number. Please enter a number between 1 and 12.";
            }

            // Output the result
            echo "You entered: $monthNumber<br>";
            echo "Corresponding Month: $month";
        }
        ?>
    </p>
</body>
</html>
