<?php
    exec("/usr/bin/gpio -g read 14", $status1);
    exec("/usr/bin/gpio -g read 15", $status2);
    exec("/usr/bin/gpio -g read 18", $status3);
    exec("/usr/bin/gpio -g read 23", $status4);

    // print_r($status1);
    // print_r($status2);
    // print_r($status3);
    // print_r($status4);

    $json_arr = array(array("status1" => $status1[0] ,"status2" => $status2[0] ,"status3" => $status3[0] ,"status4" => $status4[0]));
    // print_r($json_arr);
    
    $json_result = json_encode($json_arr,JSON_UNESCAPED_UNICODE);
    print $json_result; 
?>
