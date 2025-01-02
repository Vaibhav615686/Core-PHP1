<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST Form Example</title>
</head>
<body>
    <h1>Form Submission Using GET and POST</h1>

    <!-- GET Form -->
    <h2>GET Method Form</h2>
    <form action="" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age">
        <br>
        <button type="submit">Submit with GET</button>
    </form>

    <!-- POST Form -->
    <h2>POST Method Form</h2>
    <form action="" method="post">
        <label for="name_post">Name:</label>
        <input type="text" id="name_post" name="name_post">
        <br>
        <label for="age_post">Age:</label>
        <input type="number" id="age_post" name="age_post">
        <br>
        <button type="submit">Submit with POST</button>
    </form>

    <h2>Submitted Data:</h2>
    <?php
    // Handling GET request
    if (!empty($_GET)) {
        echo "<h3>Data Submitted via GET:</h3>";
        echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
        echo "Age: " . htmlspecialchars($_GET['age']) . "<br>";
        echo "URL: " . htmlspecialchars($_SERVER['REQUEST_URI']) . "<br>";
    }

    // Handling POST request
    if (!empty($_POST)) {
        echo "<h3>Data Submitted via POST:</h3>";
        echo "Name: " . htmlspecialchars($_POST['name_post']) . "<br>";
        echo "Age: " . htmlspecialchars($_POST['age_post']) . "<br>";
        echo "POST data is not visible in the URL.";
    }
    ?>
</body>
</html>
