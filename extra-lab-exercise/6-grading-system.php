<!DOCTYPE html>
<html>

<head>
    <title>Grading System</title>
</head>

<body>
    <form method="post" style="width:200px;margin:auto">
        Enter Marks:
        <input type="text" name="marks"><br>
        <input type="submit" name="submit">
        <?php
        echo '<br>';
        if (isset($_POST['marks']) && isset($_POST['submit'])) {
            $marks = $_POST['marks'];
            if ($marks < 0 || $marks > 100) {
                echo "Invalid marks. Please enter a value between 0 and 100.";
            } else {
                // Determine grade based on marks
                if ($marks >= 90) {
                    $grade = "A";
                } elseif ($marks >= 80) {
                    $grade = "B";
                } elseif ($marks >= 70) {
                    $grade = "C";
                } elseif ($marks >= 60) {
                    $grade = "D";
                } else {
                    $grade = "Fail";
                }
            
                // Output the grade
                echo "Marks: $marks<br>";
                echo "Grade: $grade";
            }
        }
        ?>

    </form>
</body>

</html>