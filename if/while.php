<!-- 1st 5 even numbers -->


<?php
$total = 0;
$i = 0;
$num = 0;

while ($i < 5) {
    if ($num % 2 == 0) {
        $total += $num;
        $i++;
    }
    $num++;
}
echo "Total: " . $total . "<br>";
?>



?>
<?php
$num = 2;
$count = 0;
$total = 0;

while ($count < 5) {
    $total = $total + $num;
    $count ++;
    $num = $num + 2;
}
echo ("Total: " . $total);
?>