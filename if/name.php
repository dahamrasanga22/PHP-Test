<!-- Write php program to store your name
and if the count of characters in the name
is greater than 5, display a message too long 
name otherwise displayas short name -->

<?php
$name = "Daham R";
if (strlen($name) > 5) {
    echo("too long name");
}
else {
    echo("short name");
};

?>