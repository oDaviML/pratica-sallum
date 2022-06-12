<?php
    echo "<h1>ATVD-2 Bhaskara</h1>";

    $A = $_POST["variavel-a"];
    $B = $_POST["variavel-b"];
    $C = $_POST["variavel-c"];

    $delta = ($B ** 2) - ((4 * $A) * $C);
    $x1 = 0; $x2 = 0;


    if ($A != 0) {
        if ($delta < 0) 
        {
            echo "<h2>Delta negativo, equação não possui raízes</h2>";
        }
        else {
            $x1 = ((-$B + sqrt($delta)) / (2 * $A));
            $x2 = ((-$B - sqrt($delta)) / (2 * $A));
            echo "<h2>X1 = ".$x1."</h2>";
            echo "<h2>X2 = ".$x2."</h2>";

        }
    }
    else
    {
        echo "<h2>A = 0 Impossível continuar</h2>";
    }
?>