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
            text-align: center;
        }
        table{
            width:80%;
            margin:0px;
        }
    </style>
</head>
<body>
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

    if(mysqli_select_db($conn,"product")){
        print "database change succeed" . "<br>";
    } else {
        print "database change failed";
    }
    mysqli_query($conn,"SET NAMES utf8");   //chinese code
    $sql = "select * from price where category = '主機板'";
    if ($result = mysqli_query($conn,$sql)){
        print "<table><tr>";
        while($meta = mysqli_fetch_field($result)){
            print "<td>" . $meta->name . "</td>";
        }
        print "</tr>";
        //顯示欄位
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            print "<tr>";
            print "<td>" . $row["no"] . "</td>";
            print "<td>" . $row["category"] . "</td>";
            print "<td>" . $row["brand"] . "</td>";
            print "<td>" . $row["specification"] . "</td>";
            print "<td>" . $row["price"] . "</td>";
            print "<td>" . $row["date"] . "</td>";
            print "<td>" . $row["url"] . "</td>";
            print "</tr>";
        }
        print "</table>";
        mysqli_free_result($result);
    }

    mysqli_close($conn);
    ?>
</body>
</htmml>
