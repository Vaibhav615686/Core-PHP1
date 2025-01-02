<?php
$a = "greetings";
$$a = 34;
// Print the value of the dynamically named variable
echo "Value of variable 'greetings': " . $greetings . "<br>"; // Outputs: Hello, PHP!

// Print the value using variable variables
echo "Value using variable variable syntax: " . $$a . "<br>"; // Outputs: Hello, PHP!

?>