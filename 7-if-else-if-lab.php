<!DOCTYPE html>
<html>
    <head>
        <title>Find No even or odd</title>
    </head>
    <body>
        <form method="post">
            Enter Number:<input type="text" name="no"><br>
            <input type="submit" name="submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $no = $_POST['no'];
                if($no%2==0){
                    echo "<br>No is even";
                }if($no%2!=0){
                    echo "<br>No is odd";
                }
            }
        ?>
    </body>
</html>

