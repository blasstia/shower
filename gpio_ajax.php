<?php
    $on = 1;
    $off = 0;
    $success = [];
    if(isset($_POST['gpio']) && isset($_POST['sw'])){
        $gpio = $_POST['gpio'];
        $sw = $_POST['sw'];
    }
    if(!empty($sw)){
        $setMode = shell_exec("/usr/bin/gpio -g mode {$gpio} out");
        shell_exec("/usr/bin/gpio -g write {$gpio} {$off}");

        switch($sw){
            case 'on':
                $gpio_on=shell_exec("/usr/bin/gpio -g write {$gpio} {$on}");
                $success = ['sw'=>$sw, 'gpio'=>$gpio];
                break;
            case 'off':
                $gpio_off=shell_exec("/usr/bin/gpio -g write {$gpio} {$off}");
                $success = ['sw'=>$sw, 'gpio'=>$gpio];
                break;
        }
    }
    echo json_encode($success);
?>