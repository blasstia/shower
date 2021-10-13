<?php
    require_once("conniot.php");
    date_default_timezone_set('Asia/Taipei');
    $sql="INSERT INTO temperature_db (userid, temperature, humidity, datetime) VALUES (";
    $sql .= "'" . $_POST['userid'] . "',";
    $sql .= "'" . $_POST['temperature'] . "',";
    $sql .= "'" . $_POST['humidity'] . "',";
    $sql .= "'" . date("Y/m/d H:i:s") . "')";
    print $sql;
    mysqli_query($conn,$sql);
    mysqli_close($conn);
?>