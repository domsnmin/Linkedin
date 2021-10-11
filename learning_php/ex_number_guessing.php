<!-- # Number Guessing Game
- Given randomly generated number between 1~50.
- and you have a gues..

Create a way to give feedback to the users, such that:
- If they guess correctly, you tell them
- If they guess incorrectly, you tell them if it was too high or too low
- As a bonus, also check to see if the guessed number is out of range -->



<?php

$min = 1;
$max = 50;
$guess_min = -50;
$guess_max = 100;
$guess = 7;
$num = 25;

// using nestted if statement

$guess = rand($guess_min, $guess_max);

if ( $guess < $min || $guess > $max ) {
    echo '<p>Your guess is out of range.</p>';
} else {
    if ( $guess == $num ) {
        echo '<h3>That\'s Correct!</h3>';
    } else if ( $guess < $num )  {
        echo '<p>Sorry, that is too low.</p>';
    } else {
        echo '<p>Sorry, that is too high.';
    }
}

print_r ("<p>$guess</p>");


// exit()

if ( $guess < $min || $guess > $max ) {
    echo '<p>Your guess is out of range.</p>';
    exit;
} 

if ( $guess == $num ) {
        echo '<h3>That\'s Correct!</h3>';
    } else if ( $guess < $num )  {
        echo '<p>Sorry, that is too low.</p>';
    } else {
        echo '<p>Sorry, that is too high.';
}


print_r ("<p>$guess</p>");

