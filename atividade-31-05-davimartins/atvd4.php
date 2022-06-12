<?php
    //CRIA VÁRIAVEIS
    $j = 0;
    for ($i = 0; $i < 30; $i++) { 
        $j += 1;
        $$i = $j;
    }

    //IMPRIME ELAS
    foreach ($GLOBALS as $key) {
        echo "$key ; ";
    }
    echo "<br><br>";
    print_r($GLOBALS);

?>