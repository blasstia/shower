<?php
require_once("connmysql.php");

if(isset($_POST["label"]) && isset($_POST["key"]) && $_POST["key"]=="1234"){
    $sql = "SELECT * FROM `led_status` WHERE `label`=". $_POST["label"];
    $sql .= " ORDER BY `datetime` DESC LIMIT 1";

    // print $sql;
    if ($result = mysqli_query($conn,$sql)){
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $json_arr[] = $row;

        }
        //print_r($json_arr);
        $result = json_encode( $json_arr ); 
        print $result;
    }
    mysqli_close($conn);
}
?>