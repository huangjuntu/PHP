<?php
//	error_reporting(0);//禁止显示PHP警告提示
//	$var;
//	var_dump($var);
//	$var1 = NULL;
//	var_dump($var1);
//	$var2 = null;
//	var_dump($var2);
//	$var3 = '好好学习';
//	var_dump($var3);
//	$var4 = '好好学习';
//	unset($var4);       //释放$var4（将变量$var4注销定义）
//	var_dump($var4);

//	$p = 'PII';
//	define($p, 11);
//	echo PII;
//	echo "<br>";
//	define('PII2', 22);
//	echo PII2;
//	define("PI", 3.14);
//	$r=3;
//	echo "周长为：".(PI*$r*3);
//	echo "面积为".(PI*2*$r);

//	echo __FILE__;
//	echo "<br/>";
//	echo __LINE__;
//	echo "<br/>";
//	echo PHP_OS;
//	echo "<br/>";
//	echo PHP_VERSION;
//$p = '';
//define("PI1", 1.2);
//define("PI2", 2.3);
//
//$height = '号';
//if ($height == '号') {
//	$p = 'PI1';
//} else {
//	$p = 'PI2';
//}
//$r = 1;
//$area = constant($p) * $r * $r;
//echo $area;
//define("PI1", 3.14);
////	$PI=3.14;
//	$PI1=defined("PI1");
//	var_dump($PI1);

//	$one=1;
//	$two=2;
//	echo "两者相加的值为：".($one+$two);
//	$a = '我在干什么？';
//	$b = $a;
//	echo $b."<br/>";
//	
//	$c =&$a;
//	$a = '你猜？';
//	echo $c;
//	$ee = 1;
//	$ff =$ee>=2?"你好":"不行";
//	echo $ff;
// $conn=@mysql_connect("localhost","username","paseword");
// echo "出错了，错误原因是：".$php_errormsg;

//	for($i=1,$sum=0;$i<=100;$i++){
//		$sum=$i+$sum;
//	}
//	echo $sum."<br/>";
//	$sum1=0;
//	$i2=1;
//	while($i2<=100){
//		
//		$sum1=$sum1+$i2;
//		$i2++;
//	}
//	echo  $sum1;
$students = array(
'2010'=>'令狐冲',
'2011'=>'林平之',
'2012'=>'曲洋',
'2013'=>'任盈盈',
'2014'=>'向问天',
'2015'=>'任我行',
'2016'=>'冲虚',
'2017'=>'方正',
'2018'=>'岳不群',
'2019'=>'黄君图',
);//10个学生的学号和姓名，用数组存储
$me=2019;
foreach($students as $key => $aa){
	if($key==$me){
		echo $aa;
		break;
	}
}
?>