<?php
    require_once("connmysql.php");
    $pageRow_records = 10;
    $num_page = 1;
    if(isset($_GET["page"])){
        $num_page = $_GET["page"];
    }
    $startRow_records = ($num_page-1)*$pageRow_records;
    $sql = "SELECT * FROM students ";
    $sql_limit = $sql . "LIMIT " . $startRow_records . "," . $pageRow_records;
    //print $sql_limit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    if ($result = mysqli_query($conn,$sql_limit)){
        $all_result = mysqli_query($conn,$sql);
        $total_records = mysqli_num_rows($all_result);
        //計算總頁數=(比數/業比數)
        $total_pages = ceil($total_records/$pageRow_records);
        //print $total_pages;

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
            print "<td><a href='delete.php?id=" . $row["cID"] . "'>刪除</a></td>";
            print "</tr>";
        }
        print "</table>";
        mysqli_free_result($result);
        print "<table><tr>";
        //not in page 1
        if($num_page>1){
            print "<td><a href='data_page.php?page=1'>第一頁</a></td>";
            //print "<td><a href='data_page.php?page=" . $num_page-1 . "'>上一頁</a></td>";
        }
        //not last page
        if($num_page<$total_pages){
            //print "<td><a href='data_page.php?page=" . $num_page+1 . "'>下一頁</a></td>";
            print "<td><a href='data_page.php?page=" . $total_pages . "'>最末頁</a></td>";
        }
        print "</tr></table>";
        print "<table><tr>";
        for($i=1;$i<=$total_pages;$i++){
            print "<td>";
            if($i==$num_page){
                print $i;
            } else {
                print "<a href='data_page.php?page=$i'>$i</a>";
            }
            print "</td>";
        }
        print "</tr></table>";
    }
    mysqli_close($conn);
?>
</body>
</html>