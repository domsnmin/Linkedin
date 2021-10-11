<?php


// if-elseif-else

if (10 < 1) {
    echo '<p>We stopped at if.</p>';
} else if (10 < 4) {
    echo '<p>We Stopped at the first esle if.</p>';
} else if (10 < 11) {
    echo 'We stopped at the second else if.</p>';
} else if (10 < 20) {
    echo '<p>We stopped at the 3rd else if</p>';
} else {
    echo '<p>None of the conditions are ture, we never stopped, so this is the else.</p>';
}

echo 'out of the if';



// Yoga Conditionals

$i = 10;

if ( $i = 11 ) {
echo '<p>TRUE</p>';
} else {
    echo '<p>Wecome to the site!</p>';
}

?>



<!-- // Ternary Operations  (Alternative / Short-hand to if-Statement) -->

<h3>Ternary Operations</h3>

<?php

$is_logged_in = true;

// if ($is_logged_in) {
//     $message = "Welcom back";
// } else {
//     $message = "Hello there!";
// }

$message = $is_logged_in ? "Welcome Back!" : "Hello There.";

echo $message;

?>

