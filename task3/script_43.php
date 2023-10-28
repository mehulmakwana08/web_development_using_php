<!-- Develop a PHP script to extract the keys from an associative array using the array_keys()
function. -->

<?php

$student = array(
    "first_name" => "Mehul",
    "last_name" => "Makwana",
    "age" => 20,
    "email" => "mehulmakwana172@gmail.com "
);

$keys = array_keys($student);

echo "Keys from the associative array:<br>";

print_r($keys);

?>
