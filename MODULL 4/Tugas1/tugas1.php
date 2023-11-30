<?php

function generator($n)
{
    $result = [];

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $result[] = "HelloWorld";
        } elseif ($i % 3 == 0) {
            $result[] = "Hello";
            
        } 
        elseif ($i % 10 == 0) {
            $result[] = "Zul";
    }elseif ($i % 5 == 0) {
            $result[] = "World";
        }
                else {
            $result[] = $i;
        }
    }

    return $result;
}

// Contoh pemanggilan fungsi dengan n = 15
$output = generator(35);

// Konversi array menjadi JSON
$jsonOutput = json_encode($output, JSON_PRETTY_PRINT);

// Tampilkan JSON
echo $jsonOutput;
