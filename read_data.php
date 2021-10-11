<?php
    require_once("connmysql.php");

    $sql = "SELECT * FROM students";
    if ($result = mysqli_query($conn,$sql)){
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $json_arr[] = $row;
        }
        //print_r($json_arr);
        $result = json_encode($json_arr);
        print $result;
    }
    mysqli_close($conn);
?>