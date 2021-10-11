<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Document</title>
    <style>
        table, td {
            border-width:1px;
            border-style:solid;
            border-color:#0094ff;
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
    echo '<table>';
    for($s=1;$s<=9;$s++){
        echo '<tr>';
        for($y=1;$y<=9;$y++){
            echo '<td>'.$y.' * '.$s.' = '.$y * $s.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
</body>
</html>