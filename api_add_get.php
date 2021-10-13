<?php
    require_once("conniot.php");
    date_default_timezone_set('Asia/Taipei');
    $sql="INSERT INTO temperature_db (userid, temperature, humidity, datetime) VALUES (";
    $sql .= "'" . $_GET['userid'] . "',";
    $sql .= "'" . $_GET['temperature'] . "',";
    $sql .= "'" . $_GET['humidity'] . "',";
    $sql .= "'" . date("Y/m/d H:i:s") . "')";
    print $sql;
    mysqli_query($conn,$sql);
    mysqli_close($conn);
?>