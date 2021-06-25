<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<?php
$row0 = array(64, 65); // 各列的一維陣列元素
$row1 = array(77, 81);
$row2 = array(89, 93);
// 建立二維陣列
$grades = array($row0, $row1, $row2);

$grades[1][0] = 56;  // 指定元素值
// 使用巢狀迴圈計算總和
$total = 0;

foreach($grades as $matrix){
	$sum = 0;
	foreach($matrix as $element){
		print($element . " ");
		$sum += $element;
	}
	echo ("成績小計:".$sum."<br/>");
	$total+= $sum;
}
print("==>全部人總成績: ".$total."<br/>");
?>
</body>
</html>