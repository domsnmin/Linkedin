<?php

// Modulus (%)
// Find the remainder of division

$a = 2;
$b = 3;

echo $b % $a; // output > 1.
echo 15 % 9; // output > 6.


// Test a number for ODD or EVEN

$a = 5;

if( $a % 2 == 0 ) {
    echo '<p>$a is EVEN</p>';
} else {
    echo '<p>$a is ODD</p>';
};

// Testing if one value is a factor of another value

$a = 15;
$b = 3;

echo ( $a % $b == 0 ) 
    ? "<p>$b si a vactor of $a</p>" 
    : "<p>$b is not a factor of $a</p>";


// Negative Remainder by negating dividend

$a = 15;

echo -$a % 2;
