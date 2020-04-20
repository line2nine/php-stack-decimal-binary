<?php

function convertDecimalToBinary($num)
{
    $stack = new SplStack();

    while ($num > 1) {
        $result = $num % 2;
        $stack->push($result);
        $num /= 2;
    }

    foreach ($stack as $item) {
        echo $item;
    }
}