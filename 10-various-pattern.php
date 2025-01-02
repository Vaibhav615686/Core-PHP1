<?php
//right angle * pattern
for($i=1;$i<5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
?>
<?php
echo "<br><br>";
//right downangle * pattern
for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
?>

<?php
echo "<br><br>";
//Diamond * pattern
for($i=1;$i<5;$i++){
    for($j=$i;$j<5;$j++){
        echo "&nbsp&nbsp";
    }
    for($k=1;$k<=(2*$i-1);$k++){
        echo "* ";
    }
    echo "<br>";
}
for($i=4;$i>=1;$i--){
    for($j=$i;$j<5;$j++){
        echo "&nbsp&nbsp";
    }
    for($k=1;$k<=(2*$i-1);$k++){
        echo "* ";
    }
    echo "<br>";
}
?>