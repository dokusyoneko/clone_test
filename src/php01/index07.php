<?php

function test($number1, $number2){
    $value = $number1 + $number2;
    return $value;
}

$total = test(1, 4);
echo $total;

echo "<br/>";
echo "<br/>";

function test1($score1,$score2,$score3){
    $total = $score1 + $score2 + $score3;
    if($total > 210){
    echo "合計点は" . $total . "点なので合格です";
    }else {
        echo "合計点は" . $total . "点なので不合格です";
    }
}
echo (test1(80,60,90));

echo "<br/>";
echo "<br/>";

function sankaku($num1,$num2){
    $menseki = ($num1 * $num2) / 2;
    return $menseki;
}

function sikaku($num1,$num2){
    $menseki = $num1 * $num2;
    return $menseki;
}

function daikei($num1,$num2,$num3){
    $menseki = ($num1 + $num2) * $num3 / 2;
    return $menseki;
}

echo sankaku(5,5);
echo "<br/>";
echo sikaku(6,6);
echo "<br/>";
echo daikei(4,5,4);