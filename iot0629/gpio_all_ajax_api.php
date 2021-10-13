<?php
$on = 1;
$off = 0;
$success = [];
$sw = $_POST['sw'];
$gpio = $_POST['gpio'];
$led = $_POST['led'];

if (isset($_POST['sw'])) {
    $setMode = shell_exec("/usr/bin/gpio -g mode {$gpio} out");

    switch ($_POST['sw']) {
        case "on":
            $gpio_on = shell_exec("/usr/bin/gpio  -g write {$gpio} {$on}");
            $success = ['sw' => 'on', 'gpio' => $gpio, 'led' => $led];
            break;
        case "off":
            $gpio_off = shell_exec("/usr/bin/gpio -g write {$gpio} {$off}");
            $success = ['sw' => 'off', 'gpio' => $gpio, 'led' => $led];
            break;
    }

    //echo $success;   // echo 只能處理字串，所以要轉成 JSON
    echo json_encode($success);

}