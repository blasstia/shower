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
    $url = "https://data.tycg.gov.tw/opendata/datalist/datasetMeta/download?id=f4cc0b12-86ac-40f9-8745-885bddc18f79&rid=0daad6e6-0632-44f5-bd25-5e1de1e9146f";
    $json = file_get_contents($url);
    //print_r($json);
    $arr = json_decode($json,true);
    print "<table>";
    print "<tr>";
    print "<th>停車場名稱</th>";
    print "<th>總數量</th>";
    print "<th>剩餘數量</th>";
    print "</tr>";
    for($i=0;$i<count($arr["parkingLots"]);$i++){
        print "<tr>";
        print "<td>" . $arr["parkingLots"][$i]["parkName"] . "</td>";
        print "<td>" . $arr["parkingLots"][$i]["totalSpace"] . "</td>";
        print "<td>" . $arr["parkingLots"][$i]["surplusSpace"] . "</td>";
        print "</tr>";
    }
    print "</table>"
    ?>
</body>
</html>