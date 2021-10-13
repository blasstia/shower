<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border-width: 1px;
            border-style: solid;
            border-color: black;
            text-align: center;
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
        //print "Successful connection" . "<br>";
    }

    mysqli_query($conn,"SET NAMES utf8");   //chinese code
    $sql = "select students.cID AS '座號', students.cName AS '姓名', students.cSex AS '性別'" . 
    ", students.cAddr AS '地址', SUM(scorelist.score) AS '總分', ROUND(AVG(scorelist.score),2) AS '平均'" . 
    "From students LEFT JOIN scorelist ON students.cID = scorelist.cID GROUP BY students.cID " .
    "ORDER BY SUM(scorelist.score) DESC";
    if ($result = mysqli_query($conn,$sql)){
        print "<center><table><tr style='background-color: green;text-align: center'>";
        while($meta = mysqli_fetch_field($result)){
            print "<td>" . $meta->name . "</td>";
        }
        print "</tr>";
        //顯示欄位
        $i=0;
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            if($i<3){
                print "<tr style='background-color: red;text-align: left'>";
            } else {
                print "<tr style='background-color: yellow;text-align: left'>";
            }
            
            print "<td>" . $row["座號"] . "</td>";
            print "<td>" . $row["姓名"] . "</td>";
            print "<td>" . $row["性別"] . "</td>";
            print "<td>" . $row["地址"] . "</td>";
            print "<td>" . $row["總分"] . "</td>";
            print "<td>" . $row["平均"] . "</td>";
            print "</tr>";
            $i++;
        }
        print "</table></center>";
        mysqli_free_result($result);
    }

    mysqli_close($conn);
    ?>
</body>
</htmml>
