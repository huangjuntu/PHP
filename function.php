<?php
// function show($a,$b){
// 	return $a+$b;
// }
// $c =show(3,4);
//function sum($a, $b) {
//  return $a+$b;
//}
//在这里调用函数取得返回值
//$c = sum(1, 2);
//echo $c;

//function aa(){
//	echo "nihao";
//}
//$aa1= 'aa';
//echo $aa1();

//$apple="苹果很好吃";
//$apple1=str_replace('苹果', '很好吃', $apple);
//echo $apple1;

function aa(){
	echo "aa";
}
$bb='aa';
if(function_exists($bb)){
	echo $bb();
}
?>