<?php 

include "array_class.php";

$proj = new array_class();
echo "<br>";
$proj->push_num(10,2);
echo "<br>";
$proj->pull_array();

echo "<br>Your Number is: ".$proj->get_val(1);

