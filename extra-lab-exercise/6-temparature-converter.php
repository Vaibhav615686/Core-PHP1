<!DOCTYPE html>
<html>

<head>
    <title>Temparature Converter</title>
</head>

<body>
    <form method="post" style="width:200px;margin:auto">
        Enter Temparature:
        <input type="text" name="temp">
        Select Unit:<br>
        <select name="unit">
            <option value="c">Celcius</option>
            <option value="f">ferhanhit</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Covert">
        <?php
        if (isset($_POST['temp']) && $_POST['temp'] && isset($_POST['unit']) && $_POST['unit'] && isset($_POST['submit'])) {
            $temp = $_POST['temp'];
            $unit = $_POST['unit'];
            if($unit=='f'){
                $celcius = ($temp - 32) * 5/9;
                echo "<br>Converted Temperature in celcius is:".$celcius." C";
            }else{
                $ferhanhit = ($temp * 9/5) + 32;
                echo "<br>Converted Temparature in ferhanhit is:".$ferhanhit." F";
            }
        }
        ?>
    </form>
</body>

</html>