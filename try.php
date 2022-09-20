<?php
function inverso($x) {
    if (!$x) {
        throw new Exception('Zero division.');
    }
    return 1/$x;
}

try {
    echo inverso(5) . "\n";
    echo inverso(0) . "\n";
} catch (Exception $e) {
    echo 'and the error is: ',  $e->getMessage(), "\n";
}  ?>