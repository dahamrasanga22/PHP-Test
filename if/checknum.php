
<!-- Write to php programe to store 
a number check whether it's equal 
to 0 ornegative or positive-->

<?php
$num = -5; 

// Check the number
if ($num > 0) {
    echo "The number is positive.";
} elseif ($num < 0) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}
?>