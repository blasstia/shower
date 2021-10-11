<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php
        $score = 87;
        if($score>=60 && $score<70){
            print "丙等<br />";
        }elseif($score>=70 && $score<80){
            print "乙等<br />";
        }elseif($score>=80 && $score<90){
            print "甲等<br />";
        }elseif($score>=90 && $score<100){
            print "優等<br />";
        }elseif($score<0){
            print "輸入錯誤<br />";
        }else{
            print "不及格<br />";
        }
        ?>
</body>
</html>