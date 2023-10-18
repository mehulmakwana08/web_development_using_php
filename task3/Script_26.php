<?php

function generate_random_number($min, $max) {
  return rand($min, $max);
}
$random_number = generate_random_number(5, 25);


echo $random_number;
?>
