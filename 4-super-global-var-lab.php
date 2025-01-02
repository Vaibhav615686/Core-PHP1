<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Suber Global Array Example</title>
        <style>
            .table{
                text-align: center;
                width:300px;
                margin:auto;
                background-color: lightcyan;
            }
            .table,.table tr{
                border:1px solid;
            }
        </style>
    </head>
    <body>
        <?php
        if(isset($_POST['submit'])){
            $name= $_POST['name'];
            $email = $_POST['email'];
            echo "Name: ".$name."<br>";
            echo "Email: ".$email."<br>";
        }
        ?>
        <form method="post">
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name">
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email">
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>