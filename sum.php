<?php
//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($max) {
    $result = $max*2;
    return $result;
}
    echo sum(50);

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a,$b){
 $sum=$a+$b;
 return $sum;
}

$result = f(4,5);
echo $result;

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function b($arr){
    $result = 1;
    foreach($arr as $a){
        $result = $result*$a;
    }
    return $result;
    
}
$array = array(1,3,5,7,9);
echo b($array);

 echo "更新";
 