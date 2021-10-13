<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php
        $arr = array("color"=>"黑色","name"=>"blue","shape"=>"circle",100);
        if(!isset($arr["type"])){
            $arr["type"]="PHP";
            print "新增成功";
        }
        $arr["color"]="green";
        foreach($arr as $key => $value){
            print "$key=>$value ";
        }
		echo '<br />';
		print((double)microtime()*1000000);
		srand((double)microtime()*1000000);
		echo '<br />';
		for($i=0;$i<6;$i++){
			$num = rand(1,100);
			print "第" . $i+1 . "個號碼是：" . $num . "<br />";
		}
    ?>
</body>
</html>