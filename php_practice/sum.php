<?php
//課題１
function sum($value){
	$result =$value*2;
	return $result;
}	
	echo sum(100);


//課題２

function f($a, $b){
	$sum = $a +$b;
	return $sum;
}
$result=f(2,6);
echo $result;
echo "/n";


//課題３

$arr =array(1,3,5,7,9);
foreach($arr as $a){
	echo "/n";
}

function play($arr){
 $result = 1;
 foreach($arr as $b){
 $result += $b;
}
echo $result;
}
play(array(1,5,9,11));
echo "/n";


//課題４
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 	if ($max_number < $a){
 		$max_number =$a;
 	}
 //どうしたらいいかわからない・・・・
 }
 return $max_number;
 }
 echo max_array (1,10,20,30);
 echo "/n";
 
 //課題５
 
 //strip_tags 文字列からHTML　および　PHPタグを取り除く
$ar ="<h1>HTML関数</h1>"
."<p>タグを取り除く！</p>";
echo strip_tags($ar)."\n";
 
 //array_push 一つ以上の要素を配列の最後に追加する
 
 $stack =array("pencil","eraser");
 array_push ($stack,"ruler","compass");
 print_r ($stack);
 
 //array_merge 一つまたは、複数の配列をマージする
 
 //配列を作成
 $stationery1 = ['pencil sharpener','crayon','brush'];
 $stationery2 = ['eraser','paper'];
 $stationery3 = ['scissors','glue','file'];
 
 //配列を結合する
 $stationery_merge = array_merge ($stationery1,$stationery2,$stationery3);
 
 print_r($stationery_merge);
 
 //time, mktime
 $time = mktime(9);
 var_dump(date('Y年m月d日h時i分s秒',$time));
 print('<br/>');
 
 //date
 //現在日付をフォーマットする
 echo date('Y/m/d');
 echo '<br/>';
 
 ?>