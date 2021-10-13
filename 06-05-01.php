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
    include "./inc1.php";
    showHeader();
    $sum1 = sumN2N(1,100);
    $sum2 = sumN2N(1,10);
    print "<p>重1家道100為:" . $sum1 . "</p>";
    print "<p>從1加到10為:" . $sum2 . "</p>";
?>
</body>
</html>