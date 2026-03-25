
<?php
function Display()
{
    static $x = 0;    
    $x++;             /// static variouble can use in side the function and it will not be destroyed after the function is executed. it will keep the value of x and when we call the function again it will increment the value of x and print it.
    echo ($x);        /// output is   23456
}
Display();
Display();
Display();
Display();
Display();
Display();
?>