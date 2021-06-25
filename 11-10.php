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
            border-color: blue;
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

    mysqli_query($conn,"SET NAMES utf8");   //chinese code
    $sql = "select * from students order by BMI DESC";
    if ($result = mysqli_query($conn,$sql)){
        print "<table><tr>";
        while($meta = mysqli_fetch_field($result)){
            print "<td>" . $meta->name . "</td>";
        }
        print "</tr>";
        //顯示欄位
        $i=0;
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            if($i<3){
                print "<tr style='background-color: red'>";
            } else {
                print "<tr style='background-color: yellow'>";
            }
            
            print "<td>" . $row["cID"] . "</td>";
            print "<td>" . $row["cName"] . "</td>";
            print "<td>" . $row["cSex"] . "</td>";
            print "<td>" . $row["cBirthday"] . "</td>";
            print "<td>" . $row["cEmail"] . "</td>";
            print "<td>" . $row["cPhone"] . "</td>";
            print "<td>" . $row["cAddr"] . "</td>";
            print "<td>" . $row["BMI"] . "</td>";
            print "<td>" . $row["cHeight"] . "</td>";
            print "<td>" . $row["cWeight"] . "</td>";
            print "</tr>";
            $i++;
        }
        print "</table>";
        mysqli_free_result($result);
    }

    mysqli_close($conn);
    ?>
</body>
</htmml>
