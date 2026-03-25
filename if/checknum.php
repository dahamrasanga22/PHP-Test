
<!-- Write to php programe to store 
a number check whether it's equal 
to 0 ornegative or positive-->

<?php
$num = random_int(-10, 10); // Generate a random number between -10 and 10
echo "The number is: " . $num . "<br>";

// Check the number
if ($num > 0) {
    echo "The number is positive.";
} elseif ($num < 0) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}
?>