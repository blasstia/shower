<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php
        $grades = array(87,65,99,38);
        $grades[3]=100;
        $total = 0;
        for($i=0;$i<count($grades);$i++){
            print "$i=>$grades[$i],";
            $total +=$grades[$i];
        }
        echo '<br>total=' . $total . '<br />';
        echo '<hr />';

            $weekArray[]="sun";
            $weekArray[]="mon";
            $weekArray[]="tue";
            $weekArray[]="wed";
            $weekArray[]="thu";
            $weekArray[]="fri";
            $weekArray[]="sat";
            foreach($weekArray as $element){
                print "$element<br />";
            }
    ?>
</body>
</html>