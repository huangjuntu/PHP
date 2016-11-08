<?php
//	$arr=array('苹果','梨');
//	echo($arr[1]);
//	$arr=array('苹果','梨');
//	$arr1=$arr[1];
//	echo($arr1);
	$arrayName = array(
	'apple' =>'苹果',
	'apple1' =>'梨子' );
	$q=$arrayName["apple"];
	print_r($q);
	
//	$arr = array('apple'=>"苹果",'banana'=>"香蕉",'pineapple'=>"菠萝");
//$arr0=$arr['apple'];
//if( isset($arr0) ) {print_r($arr0);}
	
	$arrayName = array('apple' =>'苹果','pear'=>'梨');
	foreach($arrayName as $key => $value){
		echo($key.$value);
	}
?>