<?php
    exec("/usr/bin/gpio -g read 14", $status1);
    exec("/usr/bin/gpio -g read 15", $status2);
    exec("/usr/bin/gpio -g read 18", $status3);
    exec("/usr/bin/gpio -g read 23", $status4);
    print_r($status1);
    print_r($status2);
    print_r($status3);
    print_r($status4);
?>


