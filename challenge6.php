<?php

declare(strict_types=1);

function stone ($num) {
    return ($num / 2.2046226218);
}
var_dump(
    stone(74), // float(11.65278)
    stone(50), // float(7.8735)
);
