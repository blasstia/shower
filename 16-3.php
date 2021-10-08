<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $url = "http://210.69.40.35/api/api/RoadDig";
    $json = file_get_contents($url);
    //print_r($json);
    $arr = json_decode($json,true);
    print "地點:" . $arr[0]["TOWN_NAME"] . "<br>";
    print "公所:" . $arr[0]["A_UN"] . "<br>";
    print "地址:" . $arr[0]["AC_NO"] . "<br>";
    print "<hr>";
    print "地點:" . $arr[0]["TOWN_NAME"] . "<br>";
    print "公所:" . $arr[0]["A_UN"] . "<br>";
    print "地址:" . $arr[0]["AC_NO"] . "<br>";
    print "<hr>";
    ?>
</body>
</html>