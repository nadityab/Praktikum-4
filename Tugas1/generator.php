<?php

function generator($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "Hello World\n";
        } elseif ($i % 3 == 0) {
            echo "Hello\n";
        } elseif ($i % 5 == 0) {
            echo "World\n";
        } else {
            echo $i . "\n";
        }
    }
}

// Contoh penggunaan dengan n = 15
generator(15);

?>