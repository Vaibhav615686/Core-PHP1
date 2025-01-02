<!DOCTYPE html>
<html>

<head>
    <title>Restaurant Food Selection</title>
</head>

<body>
    
    <form method="post" style="width:400px;margin:auto">
    <h2>Restaurant Food Category Selection</h2>
        <select name="foodCategory">
            <option value="">Select Food Category</option>
            <option value="Starter">Starter</option>
            <option value="Main Course">Main Course</option>
            <option value="Dessert">Dessert</option>
        </select>
        <input type="submit" name="submit">
        <br>
        <?php
        if (isset($_POST['submit']) && isset($_POST['foodCategory'])) {
            $foodCat = $_POST['foodCategory'];
            switch ($foodCat) {
                case 'Starter':
                    echo "Starter:Spring Roll,Chiness Samosa";
                    break;
                case 'Main Course':
                    echo "Main Course:Tandoori Roti,Paneer Handi,Koya Kaju,Lassi";
                    break;
                case 'Dessert':
                    echo "Dessert:American Dry Fruit Ice Cream";
                    break;
                default:'No case found';
            }
        }
        ?>
    </form>
</body>

</html>