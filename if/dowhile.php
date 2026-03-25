
<!-- writ php program to store ur name  
 then calculate the number of characters
 and print the number starting from 1 to character count
 of the user name using do while loop  -->




<?php
$name = "Daham Rasanga";  
$length = strlen($name);
$i = 1;

do {
    echo $i . " ";
    $i++;
} while ($i <= $length);
?>