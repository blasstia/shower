<?php
    require "connmysql.php";
    $sql = "SELECT * FROM students";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生資料管理系統</title>
    <style>
        div{
            text-align:center;
        }
        table,th,td{
            margin:auto;
            border-width: 1px;
            border-style: solid;
            border-color: black;
        }
    </style>
</head>
<body>
<?php
    if ($result = mysqli_query($conn,$sql)){
        $total_records = mysqli_num_rows($result);
        print "<div><h1>學生資料管理系統</h1></div>";
        print "<div><p>目前資料筆數：" . $total_records . "</p>";
        print "<a href='add.php'>新增學生資料</a>。</p></div>";
        print "<table>";
        print "<tr>";
        print "<th>座號</th>";
        print "<th>姓名</th>";
        print "<th>性別</th>";
        print "<th>生日</th>";
        print "<th>電子郵件</th>";
        print "<th>電話</th>";
        print "<th>住址</th>";
        print "<th>功能一</th>";
        print "<th>功能二</th>";
        print "</tr>";
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            print "<tr>";
            //print_r($row);
            print "<td>" . $row["cID"] . "</td>";
            print "<td>" . $row["cName"] . "</td>";
            print "<td>" . $row["cSex"] . "</td>";
            print "<td>" . $row["cBirthday"] . "</td>";
            print "<td>" . $row["cEmail"] . "</td>";
            print "<td>" . $row["cPhone"] . "</td>";
            print "<td>" . $row["cAddr"] . "</td>";
            print "<td><a href='update.php?id=" . $row["cID"] . "'>修改</a></td>";
            print "<td><a href='delete.php?id=" . $row["cID"] . "'</a>刪除</td>";
            print "</tr>";
        }
        print "</table>";
        mysqli_free_result($result);
    }

    mysqli_close($conn);
?>
</body>
</htmml>
