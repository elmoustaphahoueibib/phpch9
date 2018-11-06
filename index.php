<?php

$tab = [ 3,5,6.4,true];
function extractbytype($tab, $type)
{
    $res = array();
 foreach ($tab as $element) {
     if (gettype($element) == $type) {
         array_push($res, $element);
     };
 }
 print_r($res);
}
extractbytype($tab,"boolean");

