<?php
echo "Loops in PHP";
echo "<br>";
// Loops in PHP

$languages = array('c','c++','python');
$a = 0;
while ($a <= 10) {
    echo "<br>The value of a is: ";
    echo $a;
    $a++;
}

// Iterating arrays in PHP using while loop
$a = 0;
while ($a < count($languages)) {
    echo "<br>The value of language is: ";
    echo $languages[$a];
    $a++;
}

// Do while loop
$a = 200;
do {
    echo "<br>The value of a is: ";
    echo $a;
    $a++;
} while ($a < 10);

// For loop
for ($a=60; $a < 10; $a++) { 
    echo "<br>The value of a from the for loop is: ";
    echo $a;
}

foreach ($languages as $value) {
    echo "<br>The value from foreach loop is ";
    echo $value;
}

?>