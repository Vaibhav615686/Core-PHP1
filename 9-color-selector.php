<!DOCTYPE html>
<html>
    <head>
        <title>Color Display</title>
    </head>
    <body>
        <form method="post" style="width:300px;margin:auto">
            Enter Color:<input type="text" name="color">
            <input type="submit" name="submit">
            <?php
                if(isset($_POST['submit']) && isset($_POST['color'])){
                    $color = $_POST['color'];
                    echo "<br>COLOR is: ".$color;
                }
            ?>
        </form>
    </body>
</html>