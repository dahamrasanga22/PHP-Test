<!-- 1st 5 even numbers -->


<?php
$total = 0;
$i = 0;
$num = 0  ;

while ($i < 5) {
    if ($num % 2 == 0) {
        $total += $num;
        $i++;
    }
    $num++;
}
echo "Total: " . $total;
?>