<!DOCTYPE html>
<html>
    <head>
        <title>Palindrome Checker</title>
    </head>
    <body>
        <form method="post" style="width:200px;margin:auto;">

            <h2>Palindrom Checker</h2>
            <br>
            Enter String:
            <input type="text" name="string">
            <br>
            <input type="submit" name="submit">
            <?php
            echo "<br>";
            function palindromChecker($str){
                $mainString = $str;
                $reversedScreen = strrev($mainString);
                return strtolower($mainString) === strtolower($reversedScreen);
            }
            if(isset($_POST['string']) && $_POST['string'] && isset($_POST['submit'])){
                $str = $_POST['string'];
                if(palindromChecker($str)){
                    echo "Stirng $str is Palindrom";
                }else{
                    echo "String $str is not Palindrom";
                }
            }
            ?>
        </form>
    </body>
</html>