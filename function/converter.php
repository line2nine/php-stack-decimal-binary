<?php
include "class/DecimalToBinary.php";

function convertDecimalToBinary($num)
{
    $stack = new DecimalToBinary();

    while ($num > 1) {
        $result = $num % 2;
        $stack->push($result);
        $num /= 2;
    }
    $stack->display();
}