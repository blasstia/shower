<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border-width: 1px;
            border-style: solid;
            border-color: #000000;
        }
        th{
            text-align: center;
            background-color: green;
        }
        .top{
            text-align: left;
            background-color : #ff0000;
        }
        .normal{
            text-align: left;
            background-color : #ffff00;
        }
    </style>
</head>
<body>
<div style="text-align: center;"><h1>106班學生成績總表</h1></div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "class";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(mysqli_connect_error()){
        print "Failed to connect to mysql:" . mysqli_connect_error();
    } else {
        print "Successful connection" . "<br>";
    }

    mysqli_query($conn,"SET NAMES utf8");   //chinese code
    $sql = "select students.cID AS '座號', students.cName AS '姓名', students.cSex AS '性別'" . 
    ", students.cAddr AS '地址', SUM(scorelist.score) AS '總分', ROUND(AVG(scorelist.score),2) AS '平均'" . 
    "From students LEFT JOIN scorelist ON students.cID = scorelist.cID GROUP BY students.cID " .
    "ORDER BY SUM(scorelist.score) DESC";
    if ($result = mysqli_query($conn,$sql)){
        print "<table><tr>";
        while($meta = mysqli_fetch_field($result)){
            print "<td>" . $meta->name . "</td>";
        }
        print "</tr>";
        $j=0;
        while($row = mysqli_fetch_row($result)){
            print "<tr>";
            $j++;
            for($i=0;$i<mysqli_num_fields($result);$i++){
                if ($j<=3){
                    print "<td class='top'>" . $row[$i] . "</td>";
                } else {
                    print "<td class='normal'>" . $row[$i] . "</td>";
                }
            }
            print "</tr>";
        }
        print "</table>";
        mysqli_free_result($result);
    }

    mysqli_close($conn);
    ?>
</body>
</htmml>
