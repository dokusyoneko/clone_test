<?php

for ($i = 1; $i <= 5; $i++){
    echo $i * 2 . "<br/>";
}

echo "<br/>";

$count = 0;

while($count < 20){
    $count += 1;
    echo $count . "<br/>";
}

echo "<br/>";
echo "<br/>";

$cont = 0;

while($cont <= 100){
    if($cont === 20){
        break;
    }if ($cont % 3 === 0) {
        $cont++;
        continue;
    }
    echo $cont . "<br/>";
    $cont++;
}

echo "<br/>";
echo "<br/>";

$num = 0;

do{
    echo "num = " . $num . "<br/>";
    $num++;
}while($num < 3);

echo "<br/>";
echo "<br/>";

for($i = 1; $i<=50; $i++){
    if($i % 15 === 0){
        echo "FizzBuzz" . "<br/>";
    }elseif($i % 5 === 0){
        echo "Buzz" . "<br/>";
    }elseif($i % 3 === 0){
        echo "Fizz". "<br/>";
    }else{
        echo $i . "<br/>";
    }
}

echo "<br/>";
echo "<br/>";

for($s = 1; $s < 6; $s++){
    for($j = 1; $j < 6; $j++){
        echo "●";
    }
    echo "<br/>";
}

