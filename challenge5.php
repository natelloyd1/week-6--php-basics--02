<?php

declare(strict_types=1);

function divide ($a, $b) {
    return $a / $b;
}

var_dump(divide(4, 2)); // float(2)
var_dump(divide(20, 2)); // float(10)
var_dump(divide(5, 2)); // float(2.5)
var_dump(divide(2.5, 0.5)); // float(5)