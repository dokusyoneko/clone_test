<?php
$a = 5;

if($a > 1){
echo "\$aは5です";
}

echo "<br/>";

$a = 7;
if($a == 10){
    echo "\$aは10です。";
}elseif($a == 7){
    echo "\$aは7です。";
}
echo "<br/>";
echo "<br/>";


$people = "Saburo";
switch($people){
    case $people === 12345:
        echo "ここには名前をいれてください";
        break;
    case $people === "saburo":
        echo "Saburoと入力してください";
        break;
    case $people === "Saburo":
        echo "三郎です";
        break;
    default:
        echo "正確な値を入力してください";
        break;
}

echo "<br/>";
echo "<br/>";

$a = 7;
$result = ($a >= 7) ? "TRUE" : "FALSE";
echo $result;
