<?php
	$tid = $_GET['tid'];
	
	//echo '你想看第'.$tid.'行留言';
	
	//打开得到文件
	$fn = fopen('./liuyan1-3.txt', 'r');
	
	//print_r(fgetcsv($fn));
	//print_r(fgetcsv($fn));
	//print_r(fgetcsv($fn));
	
	$i = 1;
	while (($row = fgetcsv($fn)) != false) {
		//	print_r($row);
		if ($i == $tid) {
//			print_r($row);
			echo '<h1>',$row[0],'</h1>';
			echo '<p>',$row[1],'</p>';
		}
		$i = $i + 1;
	
	}
?>