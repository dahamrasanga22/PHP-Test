

<?php

function Display()
{
    static $x = 1;    
    $x++;             /// static variouble can use in side the function and it will not be destroyed after the function is executed. it will keep the value of x and when we call the function again it will increment the value of x and print it.
    echo ($x);   /// output is   234
}
Display();
Display();
Display();
Display();
Display();
Display();
?>