<?php

    echo "<center>";
    $angka = 5;
    for ($i=1; $i <= $angka ; $i++) { 
        for ($a=1; $a <= $i ; $a++) { 
            echo "  &nbsp";
        }
        for ($b = $angka; $b >= $i; $b-=1) { 
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    $hasil = 10;
    while ($hasil> 1) {
        $b = $hasil;
        while ($b >= 1) {
            echo "*";
            $b = $b - 1;
        }
    echo "<br>";
    $hasil = $hasil - 2;
    }
    echo "<br>";

?>