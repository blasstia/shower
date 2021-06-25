<?php
    if(!isset($_GET["id"])){
        header("Location:data_page.php");
    }
    require_once("connmysql.php");
    if (isset($_POST["action"]) && $_POST["action"]=="delete"){
        //print "ok";
        $sql = "DELETE FROM students WHERE cID = " . $_POST["cID"];
        //print $sql;
        // $sql = "UPDATE students SET ";
        // $sql .= "cName='" . $_POST["cName"] . "',";
        // $sql .= "cSex='" . $_POST["cSex"] . "',";
        // $sql .= "cBirthday='" . $_POST["cBirthday"] . "',";
        // $sql .= "cEmail='" . $_POST["cEmail"] . "',";
        // $sql .= "cPhone='" . $_POST["cPhone"] . "',";
        // $sql .= "cAddr='" . $_POST["cAddr"] . "'";
        // $sql .= "WHERE cID=" . $_POST["cID"];
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        header("Location:data_page.php");
    }
    $sql = "SELECT * FROM students WHERE cID = " . $_GET["id"];
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //print_r($row);
    mysqli_close($conn);
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
    <script>
        function myFunction(){
            return confirm("您確定要刪除這筆資料？");
        }
    </script>
</head>
<body>
    <form action="" method="POST">
    <div><h1>學生資料管理系統：刪除資料</h1></div>
    <div><a href='data_page.php'>回主畫面</a>。</p></div>
        <table>
            <tr>
                <th>欄位</th>
                <th>資料</th>
            </tr>
            <tr>
                <td>姓名</td>
                <td><?php print $row["cName"];?></td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                <?php if($row["cSex"]=="M") print "男";else print "女";?>
                </td>
            </tr>
            <tr>
                <td>生日</td>
                <td><?php print $row["cBirthday"];?></td>
            </tr>
            <tr>
                <td>電子郵件</td>
                <td><?php print $row["cEmail"];?></td>
            </tr>
            <tr>
                <td>電話</td>
                <td><?php print $row["cPhone"];?></td>
            </tr>
            <tr>
                <td>住址</td>
                <td><?php print $row["cAddr"];?></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="cID" value="<?php print $row["cID"];?>">
                <!--<input type="submit" name="button" value="確定刪除資料">-->
                <button onclick="return myFunction();">刪除這筆資料</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>