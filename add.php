<?php
if(isset($_POST["action"]) && $_POST["action"]=="add"){
    require_once("connmysql.php");
    $sql = "insert into students (cName, cSex, cBirthday, cEmail, cPhone, cAddr) VALUES (";
    $sql .="'" . $_POST['cName'] . "',";
    $sql .="'" . $_POST['cSex'] . "',";
    $sql .="'" . $_POST['cBirthday'] . "',";
    $sql .="'" . $_POST['cEmail'] . "',";
    $sql .="'" . $_POST['cPhone'] . "',";
    $sql .="'" . $_POST['cAddress'] . "')";
    //print $sql;
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("Location:data_page.php");
}
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
    <form action="" method="POST">
    <div><h1>學生資料管理系統：新增資料</h1></div>
    <div><a href='data_page.php'>回主畫面</a>。</p></div>
        <table>
            <tr>
                <th>欄位</th>
                <th>資料</th>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="cName"></td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                <input type="radio" name="cSex" value="M">男
                <input type="radio" name="cSex" value="F" checked>女
                </td>
            </tr>
            <tr>
                <td>生日</td>
                <td><input type="date" name="cBirthday"></td>
            </tr>
            <tr>
                <td>電子郵件</td>
                <td><input type="text" name="cEmail"></td>
            </tr>
            <tr>
                <td>電話</td>
                <td><input type="text" name="cPhone"></td>
            </tr>
            <tr>
                <td>住址</td>
                <td><input type="text" name="cAddress" size="40"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                <input type="hidden" name="action" value="add">
                <input type="submit" name="button" value="新增資料">
                <input type="reset" name="reset" value="重設">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>