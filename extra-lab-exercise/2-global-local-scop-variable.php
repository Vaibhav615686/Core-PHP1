<?php
// Global variable
$globalVar = "I am a global variable";

function testScope() {
    // Local variable
    $localVar = "I am a local variable";

    // Accessing the global variable inside the function using the global keyword
    global $globalVar;

    // Modifying the global variable
    $globalVar = "I have been modified inside the function";

    echo "Inside function:<br>";
    echo "Global variable: " . $globalVar . "<br>"; // Accessing the global variable
    echo "Local variable: " . $localVar . "<br>";  // Accessing the local variable
}

// Call the function
testScope();

echo "<br>Outside function:<br>";
echo "Global variable: " . $globalVar . "<br>"; // The modified global variable

// Attempt to access the local variable outside the function
if (isset($localVar)) {
    echo "Local variable: " . $localVar . "<br>";
} else {
    echo "Local variable is not accessible outside the function.<br>";
}
?>
