<!DOCTYPE html>
<html>
    <head>
        <title>Age Display</title>
    </head>
    <body>
        <form method="post" style="width:300px;margin:auto">
            Enter Age:<input type="text" name="age">
            <input type="submit" name="submit">
            <?php
                if(isset($_POST['submit']) && isset($_POST['age'])){
                    $age = $_POST['age'];
                    $message= $age>18?'Age is greater than 18':'Age is less than 18';
                    echo $message;
                }
            ?>
        </form>
    </body>
</html>