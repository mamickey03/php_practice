<?php
//$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示するように実装してください。
if ($name = "mami"){
    echo "私は真美です";
} else {
  echo "真美ではありません";
}

echo "\n";

//for文を使って、1から10000までの合計の値を表示してください。
$total = 0;
for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

echo "\n";

//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("banana", "apple", "peach","strawberry", "melon");
foreach ($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0)
    echo $i."\n";
    }


