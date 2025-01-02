<!DOCTYPE html>
<html>
    <head><title>Switch case multiple case</title></head>
    <body>
        <form method="post" style="width: 200px;margin:auto">
            Enter grade:
            <input type="text" name="grade"><br>
            <input type="submit" name="submit">
            <?php
            echo '<br>';
            if(isset($_POST['submit']) && isset($_POST['grade'])){
                $grade = $_POST['grade'];
                switch (strtoupper($grade)) { // Ensure the input is case-insensitive
                    case 'A':
                    case 'B':
                        echo "Excellent work! Keep it up!";
                        break;
                    case 'C':
                        echo "Good job, but there's room for improvement.";
                        break;
                    case 'D':
                        echo "You passed, but consider putting in more effort.";
                        break;
                    case 'F':
                        echo "Unfortunately, you failed. Don't give up; try harder next time.";
                        break;
                    default:
                        echo "Invalid grade. Please enter a valid grade (A, B, C, D, F).";
                        break;
                }
            }
            ?>
        </form>
    </body>
</html>