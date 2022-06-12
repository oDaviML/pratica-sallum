<?php
    $a = 0;

    for ($i=1; $i < 1000; $i+=2) { 
        $$i = $i;
    }
        print_r($GLOBALS);
?>