<?php

// Match Statement - Basic

$x = 10;

$result = match ($x) {
        1 => '$x is 1',
        2 => '$x is 2',
        default => '$x is neither 1 or 2',
};

echo $result;

// Combining multiple statements

$x = -1;

$result = match ($x) {
    -2, -1, 0 => '$x is not positive',
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neither 3',
};

echo '<p>';
echo $result;
echo '</p>';

// execute functions based on where check it.


function add_to_x($x) {
    return $x + 5;
};

$x = 0;

$result = match ($x) {
    -2, -1, 0 => add_to_x($x),
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neither 3',
};

echo '<p>';
echo $result;
echo '</p>';

// Check for boolean conditon

$x = 2;

$result = match(true) {
    $x <= 0 => '$x is not positive',
    $x == 1 => '$x is 1',
    $x == 2 => '$x is 2',
    default => '$x is neither 1 or 2',
};

echo $result;

// Convert "Switch" to "Match" statement

// Switch -

$turtle = 'Leo';
$bandana = '';

switch ($turtle) {
    case 'Leo':
        $bandana = 'blue';
        break;
    case 'Raph':
        $bandana = 'red';
        break;
    case 'Mike':
        $bandana = 'orange';
        break;
    case 'Don':
        $bandana = 'purple';
        break;
}

echo "<p>$bandana</p>";

// to Match -

$turtle = 'Mike';

$bandana = match($turtle) {
    'Leo' => 'blue',
    'Raph' => 'red',
    'Mike' => 'orange',
    'Don' => 'purple',
    default => 'Please, a character from Ninja Turtle!'
};

echo $bandana;