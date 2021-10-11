<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php
	for ($i=1;$i<=10;$i++){
		if ($i % 2 !=0){
			echo $i . "&nbsp;";
		}else{
			//break;
			continue;
		}
	}	
?>
</body>
</html>