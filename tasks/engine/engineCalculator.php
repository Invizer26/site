<?php

$arg1 = $_POST[arg1];
$arg2 = $_POST[arg2];
$operation = $_POST[operation];

function mathAddition($arg1,$arg2) {
    return $arg1.' + '.$arg2.' = '.($arg1+$arg2).'<br>';
}

function mathSubtraction($arg1,$arg2) {
    return $arg1.' - '.$arg2.' = '.($arg1-$arg2).'<br>';
}

function mathMultiplication($arg1,$arg2) {
    return $arg1.' * '.$arg2.' = '.($arg1*$arg2).'<br>';
}

function mathDivision($arg1,$arg2)
{
    if ($arg2) {
        return $arg1 . ' / ' . $arg2 . ' = ' . ($arg1 / $arg2) . '<br>';
    }
    else{
        return $arg1 . ' / ' . $arg2 . ' = Error<br>';
    }
}


function mathOperation ($arg1,$arg2,$operation){
    switch($operation){
        case '+':
            return mathAddition($arg1,$arg2);
        case '-':
            return mathSubtraction($arg1,$arg2);
        case '*':
            return mathMultiplication($arg1,$arg2);
        case '/':
            return mathDivision($arg1,$arg2);
    }
}
$result = mathOperation($arg1,$arg2,$operation);
