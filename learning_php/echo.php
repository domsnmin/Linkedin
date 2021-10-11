<?php
$name = "Teresa"; // Heading 1
$city = "NYC";
$movie = "Star Wars"; // Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";

echo "<h1>Hello, $name!</h1>\n\n";

?>

<!-- or, alternatively
Note: HTML cannot work inside the PHP,
        where PHP can work insie HTML...!  -->

<h1>
    Hello, <?php echo $name; ?>! 
</h1>

<?php

echo "<p>so glad you can join us in $city today! You will be <b>$friend</b>'s guide as you do a range of activities</P>\n\n";

echo "<p>You will end your day by seeing <i>$movie</i> at 7:00pm. Make sure to bring the money you've been provided. The movie ticket is \$12. $friend's vavourite candy is $candy, so grab some of those too.</P>\n\n";

echo "<p>...and of-course, \"May the force be with you!\"</p>";

?>



