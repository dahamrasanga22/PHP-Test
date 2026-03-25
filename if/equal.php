<!-- writ php program to student
 range by cal average -->


<?php
$sub1 = 80;
$sub2 = 60;
$sub3 = 40;
$sub4 = 39;
$sub5 = 70;

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$average = $total / 5;
echo "Average Marks: " . $average . "<br>";

if ($average >= 80) {
    echo "Grade: Distinction";
} elseif ($average >= 60) {
    echo "Grade: First Class";
} elseif ($average >= 50) {
    echo "Grade: Second Class";
} elseif ($average >= 40) {
    echo "Grade: Pass";
} else {
    echo "Grade: Fail";
}
?>