<!DOCTYPE html>
    <html>
        <head>
            <title>Nested if condition</title>
        </head>
        <body>
            <form method="post" style="width:200px;margin:0 auto">
            Enter Number:
            <input type="text" name="no">
            <br>
            <input type="submit" name="submit">
            <?php  
                echo "<br>";
                if(isset($_POST['no']) && isset($_POST['submit'])){
                    $no = $_POST['no'];
                    if($no>0){
                        if($no%2==0){
                            echo "No is positive and even";
                        }else{
                            echo "No is possitive and odd";
                        }
                    }else if($no==0){
                        echo "No is zero and even";
                    }else{
                        if($no%2==0){
                            echo "No is negative and even";
                        }else{
                            echo "No is negative and odd";
                        }
                    }
                }
            ?>
            </form>  
        </body>
    </html>