<?php
$array = ['apple', 'banana', 'orange'];
$value = 'orange';
if (in_array($value, $array)) {
    echo 'The string "' . $value . '" exists in the array.';
} else {
    echo 'The string "' . $value . '" does not exist in the array.';
}
?>
