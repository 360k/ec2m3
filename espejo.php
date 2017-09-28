<?php
$original = ['1,2,7,4,2,1'];
$espejo = array_reverse($original);
$convertido = array_reverse($original, true);
print_r($original);
print_r($convertido);
 ?>
