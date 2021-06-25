<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php
        date_default_timezone_set("Asia/Taipei");
        $hour = date("H");
        print $hour;

        //$hour = 22;
        $str = ($hour >= 12) ? "PM":"AM";
        $hour = ($hour >= 12) ? $hour - 12:$hour;
        print "<h1>目前的時間: $hour $str</h1>";
    ?>
</body>
</html>