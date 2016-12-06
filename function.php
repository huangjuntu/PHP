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

//function aa(){
//	echo "aa";
//}
//$bb='aa';
//if(function_exists($bb)){
//	echo $bb();
//}
//	class Car{
//		public $name='汽车';
//	}
//	$car=new Car();
//	echo $car->name;
//	class Car{
//		public $speed=0;
//		public function speadUp(){
//			$this->speed+=10;
//		}
//		
//	}
//	$car = new Car();
//		$car->speadUp();
//		echo $car->speed;
//class Car{
////		public $speed=0;
//		function __construct(){
//      print "构造函数被调用 \n";
//  }
//  function __destruct(){
//      print "析构函数被调用 \n";
//  }
//		
//	}
//	$car = new Car();
//		$car->speadUp();
//		echo $car->speed;
class Car{
	private static $speed = 10;
	public function getSpeed(){
		return self::$speed;
	}
	public static function speedUp(){
		return self::$speed+=10;
	}
	
}
$car = new Car();
Car::speedUp();  //调用静态方法加速
echo $car->getSpeed();  
?>