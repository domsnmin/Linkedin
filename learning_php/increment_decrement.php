<?php

// Basic

$a = $a + 1;
$a++;

$b = $b - 1;
$b--;


// Post-increment

$a = 5;
// This will still be 5
echo 'The value of $a is ' . $a++ . '<br>';
// This will NOW be 6
echo 'Now $a is ' . $a . '<br>';

// exit();

// Pre-increment

$a = 5;
// This will be 6
echo 'The value of $a is ' . ++$a . '<br>';
// This will STILL be 6
echo 'Now $a is ' . $a . '<br>';

// exit();

// Post-decrement

$a = 5;

echo 'The value of $a is ' . $a-- . '<br>';
echo 'Now $a is ' . $a . '<br>';

// exit();

// Pre-decrement

$a = 5;

echo 'The value of $a is ' . $a . '<br>';
echo 'Now $a is ' . $a . '<br>';


// Letters - Increment / Decrement

$a = 'A';
echo '$a is ' . ++$a . '<br>';


// Using shorthand -  Arithmetic Operations for assignments

$a = 1;

$a += 5;
echo "$a<br>";

$a -= 5;
echo "$a<br>";

$a *= 5;
echo "$a<br>";

$a / 5;
echo "$a<br>";


// Challange

$a = ( 14 + 82 - 32 / 2 ) ** 2;
$b = 18 * ( 3 / 6 - 9 ) * 10;
$c = 5 * ( 12 / 2 - 8 * 4 + 12 * 6 );

$result = array ($a, $b, $c);

echo '<pre>';
print_r($result);
echo '</pre>';

// OR,...

$result = array();

$result[] = ( 14 + 82 - ( 32 / 2 ) ) **2;
$result[] = 18*((3/6)-9)*10;
$result[] = 5*((12/2)-(8*4)+(12*6));

echo '<pre>';
print_r($result);
echo '</pre>';