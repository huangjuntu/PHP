<?php
	$fn = fopen('./liuyan1-3.txt', 'r');
	$i = 1;
	while (($row = fgetcsv($fn)) != false) {
//			print_r($row);
			echo '<li><a href="liuyan-reading.php?tid=',$i,' ">',$row[0],'</li>';
		$i = $i +1;
	}
?>