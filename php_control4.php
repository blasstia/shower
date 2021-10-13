<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php
	$direction = "南";
	switch ($direction){
		case "東":
			echo "我要往東走";
			break;
		case "西":
			echo "我要往西走";
			break;
		case "南":
			echo "我要往南走";
			break;
		case "北":
			echo "我要往北走";
			break;
		default:
			echo "我不知道要往哪走";
}
?>
</body>
</html>