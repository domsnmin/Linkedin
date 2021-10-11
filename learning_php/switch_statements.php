<?php
$total = 3;

switch ($total) {
    case 1:
        echo '<p>$total is 1</p>';
        break;
    case 2:
        echo '<p>$total is 2</p>';
        break;
    case 3:
        echo '<p>$total is 3</p>';
        break;
    default:
        echo '<p>$total is more than 3</p>';
};
?>

<hr>

<!-- with no "break" -->

<?php
$total = 1;
switch ($total) {
    case 1:
        echo '<p>$total is 1</p>';
    case 2:
        echo '<p>$total is 2</p>';
    case 3:
        echo '<p>$total is 3</p>';
    default:
        echo '<p>$total is more than 2</p>';
};
?>

<?php
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

// NOTE
// '' - will NOT work for echo
// eg. echo '<p>$bandana</p>';
?>


<?php

$total = 3;

switch ($total) {
    case 1:
    case 2:
    case 3:
    case 4:
        echo '<p>$total is less than 5</p>';
        break;
    default:
        echo '<p>$total is 5 or more</p>';
};

?>

<!-- Alternative Syntax ( : , endswitch; ) -->

<?php

$total = 3;

switch ($total) :
    case 1:
    case 2:
    case 3:
    case 4:
        echo '<p>$total is less than 5</p>';
        break;
    default:
        echo '<p>$total is 5 or more</p>';
endswitch;

?>