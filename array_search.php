<?php
//Con valor strict a false
$array = ["bnm<->fuyu"];
var_export ($array);
echo array_search("<->",$array,TRUE);
 ?>
