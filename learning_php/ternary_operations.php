<?php

$is_logged_in = true;

$message = "Welcome" . ($is_logged_in ? " back! \n" : "!");

echo $message;

?>

<p>a</p>
<!-- or, you could,.. -->


<?php

$is_logged_in = true;

echo "Welcome" . ($is_logged_in ? " back!" : " to my website");

?>

<p>a</p>

<?php
// $name = isset($name) ? $name : 'Joe';
// echo $name;
?>

<p>a</p>

<?php 

// $name = isset($name) ? $name : '
//     <h3>Answer:</h3>
//     <p>Where is the name? Haven\'t you defined the name?</p>
// '; 

// echo $name;

?>

<?php 
$home_page = true;
if  ( $home_page ) : ?>

    <h1>Welcome to the gome page of my website!</h1>
    <p>Homepage exists.</p>

<?php else : ?>

    <h1>Sorry, wrong address!</h1>
    <p>Homepage dosen't exist.</p>

<?php endif; ?>



<?php 
// $name = "Catherin";
if  ( isset($name) ) : echo $name ?>

<?php else : ?>

    <h1>Sorry, no name is available!</h1>
    <p>Please, register your name.</p>

<?php endif; ?>


<!-- if the name doesn't exist - statement variation -->

<?php

// $name = null;

$name = $name ?: "John";

echo $name;

?>