<?php
// Declare variables of different types
$integerVar = 42;          // Integer
$floatVar = 3.14;          // Float
$stringVar = "123";        // String containing a number
$booleanVar = true;        // Boolean
$stringNonNumeric = "Hello, PHP!"; // String without numeric content

echo "Before and After Type Casting:<br>";

// Integer to Float
echo "<br>Integer to Float:<br>";
var_dump($integerVar);
$floatFromInteger = (float)$integerVar;
var_dump($floatFromInteger);

// Float to Integer
echo "<br>Float to Integer:<br>";
var_dump($floatVar);
$intFromFloat = (int)$floatVar;
var_dump($intFromFloat);

// String to Integer
echo "<br>String to Integer:<br>";
var_dump($stringVar);
$intFromString = (int)$stringVar;
var_dump($intFromString);

// Boolean to String
echo "<br>Boolean to String:<br>";
var_dump($booleanVar);
$stringFromBoolean = (string)$booleanVar;
var_dump($stringFromBoolean);

// String (non-numeric) to Integer
echo "<br>Non-Numeric String to Integer:<br>";
var_dump($stringNonNumeric);
$intFromNonNumericString = (int)$stringNonNumeric;
var_dump($intFromNonNumericString);

// String to Boolean
echo "<br>String to Boolean:<br>";
var_dump($stringVar);
$boolFromString = (bool)$stringVar;
var_dump($boolFromString);

// Float to Boolean
echo "<br>Float to Boolean:<br>";
var_dump($floatVar);
$boolFromFloat = (bool)$floatVar;
var_dump($boolFromFloat);
?>
