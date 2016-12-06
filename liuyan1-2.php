<?php
//	print_r($_POST);

//php打开一个文件

//fh是资源类型变量

/*$fh = fopen('./liuyan1-3.txt', 'a');//打开文件

 //往文件写内容
 fwrite($fh, "from php");

 fclose($fh);
 echo 'ok';
 */

//正式留言
$str = $_POST['title'] . "," . $_POST['content'] . "\n";
$fh = fopen('./liuyan1-3.txt', 'a');
fwrite($fh, $str);
fclose($fh);
echo 'ok';
?>