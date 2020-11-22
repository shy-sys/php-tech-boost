//課題１
<?php
function sum($max){
	$result =$max*2;
	return $result;
}	
	echo sum(100);
?>

//課題２
<?php
function f($a, $b){
	$sum = $a +$b;
	return $sum;
}
$result=f(2,2);
echo $result;
echo "/n";
?>

//課題３
<?php
$arr =array(1,3,5,7,9);
foreach($arr as $a){
	echo "/n";
}

//応用
<?php
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
 ?>
 