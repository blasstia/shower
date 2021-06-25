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
            border-color: green;
        }
    </style>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "product";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(mysqli_connect_error()){
        print "Failed to connect to mysql:" . mysqli_connect_error();
    } else {
        print "Successful connection" . "<br>";
    }

    if(mysqli_select_db($conn,"product")){
        print "database change succeed";
    } else {
        print "database change failed";
    }

    mysqli_query($conn,"SET NAMES utf8");   //chinese code
    $sql = "select * from price where category = '主機板'";

    if ($result = mysqli_query($conn,$sql)){
        print "<table width='400px' border='1'><tr align='center'>";
        print "<th>欄位名稱</th><th>最大長度</th>";
        print "</tr>";
        $i=0;
        while ($i<mysqli_num_fields($result)){
            $meta = mysqli_fetch_field_direct($result, $i);
            print "<tr>";
            print "<td>" . $meta->name . "</td>";
            print "<td>" . $meta->max_length . "</td>";
            print "</tr>";
            $i++;
        }
        print "</table>";
    }

    mysqli_close($conn);
    ?>
</body>
</htmml>
