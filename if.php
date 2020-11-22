<?php

//$name にあなたの名前を代入し、if文で　$nameがあなたの名前だったら『私はあなたの名前です』、もし違ったら『あなたの名前では無いと表示
$name="ゆうすけ";
if($name == "ゆうすけ") {
	echo "私はゆうすけです";
} else {
	echo "あなたの名前ではありません";
}

//for文を使って、1から１００００までの値を表示して下さい。
$total = 0;
for($i=0; $i<=10000; $i++){
$total += $i;
echo $total;
}


//＄fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("りんご","いちご","キウイ","レモン","なし");
foreach($fruits as $fruit){
	echo "要素は". $fruit;
	echo "/n";
}


//次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
$start = 1;
$end = 100;
for($i = $start; $i< $end; $i++){
	if($i% 5 ==0){
	echo $i;
	echo "/n";
}
}
?>